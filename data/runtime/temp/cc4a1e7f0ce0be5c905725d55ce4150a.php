<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:43:"./application/admin/template/shop\index.htm";i:1591318964;s:60:"D:\wwwroot\test\application\admin\template\public\layout.htm";i:1596507477;s:56:"D:\wwwroot\test\application\admin\template\shop\left.htm";i:1590716805;s:60:"D:\wwwroot\test\application\admin\template\shop\shop_bar.htm";i:1590747525;s:64:"D:\wwwroot\test\application\admin\template\shop\shop_bar_new.htm";i:1581391568;s:60:"D:\wwwroot\test\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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

<body class="bodystyle" style="overflow-y: scroll; cursor: default; -moz-user-select: inherit;min-width:auto;">
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
<div class="page" style="min-width:auto;margin-left:98px;">
    <div class="fixed-bar">
    <div class="item-title">
        <!-- <a class="back" href="<?php echo url("Shop/index"); ?>" title="返回列表"><i class="fa fa-chevron-left"></i></a> -->
        <div class="subject">
            <h3>所有订单</h3>
            <h5></h5>
        </div>
        <ul class="tab-base nc-row">
            <li>
                <a <?php if('index' == ACTION_NAME and '' == \think\Request::instance()->param('order_status')): ?>class="current"<?php endif; ?> href='<?php echo url("Shop/index"); ?>'>
                    <span>全部</span>
                </a>
            </li>

            <li>
                <a <?php if(\think\Request::instance()->param('order_status') == '10'): ?>class="current"<?php endif; ?> href='<?php echo url("Shop/index", ["order_status"=>10]); ?>'>
                    <span>待付款</span>
                </a>
            </li>

            <li>
                <a <?php if(\think\Request::instance()->param('order_status') == '1'): ?>class="current"<?php endif; ?> href='<?php echo url("Shop/index", ["order_status"=>1]); ?>' href="<?php echo url('Shop/conf'); ?>">
                    <span>待发货</span>
                </a>
            </li>

            <li>
                <a <?php if(\think\Request::instance()->param('order_status') == '2'): ?>class="current"<?php endif; ?> href='<?php echo url("Shop/index", ["order_status"=>2]); ?>' href="<?php echo url('Shop/conf'); ?>">
                    <span>已发货</span>
                </a>
            </li>

            <li>
                <a <?php if(\think\Request::instance()->param('order_status') == '3'): ?>class="current"<?php endif; ?> href='<?php echo url("Shop/index", ["order_status"=>3]); ?>' href="<?php echo url('Shop/conf'); ?>">
                    <span>已完成</span>
                </a>
            </li>

            <!-- <li>
                <a <?php if(\think\Request::instance()->param('order_status') == '6'): ?>class="current"<?php endif; ?> href='<?php echo url("Shop/index", ["order_status"=>6]); ?>' href="<?php echo url('Shop/conf'); ?>">
                    <span>已退货</span>
                </a>
            </li>

            <li>
                <a <?php if(\think\Request::instance()->param('order_status') == '-1'): ?>class="current"<?php endif; ?> href='<?php echo url("Shop/index", ["order_status"=>-1]); ?>' href="<?php echo url('Shop/conf'); ?>">
                    <span>已关闭</span>
                </a>
            </li> -->
        </ul>
    </div>
</div>
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <h3>订单列表</h3>
                <h5>(共<?php echo $pageObj->totalRows; ?>条数据)</h5>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
            <form class="navbar-form form-inline" id="postForm" action="<?php echo url('Shop/index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <!-- 订单号查询 -->
                    <div class="sDiv2 fl" style="margin-right: 6px;">
                        <input type="text" size="50"  name="order_code" class="qsbox" style="width: 200px;" value="<?php echo \think\Request::instance()->param('order_code'); ?>" placeholder="搜索订单号...">
                        <input type="submit" class="btn" value="搜索">
                    </div>
                </div>
                <!-- <?php if(is_check_access('Shop@index') == '1'): ?>
<div class="sDiv2 addartbtn fl" style="margin-right: 6px;">
    <input type="button" class="btn <?php if(!in_array(\think\Request::instance()->action(), ['index'])): ?>current<?php else: ?>selected<?php endif; ?>" value="订单列表" onclick="window.location.href='<?php echo url("Shop/index"); ?>';">
</div>
<?php endif; if(is_check_access('Shop@conf') == '1'): ?>
<div class="sDiv2 addartbtn fl" style="margin-right: 6px;">
    <input type="button" class="btn <?php if(!in_array(\think\Request::instance()->action(), ['conf'])): ?>current<?php else: ?>selected<?php endif; ?>" value="功能配置" onclick="window.location.href='<?php echo url("Shop/conf"); ?>';">
</div>
<?php endif; ?> -->
            </form>
        </div>
        <div class="hDiv">
            <div class="hDivBox">
                <table cellspacing="0" cellpadding="0" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="sign w40" axis="col0">
                            <div class="tc">选择</div>
                        </th>
                        <th abbr="article_title" axis="col3" class="">
                            <div style="text-align: left; padding-left: 10px;" class="">订单号</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">用户名</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">订单金额</div>
                        </th>
                        <!--<th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">支付方式</div>
                        </th>-->
                        <th abbr="article_time" axis="col6" class="w100">
                            <div class="tc">订单状态</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w160">
                            <div class="tc">下单时间</div>
                        </th>
                        <!--<th abbr="article_time" axis="col6" class="w160">
                            <div class="tc">支付时间</div>
                        </th>-->
                        <th axis="col1" class="w160">
                            <div class="tc">操作</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td class="sign">
                                <div class="w40 tc"><input type="checkbox" name="ids[]" value="<?php echo $vo['order_id']; ?>"></div>
                            </td>
                            <td class="" style="width: 100%;">
                                <div class="tl" style="padding-left: 10px;">
                                    <a href="<?php echo url('Shop/order_details',array('order_id'=>$vo['order_id'])); ?>"><?php echo $vo['order_code']; ?></a>
                                </div>
                            </td>
                            <td class="">
                                <div class="w100 tc">
                                    <a href="<?php echo url('Member/users_edit',array('id'=>$vo['users_id'])); ?>"><?php echo $vo['username']; ?></a>
                                </div>
                            </td>
                            <td class="">
                                <div class="w100 tc">
                                    ￥<?php echo $vo['order_amount']; ?>
                                </div>
                            </td>
                            <!--
                            <td class="">
                                <div class="w100 tc">
                                    <?php if($vo['payment_method'] == '1'): ?>
                                        <?php echo $vo['pay_name']; else: ?>
                                        <?php echo (isset($pay_method_arr[$vo['pay_name']]) && ($pay_method_arr[$vo['pay_name']] !== '')?$pay_method_arr[$vo['pay_name']]:'未支付'); endif; ?>
                                </div>
                            </td>
                            -->
                            <td class="">
                                <div class="w100 tc">
                                    <?php echo (isset($admin_order_status_arr[$vo['order_status']]) && ($admin_order_status_arr[$vo['order_status']] !== '')?$admin_order_status_arr[$vo['order_status']]:''); ?>
                                </div>
                            </td>
                            <td class="">
                                <div class="w160 tc">
                                    <?php echo MyDate('Y-m-d H:i:s',$vo['add_time']); ?>
                                </div>
                            </td>
                            <!--
                            <td class="">
                                <div class="w160 tc">
                                    <?php if(empty($vo['pay_time']) || (($vo['pay_time'] instanceof \think\Collection || $vo['pay_time'] instanceof \think\Paginator ) && $vo['pay_time']->isEmpty())): ?>
                                        ————————
                                    <?php else: ?>
                                        <?php echo MyDate('Y-m-d H:i:s',$vo['pay_time']); endif; ?>
                                </div>
                            </td>
                            -->
                            <td>
                                <div class="w160 tc">
                                    <a href="<?php echo url('Shop/order_details',array('order_id'=>$vo['order_id'])); ?>" class="btn blue"><i class="fa fa-pencil-square-o"></i>详情</a>
                                    <?php if($vo['order_status'] == '0'): ?>
                                        <!-- 订单未付款时出现 -->
                                        <a href="JavaScript:void(0);" onclick="OrderMark('yfk','<?php echo $vo['order_id']; ?>','<?php echo $vo['users_id']; ?>');" class="btn blue">
                                            <i class="fa fa-pencil-square-o"></i>付款
                                        </a>

                                        <a href="JavaScript:void(0);" onclick="PromptChangePrice('<?php echo $vo['order_id']; ?>', '<?php echo $vo['order_amount']; ?>');" class="btn blue">
                                            <i class="fa fa-pencil-square-o"></i>改价
                                        </a>

                                        <script type="text/javascript">
                                            // 弹出改价输入框
                                            function PromptChangePrice(order_id, order_amount) {
                                                layer.prompt({
                                                    title: false, 
                                                    formType: 3,
                                                    id: 'BulkSetPrice',
                                                    btn: ['确定', '关闭'],
                                                    closeBtn: 0,
                                                    success: function(layero, index) {
                                                        $("#BulkSetPrice").find('input').attr('placeholder', '请输入应付金额');
                                                        $("#BulkSetPrice").find('input').attr('value', order_amount);
                                                        $("#BulkSetPrice").find('input').attr('onkeyup', "this.value=this.value.replace(/[^\\d.]/g,'')");
                                                        $("#BulkSetPrice").find('input').attr('onpaste', "this.value=this.value.replace(/[^\\d.]/g,'')");
                                                        var msg = '<span style="color: red;">改价后让用户重新进入订单列表点击支付</span>';
                                                        $("#BulkSetPrice").append(msg);
                                                        // 修改订单金额后为保证支付金额准确有效<br/>请让用户刷新订单列表页后重新点击支付
                                                    }
                                                }, function(price, index) {
                                                    if (0 < price) {
                                                        layer.close(index);
                                                        OrderChangePrice(order_id, order_amount, price);
                                                    } else {
                                                        layer.msg('应付金额不允许为0', {time: 1500});
                                                    }
                                                });
                                            }

                                            // 提交改价数据并追加一条订单操作记录
                                            function OrderChangePrice(OrderID, OrderAmount, Price) {
                                                if (0 >= Price) layer.msg('应付金额不允许为0', {time: 1500});
                                                layer_loading('正在处理');
                                                $.ajax({
                                                    type : 'post',
                                                    url  : "<?php echo url('Shop/order_change_price'); ?>",
                                                    data : {
                                                        order_id: OrderID,
                                                        order_amount_old: OrderAmount,
                                                        order_amount: Price,
                                                        _ajax: 1
                                                    },
                                                    dataType : 'json',
                                                    success : function(res) {
                                                        layer.closeAll();
                                                        if (1 == res.code) {
                                                            layer.msg(res.msg, {time: 1500}, function() {
                                                                window.location.reload();
                                                            });
                                                        } else {
                                                            layer.alert(res.msg, {title: false, closeBtn: 0}, function() {
                                                                window.location.reload();
                                                            });
                                                        }
                                                    }
                                                });
                                            }
                                        </script>
                                    <?php endif; if($vo['order_status'] == '1'): ?>
                                        <!-- 订单待发货时出现 -->
                                        <a href="JavaScript:void(0);" data-url="<?php echo url('Shop/order_send', ['order_id'=>$vo['order_id']]); ?>" onclick="OrderSend(this);" class="btn blue">
                                            <i class="fa fa-pencil-square-o"></i>发货
                                        </a>

                                        <a href="JavaScript:void(0);" class="btn blue" title="买家提醒商家发货次数">
                                            <i class="fa fa-pencil-square-o"></i>提醒
											<?php if(!(empty($LogData[$vo['order_id']][action_count]) || (($LogData[$vo['order_id']][action_count] instanceof \think\Collection || $LogData[$vo['order_id']][action_count] instanceof \think\Paginator ) && $LogData[$vo['order_id']][action_count]->isEmpty()))): ?>
                                                <em class="num"><?php echo $LogData[$vo['order_id']][action_count]; ?></em>
                                            <?php endif; ?>
                                        </a>
                                    <?php endif; if($vo['order_status'] == '2'): ?>
                                        <!-- 订单已发货时出现 -->
                                        <a href="JavaScript:void(0);" onclick="OrderMark('ysh','<?php echo $vo['order_id']; ?>','<?php echo $vo['users_id']; ?>');" class="btn blue">
                                            <i class="fa fa-pencil-square-o"></i>完成
                                        </a>

                                        <a href="JavaScript:void(0);" onclick="OrderMark('ddbz','<?php echo $vo['order_id']; ?>','<?php echo $vo['users_id']; ?>','<?php echo $vo['admin_note']; ?>', '<?php echo MyDate("Y-m-d H:i:s",$vo['update_time']); ?>');" class="btn blue">
                                            <i class="fa fa-pencil-square-o"></i>备注
                                            <?php if(!(empty($vo['admin_note']) || (($vo['admin_note'] instanceof \think\Collection || $vo['admin_note'] instanceof \think\Paginator ) && $vo['admin_note']->isEmpty()))): ?>
                                                <em class="num" style="z-index: 9999; width: 8px; height: 8px; line-height: 8px; right: -2px; top: -2px;"></em>
                                            <?php endif; ?>
                                            <input type="hidden" id="beizhu-url" value="<?php echo url('Shop/update_note'); ?>">
                                        </a>
                                    <?php endif; if(-1 == $vo['order_status'] or 3 == $vo['order_status']): ?>
                                        <!-- 订单取消或取消过期时出现 -->
                                        <a href="JavaScript:void(0);" onclick="OrderMark('ddbz','<?php echo $vo['order_id']; ?>','<?php echo $vo['users_id']; ?>','<?php echo $vo['admin_note']; ?>', '<?php echo MyDate("Y-m-d H:i:s",$vo['update_time']); ?>');" class="btn blue">
                                            <i class="fa fa-pencil-square-o"></i>备注
                                            <?php if(!(empty($vo['admin_note']) || (($vo['admin_note'] instanceof \think\Collection || $vo['admin_note'] instanceof \think\Paginator ) && $vo['admin_note']->isEmpty()))): ?>
                                                <em class="num" style="z-index: 9999; width: 8px; height: 8px; line-height: 8px; right: -2px; top: -2px;"></em>
                                            <?php endif; ?>
                                            <input type="hidden" id="beizhu-url" value="<?php echo url('Shop/update_note'); ?>">
                                        </a>

                                        <a href="JavaScript:void(0);" onclick="OrderMark('ddsc','<?php echo $vo['order_id']; ?>','<?php echo $vo['users_id']; ?>');" class="btn blue">
                                            <i class="fa fa-pencil-square-o"></i>删除
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="iDiv" style="display: none;"></div>
        </div>
        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton checkboxall">
                    <input type="checkbox" onclick="javascript:$('input[name*=ids]').prop('checked',this.checked);">
                </div>
                <div class="fbutton">
                    <a onclick="batch_del(this, 'ids');" data-url="<?php echo url('Shop/order_del'); ?>">
                        <div class="add" title="批量删除">
                            <span><i class="fa fa-close"></i>批量删除</span>
                        </div>
                    </a>
                </div>
            </div>
            <div style="clear:both"></div>
        </div>
        <!--分页位置-->
        <?php echo $pageStr; ?>
    </div>
</div>
<script>
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        <?php if($is_syn_theme_shop == '1'): ?>
            syn_theme_shop();
        <?php endif; ?>
        function syn_theme_shop()
        {
            layer_loading('订单初始化');
            // 确定
            $.ajax({
                type : 'get',
                url : "<?php echo url('Shop/ajax_syn_theme_shop'); ?>",
                data : {_ajax:1},
                dataType : 'json',
                success : function(res){
                    layer.closeAll();
                    if(res.code == 1){
                        layer.msg(res.msg, {icon: 1, time: 1000});
                    }else{
                        layer.alert(res.msg, {icon: 2, title:false}, function(){
                            window.location.reload();
                        });
                    }
                },
                error: function(e){
                    layer.closeAll();
                    layer.alert(ey_unknown_error, {icon: 2, title:false}, function(){
                        window.location.reload();
                    });
                }
            })
        }
    });

    function OrderQueryStatus(){
        $('#postForm').submit();
    }

    function OrderSend(obj){
        var url = $(obj).attr('data-url');

        // iframe窗
        var iframes = layer.open({
            type: 2,
            title: '订单发货详情',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            area: ['100%', '100%'],
            content: url
        });
        layer.full(iframes);
    }

    // 订单操作
    function OrderMark(status_name, order_id, users_id, admin_note, update_time) {
        if('yfk' == status_name){
            var msg = '确认订单已付款？';
        }else if('ysh' == status_name){
            var msg = '确认订单已收货？';
        }else if('gbdd' == status_name){
            var msg = '确认关闭订单？';
        }else if('ddbz' == status_name){
            layer.prompt({
                formType: 2,
                value: admin_note,
                title: false,
                closeBtn: 0,
                id: 'AdminNote',
                area: ['300px', '100px'],
                success: function(layero, index) {
                    if (admin_note) {
                        var msg = '<br/><span style="color: #999; font-size: 12px;">最后更新：'+update_time+'</span>';
                        $("#AdminNote").append(msg);
                    }
                }
            }, function(value, index, elem) {
                UpNote(order_id,value);
                layer.close(index);
            });
            return false;
        }else if('ddsc' == status_name){
            var msg = '确认删除订单？';
        }

        layer.confirm(msg, {
            title: false,
            closeBtn: 0,
            btn: ['确定','取消'],
        },function(){
            $.ajax({
                url: "<?php echo url('Shop/order_mark_status'); ?>",
                data: {order_id:order_id,status_name:status_name,users_id:users_id, _ajax:1},
                type:'post',
                dataType:'json',
                success:function(res){
                    layer.closeAll();
                    if (1 == res.code) {
                        layer.msg(res.msg, {time: 1500},function(){
                            window.location.reload();
                        });
                    }else{
                        layer.msg(res.msg, {time: 1500});
                    }
                }
            });
        },function(index){
            layer.closeAll(index);
        });
    }

    function UpNote(order_id,admin_note){
        $.ajax({
            url: "<?php echo url('Shop/update_note'); ?>",
            data: {order_id:order_id,admin_note:admin_note, _ajax:1},
            type:'post',
            dataType:'json',
            success:function(res){
                layer.closeAll();
                if ('1' == res.code) {
                    layer.msg(res.msg, {time: 1500},function(){
                        window.location.reload();
                    });
                }else{
                    layer.msg(res.msg, {time: 1500});
                }
            }
        });
    }
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