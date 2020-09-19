<?php
/**
 * 采购
 */

namespace app\home\controller;
use think\Db;
use think\Verify;

class Purchase extends Base
{
    public function _initialize() {
        parent::_initialize();
    }

    public function lists($tid)
    {
        $param = input('param.');

        /*获取当前栏目ID以及模型ID*/
        $page_tmp = input('param.page/s', 0);
        if (empty($tid) || !is_numeric($page_tmp)) {
            abort(404, '页面不存在');
        }

        $map = [];
        if (!is_numeric($tid) || strval(intval($tid)) !== strval($tid)) {
            $map = array('a.dirname' => $tid);
        } else {
            $map = array('a.id' => $tid);
        }
        $map['a.is_del'] = 0; // 回收站功能
        $map['a.lang']   = $this->home_lang; // 多语言
        $row             = M('arctype')->field('a.id, a.current_channel, b.nid')
            ->alias('a')
            ->join('__CHANNELTYPE__ b', 'a.current_channel = b.id', 'LEFT')
            ->where($map)
            ->find();
        if (empty($row)) {
            abort(404, '页面不存在');
        }
        $tid           = $row['id'];
        $this->nid     = $row['nid'];
        $this->channel = intval($row['current_channel']);
        /*--end*/

        $result = $this->logic($tid); // 模型对应逻辑

        $eyou       = array(
            'field' => $result,
        );
        $this->eyou = array_merge($this->eyou, $eyou);
        $this->assign('eyou', $this->eyou);

        $typeid = $tid;
        $condition['a.typeid'] = $typeid;
        $guestbook  = DB::name('guestbook')
        ->field("b.*, a.*")
        ->alias('a')
        ->join('__ARCTYPE__ b', 'a.typeid = b.id', 'LEFT')
        ->where($condition)
        ->order('a.add_time desc')
        ->limit(0,6)
        ->getAllWithIndex('aid');
        if ($guestbook) {
            $where = [
                'b.aid'     => ['IN', array_keys($guestbook)],
                'a.is_showlist' => 1,
                'a.lang'    => $this->admin_lang,
                'a.is_del'  => 0,
            ];
            $row       = DB::name('guestbook_attribute')
                ->field('a.attr_name, b.attr_value, b.aid, b.attr_id')
                ->alias('a')
                ->join('__GUESTBOOK_ATTR__ b', 'b.attr_id = a.attr_id', 'LEFT')
                ->where($where)
                ->order('b.aid desc, a.sort_order asc, a.attr_id asc')
                ->getAllWithIndex();
            $attr_list = array();
            foreach ($row as $key => $val) {
                if (preg_match('/(\.(jpg|gif|png|bmp|jpeg|ico|webp))$/i', $val['attr_value'])) {
                    if (!stristr($val['attr_value'], '|')) {
                        $val['attr_value'] = handle_subdir_pic($val['attr_value']);
                        $val['attr_value'] = "<img src='{$val['attr_value']}' width='60' height='60' style='float: unset;cursor: pointer;' onclick=\"Images('{$val['attr_value']}', 650, 350);\" />";
                    }
                } else {
                    $val['attr_value'] = str_replace(PHP_EOL, ' | ', $val['attr_value']);
                }
                $attr_list[$val['aid']][] = $val;
            }
            $num = 0;
            foreach ($guestbook as $key => $val) {
                $purchase[$num] = isset($attr_list[$val['aid']]) ? $attr_list[$val['aid']] : array();
                $purchase[$num][$key] = array(
                    'attr_name' => '日期',
                    'attr_value' => date('Y-m-d H:i',$guestbook[$key]['add_time'])
                );
                $num ++;
            }
        }
        $this->assign('purchase',$purchase);
        $viewfile = 'lists_purchase';
        $html = $this->fetch(":{$viewfile}");
        return $html;
    }

    /**
     * 模型对应逻辑
     * @param intval $tid 栏目ID
     * @return array
     */
    private function logic($tid = '')
    {
        $result = array();

        if (empty($tid)) {
            return $result;
        }

        switch ($this->channel) {
            case '6': // 单页模型
            {
                $arctype_info = model('Arctype')->getInfo($tid);
                if ($arctype_info) {
                    // 读取当前栏目的内容，否则读取每一级第一个子栏目的内容，直到有内容或者最后一级栏目为止。
                    $archivesModel = new \app\home\model\Archives();
                    $result_new = $archivesModel->readContentFirst($tid);
                    // 阅读权限
                    if ($result_new['arcrank'] == -1) {
                        $this->success('待审核稿件，你没有权限阅读！');
                        exit;
                    }
                    // 外部链接跳转
                    if ($result_new['is_part'] == 1) {
                        $result_new['typelink'] = htmlspecialchars_decode($result_new['typelink']);
                        if (!is_http_url($result_new['typelink'])) {
                            $typeurl = '//'.$this->request->host();
                            if (!preg_match('#^'.ROOT_DIR.'(.*)$#i', $result_new['typelink'])) {
                                $typeurl .= ROOT_DIR;
                            }
                            $typeurl .= '/'.trim($result_new['typelink'], '/');
                            $result_new['typelink'] = $typeurl;
                        }
                        $this->redirect($result_new['typelink']);
                        exit;
                    }
                    /*自定义字段的数据格式处理*/
                    $result_new = $this->fieldLogic->getChannelFieldList($result_new, $this->channel);
                    /*--end*/
                    $result = array_merge($arctype_info, $result_new);

                    $result['templist'] = !empty($arctype_info['templist']) ? $arctype_info['templist'] : 'lists_'. $arctype_info['nid'];
                    $result['dirpath'] = $arctype_info['dirpath'];
                    $result['typeid'] = $arctype_info['typeid'];
                }
                break;
            }

            default:
            {
                $result = model('Arctype')->getInfo($tid);
                /*外部链接跳转*/
                if ($result['is_part'] == 1) {
                    $result['typelink'] = htmlspecialchars_decode($result['typelink']);
                    if (!is_http_url($result['typelink'])) {
                        $result['typelink'] = '//'.$this->request->host().ROOT_DIR.'/'.trim($result['typelink'], '/');
                    }
                    $this->redirect($result['typelink']);
                    exit;
                }
                /*end*/
                break;
            }
        }

        if (!empty($result)) {
            /*自定义字段的数据格式处理*/
            $result = $this->fieldLogic->getTableFieldList($result, config('global.arctype_channel_id'));
            /*--end*/
        }

        /*是否有子栏目，用于标记【全部】选中状态*/
        $result['has_children'] = model('Arctype')->hasChildren($tid);
        /*--end*/

        // seo
        $result['seo_title'] = set_typeseotitle($result['typename'], $result['seo_title']);

        /*获取当前页面URL*/
        $result['pageurl'] = $this->request->url(true);
        /*--end*/

        /*给没有type前缀的字段新增一个带前缀的字段，并赋予相同的值*/
        foreach ($result as $key => $val) {
            if (!preg_match('/^type/i', $key)) {
                $key_new = 'type' . $key;
                !array_key_exists($key_new, $result) && $result[$key_new] = $val;
            }
        }
        /*--end*/

        return $result;
    }

    /**
     * 内容页
     */
    public function content($aid = '')
    {
        if (!is_numeric($aid) || strval(intval($aid)) !== strval($aid) || empty($aid) || !isset($aid)) {
            abort(404,'页面不存在');
        }
        $seo_pseudo = config('ey_config.seo_pseudo');
        /*URL上参数的校验*/
        if (3 == $seo_pseudo)
        {
            if (stristr($this->request->url(), '&c=View&a=index&')) {
                abort(404,'页面不存在');
            }
        }
        else if (1 == $seo_pseudo || (2 == $seo_pseudo && isMobile()))
        {
            $seo_dynamic_format = config('ey_config.seo_dynamic_format');
            if (1 == $seo_pseudo && 2 == $seo_dynamic_format && stristr($this->request->url(), '&c=View&a=index&')) {
                abort(404,'页面不存在');
            }
        }
        /*--end*/
        $aid = intval($aid);
        $where = [
            'b.aid'     => $aid,
            'a.lang'    => $this->admin_lang,
            'a.is_del'  => 0,
        ];
        $pucontent       = DB::name('guestbook_attribute')
            ->field('a.attr_name, b.attr_value, b.aid, b.attr_id, b.attr_id')
            ->alias('a')
            ->join('__GUESTBOOK_ATTR__ b', 'b.attr_id = a.attr_id', 'LEFT')
            ->where($where)
            ->order('b.aid desc, a.sort_order asc, a.attr_id asc')
            ->getAllWithIndex();
        foreach ($pucontent as $key => $val) {
            if (preg_match('/(\.(jpg|gif|png|bmp|jpeg|ico|webp))$/i', $val['attr_value'])) {
                if (!stristr($val['attr_value'], '|')) {
                    $val['attr_value'] = handle_subdir_pic($val['attr_value']);
                    $val['attr_value'] = "<img src='{$val['attr_value']}' width='60' height='60' style='float: unset;cursor: pointer;' onclick=\"Images('{$val['attr_value']}', 650, 350);\" />";
                }
            } else {
                $val['attr_value'] = str_replace(PHP_EOL, ' | ', $val['attr_value']);
            }
        }
        $this->assign('pucontent', $pucontent);

        $result = $this->logic('78'); // 模型对应逻辑

        $eyou       = array(
            'field' => $result,
        );
        $this->eyou = array_merge($this->eyou, $eyou);
        $this->assign('eyou', $this->eyou);

        $viewfile = 'view_purchase';
        $html = $this->fetch(":{$viewfile}");
        return $html;
    }

}