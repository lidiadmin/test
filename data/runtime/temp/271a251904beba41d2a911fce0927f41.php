<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:51:"./application/admin/template/shop_product\index.htm";i:1596507477;s:60:"D:\wwwroot\test\application\admin\template\public\layout.htm";i:1596507477;s:56:"D:\wwwroot\test\application\admin\template\shop\left.htm";i:1590716805;s:68:"D:\wwwroot\test\application\admin\template\shop_product\tags_btn.htm";i:1590380446;s:60:"D:\wwwroot\test\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
</script>  
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css"/>
<link type="text/css" rel="stylesheet" href="/public/plugins/tags_input/css/jquery.tagsinput.css?v=<?php echo $version; ?>">
<style type="text/css">html, body { overflow: visible;}</style>
<script type="text/javascript" src="/public/static/admin/js/jquery.js"></script>
<script type="text/javascript" src="/public/plugins/tags_input/js/jquery.tagsinput.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js"></script>
<script src="/public/static/admin/js/myFormValidate.js"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
<link href="/public/static/admin/css/diy_style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />
</head>

<body style="overflow: auto; cursor: default; -moz-user-select: inherit;background-color:#F4F4F4; padding: 20px; ">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="sidebar-second ">
    <ul>
        <li class="sidebar-second-title">商城中心</li>
        <li>
            <a <?php if('Statistics' == CONTROLLER_NAME): ?>class="active"<?php endif; ?> href='<?php echo url("Statistics/index"); ?>'>数据统计</a>
        </li>
        <li>
            <a <?php if('Shop' == CONTROLLER_NAME and in_array(ACTION_NAME, ['index', 'order_details'])): ?>class="active"<?php endif; ?> href='<?php echo url("Shop/index"); ?>'>所有订单</a>
        </li>
        <li>
            <a <?php if('ShopProduct' == CONTROLLER_NAME and in_array(ACTION_NAME, ['index', 'add', 'edit'])): ?>class="active"<?php endif; ?> href='<?php echo url("ShopProduct/index"); ?>'>商品管理</a>
        </li>
        <li>
            <a <?php if('ShopProduct' == CONTROLLER_NAME and in_array(ACTION_NAME, ['attrlist_index', 'attribute_index'])): ?>class="active"<?php endif; ?> href='<?php echo url("ShopProduct/attrlist_index"); ?>'>商品参数</a>
        </li>
        <li>
            <a <?php if('Shop' == CONTROLLER_NAME and 'conf' == ACTION_NAME): ?>class="active"<?php endif; ?> href='<?php echo url("Shop/conf"); ?>'>商城设置</a>
        </li>
        <!-- <li>
            <a <?php if('Member' == CONTROLLER_NAME): ?>class="active"<?php endif; ?> href='<?php echo url("Member/money_index"); ?>'>财务明细</a>
        </li> -->
    </ul>
</div>
<div class="page" style="margin-left:98px;">
    <div class="flexigrid flexigrid2">
        <div class="mDiv">
            <div class="ftitle">
                <h3><?php echo (isset($arctype_info['typename']) && ($arctype_info['typename'] !== '')?$arctype_info['typename']:'商品列表'); ?></h3>
                <h5>(共<?php echo $pager->totalRows; ?>条数据)</h5>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
            <form class="navbar-form form-inline" id="searchForm" action="<?php echo url('ShopProduct/index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                
                <div class="sDiv">
                    <?php if(is_check_access(CONTROLLER_NAME.'@add') == '1'): ?>
    <div class="fbutton" style="float: none;">
        <a href="<?php if(\think\Request::instance()->param('typeid') > '0'): ?><?php echo url('ShopProduct/add', ['typeid'=>\think\Request::instance()->param('typeid')]); else: ?>javascript:quick_release();<?php endif; ?>">
            <div class="add">
                <span><i class="fa fa-plus"></i>发布商品</span>
            </div>
        </a>
    </div>
<?php endif; ?>

<div class="sDiv2">  
    <select name="typeid" class="select" style="margin:0px 5px;">
        <option value="">--所有栏目--</option>
        <?php echo $arctype_html; ?>
    </select>
</div>
<!-- 扩展 -->

<script type="text/javascript">
    $(document).ready(function(){
        $('#searchForm select[name=typeid]').change(function(){
            $('#searchForm').submit();
        });
    });

    function quick_release()
    {
        //iframe窗
        layer.open({
            type: 2,
            title: '快捷发布商品',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: true, //开启最大化最小化按钮
            area: ['600px', '520px'],
            content: "//<?php echo \think\Request::instance()->host(); ?><?php echo \think\Request::instance()->baseFile(); ?>?m=admin&c=shopProduct&a=release&lang=<?php echo \think\Request::instance()->param('lang'); ?>"
        });
    }
</script>
                    <div class="sDiv2">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="商品搜索...">
                        <input type="submit" class="btn" value="搜索">
                    </div>
                </div>
            </form>
        </div>
        
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%;">
                    <thead style="background-color: #f2f2f2; line-height: 40px;">
                        <tr>
                            <th class="sign w40" axis="col0">
                                <div class="tc">选择</div>
                            </th>
                            <th abbr="article_title" axis="col3" class="w40">
                                <div class="tc">ID</div>
                            </th>
                            <th align="center" abbr="article_title" axis="col3" class="w60">
                                <div class="tc">商品</div>
                            </th>
                            <th align="left" abbr="article_title" axis="col3" class="">
                                <div class="ml15"></div>
                            </th>
                            <th align="left" abbr="" axis="col3" class="w80">
                                <div  class="tc">库存</div>
                            </th>
                            <th align="left" abbr="" axis="col3" class="w80">
                                <div  class="tc">售价</div>
                            </th>
                            <th align="left" abbr="" axis="col3" class="w80">
                                <div  class="tc">浏览量</div>
                            </th>
                            <th abbr="article_time" axis="col6" class="w120">
                                <div class="tc">分类</div>
                            </th>
                            <th align="center" abbr="article_time" axis="col6" class="w50">
                                <div class="tc">推荐</div>
                            </th>
                            <th abbr="article_time" axis="col6" class="w50">
                                <div class="tc">销量</div>
                            </th>
                            <th axis="col1" class="w100">
                                <div class="tc">操作</div>
                            </th>
                            <th abbr="article_time" axis="col6" class="w60">
                                <div class="tc">排序</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                            <tr>
                                <td class="no-data" align="center" axis="col0" colspan="50">
                                    <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                                </td>
                            </tr>
                        <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                                <tr>
                                    <td class="sign">
                                        <div class="tc w40"><input type="checkbox" name="ids[]" value="<?php echo $vo['aid']; ?>"></div>
                                    </td>

                                    <td class="sort">
                                        <div class="tc w40"><?php echo $vo['aid']; ?></div>
                                    </td>

                                    <td class="w60">
                                        <div class="tc">
                                            <a href="<?php echo $vo['arcurl']; ?>" target="_blank" style='<?php if($vo['is_b'] == '1'): ?> font-weight: bold; <?php endif; ?>'>
                                                <img width="60" height="60" src="<?php echo $vo['litpic']; ?>">
                                            </a>
                                        </div>
                                    </td>

                                    <td class="goods-item">
                                        <div class="fl" style="padding-left: 10px;">
                                           <div class="title">
                                                <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>
                                                    <a href="<?php echo $vo['arcurl']; ?>" target="_blank" style='<?php if(vo.is_b == '1'): ?> font-weight: bold;<?php endif; ?>'><?php echo $vo['title']; ?></a>
                                                <?php else: ?>
                                                    <?php echo $vo['title']; endif; ?>
                                           </div>
                                             <span><?php echo $vo['product_number']; ?></span>
                                        </div>
                                    </td>

                                    <td class="w80">
                                        <div class="tc"><?php echo $vo['stock_count']; ?></div>
                                    </td>

                                    <td class="w80">
                                        <div class="tc">￥<?php echo $vo['users_price']; ?></div>
                                    </td>

                                    <td class="w80">
                                        <div class="tc"><?php echo $vo['click']; ?></div>
                                    </td>

                                    <td>
                                        <div class="tc w120">
                                            <a href="<?php echo url('ShopProduct/index', array('typeid'=>$vo['typeid'])); ?>">
                                                <?php echo (isset($vo['typename']) && ($vo['typename'] !== '')?$vo['typename']:'<i class="red">数据出错！</i>'); ?>
                                            </a>
                                        </div>
                                    </td>

                                    <td class="">
                                        <div class="tc w50">
                                            <?php if($vo['is_recom'] == 1): ?>
                                                <span class="yes" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>onClick="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','is_recom',this);"<?php endif; ?> ><i class="fa fa-check-circle"></i>是</span>
                                            <?php else: ?>
                                                <span class="no" <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>onClick="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','is_recom',this);"<?php endif; ?> ><i class="fa fa-ban"></i>否</span>
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                    <td class="w50">
                                        <div class="tc"><?php echo $vo['sales_num']; ?></div>
                                    </td>

                                    <td align="center" class="">
                                        <div class="tc">
                                            <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>
                                                <a href="<?php echo url('ShopProduct/edit',array('id'=>$vo['aid'])); ?>" class="btn blue">
                                                    <i class="fa fa-pencil-square-o"></i>编辑
                                                </a>
                                            <?php endif; if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                                                <a class="btn red" href="javascript:void(0);" data-url="<?php echo url('ShopProduct/del'); ?>" data-id="<?php echo $vo['aid']; ?>" data-deltype="pseudo" onClick="delfun(this);">
                                                    <i class="fa fa-trash-o"></i>删除
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                    <td class="sort">
                                        <div class="w60 tc">
                                            <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>
                                                <input type="text" onchange="changeTableVal('archives', 'aid', '<?php echo $vo['aid']; ?>', 'sort_order' ,this);" size="4" value="<?php echo $vo['sort_order']; ?>" />
                                            <?php else: ?>
                                                <?php echo $vo['sort_order']; endif; ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="footer-oper">
            <span class="ml15">
                <input type="checkbox" onclick="javascript:$('input[name*=ids]').prop('checked',this.checked);">
            </span>
            <div class="nav-dropup">
                <button class="layui-btn layui-btn-primary dropdown-bt">批量操作<i class="layui-icon layui-icon-up"></i></button>
                <div class="dropdown-menus" style="display:none;">
                    <?php if(is_check_access('Archives@batch_attr') == '1'): ?>
                    <a href="javascript:void(0);" onclick="batch_attr(this, 'ids', '批量新增属性');" data-url="<?php echo url('Archives/batch_attr', ['opt'=>'add']); ?>"><i class="fa fa-plus"></i>新增属性</a>
                    <a href="javascript:void(0);" onclick="batch_attr(this, 'ids', '批量删除属性');" data-url="<?php echo url('Archives/batch_attr', ['opt'=>'del']); ?>"><i class="fa fa-close"></i>删除属性</a>
                    <hr class="layui-bg-gray">
                    <?php endif; if(is_check_access('Archives@batch_copy') == '1'): ?>
                    <a href="javascript:void(0);" onclick="func_batch_copy(this, 'ids');" data-url="<?php echo url('Archives/batch_copy', array('typeid'=>\think\Request::instance()->param('typeid'))); ?>"><i class="fa fa-copy"></i>复制商品</a>
                    <?php endif; if(is_check_access('Archives@move') == '1'): ?>
                    <a href="javascript:void(0);" onclick="func_move(this, 'ids');" data-url="<?php echo url('Archives/move', array('typeid'=>\think\Request::instance()->param('typeid'))); ?>"><i class="fa fa-hdd-o"></i>移动商品</a>
                    <?php endif; if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                    <a href="javascript:void(0);" onclick="batch_del(this, 'ids');" data-url="<?php echo url('ShopProduct/del'); ?>" data-deltype="pseudo"><i class="fa fa-close"></i>删除商品</a>
                    <?php endif; if(is_check_access('Archives@check') == '1'): ?>
                    <a href="javascript:void(0);" onclick="batch_check(this, 'ids');" data-url="<?php echo url('Archives/check'); ?>"><i class="fa fa-check-square-o"></i>审核商品</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(is_check_access('RecycleBin@archives_index') == '1'): ?>
            <a href="<?php echo url('RecycleBin/archives_index'); ?>" class="layui-btn layui-btn-primary" title="回收站"><i class="layui-icon layui-icon-delete"></i>回收站</a>
            <?php endif; ?>
        </div>
        <!--分页位置-->
        <?php echo $page; ?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function() {
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function() {
            location.href = location.href;
        });

        // 批量操作
        $(".dropdown-bt").click(function(){
            $(".dropdown-menus").slideToggle(200);
            event.stopPropagation();
        })
        $(document).click(function(){
            $(".dropdown-menus").slideUp(200);
            event.stopPropagation();
        })
    });

    var aids = '';
    function func_move(obj, name) {
        var a = [];
        var k = 0;
        aids = '';
        $('input[name^=' + name + ']').each(function(i, o) {
            if ($(o).is(':checked')) {
                a.push($(o).val());
                if (k > 0) {
                    aids += ',';
                }
                aids += $(o).val();
                k++;
            }
        })
        if (a.length == 0) {
            layer.alert('请至少选择一项', {
                icon: 2,
                title: false
            });
            return false;
        }

        var url = $(obj).attr('data-url');
        //iframe窗
        layer.open({
            type: 2,
            title: '移动文档',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: false, //开启最大化最小化按钮
            area: ['350px', '260px'],
            content: url
        });
    }

    /**
     * 获取修改之前的内容
     */
    function get_aids() {
        return aids;
    }
</script>

<script type="text/javascript">
    /*模拟下拉选择 select */
    $('.cate-select').on('click', '.placeholder', function(e) {
        var parent = $(this).closest('.cate-select');
        if (!parent.hasClass('is-open')) {
            parent.addClass('is-open');
            $('.cate-select.is-open').not(parent).removeClass('is-open');
        } else {
            parent.removeClass('is-open');
        }
        e.stopPropagation();
    }).on('click', 'ul>li', function() {
        var parent = $(this).closest('.cate-select');
        parent.removeClass('is-open').find('.placeholder').text($(this).text());
    });

    $('body').on('click', function() {
        $('.cate-select.is-open').removeClass('is-open');
    });
</script>
<br/>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>
