<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"./application/admin/template/shop_product\attribute_index.htm";i:1583307749;s:60:"D:\wwwroot\test\application\admin\template\public\layout.htm";i:1596507477;s:56:"D:\wwwroot\test\application\admin\template\shop\left.htm";i:1590716805;s:60:"D:\wwwroot\test\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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
    <div class="page" style="min-width:auto;margin-left:98px;">
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <h3>参数值列表</h3>
                <h5>(共<?php echo $pageObj->totalRows; ?>条数据)</h5>
            </div>
            <div title="刷新数据" class="pReload"><i class="fa fa-refresh"></i></div>
            <form id="searchForm" class="navbar-form form-inline" action="<?php echo U('ShopProduct/attribute_index'); ?>" method="get" onsubmit="layer_loading('正在处理');">
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="sDiv">
                    <div class="sDiv2">
                        <input type="text" size="30" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="qsbox" placeholder="名称搜索...">
                        <input type="submit" class="btn" value="搜索">
                    </div>
                </div>
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
                        <th abbr="article_title" axis="col3" class="w40">
                            <div class="tc">ID</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w200">
                            <div class="tc">参数值名称</div>
                        </th>
                        <th abbr="article_title" axis="col3">
                            <div style="padding-left: 10px;" class="tl">可选值列表</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w120">
                            <div class="tc">参数值类型</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w120">
                            <div class="tc">状态</div>
                        </th>
                        <th axis="col1" class="w200">
                            <div class="tc">操作</div>
                        </th>
                        <th abbr="article_time" axis="col6" class="w60">
                            <div class="tc">排序</div>
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="bDiv" style="height: auto;">
            <div id="flexigrid" cellpadding="0" cellspacing="0" border="0">
                <table style="width: 100%;">
                    <tbody>
                    <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                        <tr>
                            <td class="no-data" align="center" axis="col0" colspan="50">
                                <i class="fa fa-exclamation-circle"></i>没有符合条件的记录
                            </td>
                        </tr>
                    <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <tr>
                            <td class="sign">
                                <div class="tc w40"><input type="checkbox" name="ids[]" value="<?php echo $vo['attr_id']; ?>"></div>
                            </td>

                            <td class="sort">
                                <div class="tc w40"><?php echo $vo['attr_id']; ?></div>
                            </td>

                            <td>
                                <div class="w200 tc" style="white-space: nowrap;">
                                    <?php if(is_check_access(CONTROLLER_NAME.'@attribute_edit') == '1'): ?>
                                        <a href="javascript:void(0);" onclick="AttrBbuteEdit(this);" data-url="<?php echo U('ShopProduct/attribute_edit',array('id'=>$vo['attr_id'])); ?>"><?php echo $vo['attr_name']; ?></a>
                                    <?php else: ?>
                                        <?php echo $vo['attr_name']; endif; ?>
                                </div>
                            </td>

                            <td align="left" style="width: 100%">
                                <div class="tl" style="padding-left: 10px;"><?php echo $vo['attr_values']; ?></div>
                            </td>

                            <td>
                                <div class="w120 tc"><?php echo $attrInputTypeArr[$vo['attr_input_type']]; ?></div>
                            </td>

                            <td>
                                <div class="w120 tc">
                                    <?php if($vo['status'] == 1): ?>
                                        <span class="yes" onclick="ProductStatus('shop_product_attribute', 'attr_id', '<?php echo $vo['attr_id']; ?>', 'status', this);">
                                            <i class="fa fa-check-circle"></i>正常
                                        </span>
                                    <?php else: ?>
                                        <span class="no" onclick="ProductStatus('shop_product_attribute', 'attr_id', '<?php echo $vo['attr_id']; ?>', 'status', this);">
                                            <i class="fa fa-ban"></i>停用
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </td>

                            <td>
                                <div class="w200 tc">
                                    <?php if(is_check_access(CONTROLLER_NAME.'@attribute_edit') == '1'): ?>
                                        <a href="javascript:void(0);" onclick="AttrBbuteEdit(this);" data-url="<?php echo U('ShopProduct/attribute_edit',array('id'=>$vo['attr_id'])); ?>" class="btn blue">
                                            <i class="fa fa-pencil-square-o"></i>编辑
                                        </a>
                                    <?php endif; if(is_check_access(CONTROLLER_NAME.'@attribute_del') == '1'): ?>
                                        <a class="btn red" href="javascript:void(0);" data-url="<?php echo U('ShopProduct/attribute_del'); ?>" data-id="<?php echo $vo['attr_id']; ?>" data-deltype="pseudo" onclick="DelFind(this);">
                                            <i class="fa fa-trash-o"></i>删除
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </td>
                            
                            <td class="sort">
                                <div class="w60 tc">
                                    <?php if(is_check_access(CONTROLLER_NAME.'@attribute_edit') == '1'): ?>
                                        <input style="text-align: left;" type="text" onchange="changeTableVal('product_attribute','attr_id','<?php echo $vo['attr_id']; ?>','sort_order',this);"  size="4"  value="<?php echo $vo['sort_order']; ?>" />
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
        <div class="tDiv">
            <div class="tDiv2">
                <div class="fbutton checkboxall">
                    <input type="checkbox" onclick="javascript:$('input[name*=ids]').prop('checked',this.checked);">
                </div>
                <?php if(is_check_access(CONTROLLER_NAME.'@attribute_del') == '1'): ?>
                    <div class="fbutton">
                        <a href="javascript:void(0);" onclick="DelBatch(this, 'ids');" data-url="<?php echo U('ShopProduct/attribute_del'); ?>" data-deltype="pseudo">
                            <div class="add" title="批量删除">
                                <span><i class="fa fa-close"></i>批量删除</span>
                            </div>
                        </a>
                    </div>
                <?php endif; if(is_check_access(CONTROLLER_NAME.'@attribute_add') == '1'): ?>
                    <div class="fbutton">
                        <a href="javascript:void(0);" onclick="AttrBbuteAdd(this);" data-url="<?php echo U('ShopProduct/attribute_add', array('list_id'=>\think\Request::instance()->param('list_id'))); ?>">
                            <div class="add" title="新增参数">
                                <span class="red"><i class="fa fa-plus"></i>新增参数</span>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
				<div class="fbutton">
				    <a href="javascript:history.back();" >
				        <div class="add" title="新增参数" title="返回列表">
				            <span><i class="fa fa-angle-left"></i>返回</span>
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
<script type="text/javascript">
    $(document).ready(function(){
        // 表格行点击选中切换
        $('#flexigrid > table>tbody >tr').click(function(){
            $(this).toggleClass('trSelected');
        });

        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        $('#searchForm select[name=typeid]').change(function(){
            $('#searchForm').submit();
        });
    });

    // 添加参数值
    function AttrBbuteAdd(obj) {
        var url = $(obj).data('url');
        layer.open({
            type: 2,
            title: '添加参数值',
            area: ['70%', '550px'],
            content: url
        });
    }

    // 编辑参数值
    function AttrBbuteEdit(obj) {
        var url = $(obj).data('url');
        layer.open({
            type: 2,
            title: '编辑参数值',
            area: ['70%', '550px'],
            content: url
        });
    }

    var list_id = <?php echo \think\Request::instance()->param('list_id'); ?>;
    // 删除
    function DelFind(obj) {
        layer.confirm('此操作不可恢复，确认彻底删除？', {
            title: false,
            closeBtn: 0,
            btn: ['确定','取消']
        }, function(){
            layer_loading('正在处理');
            // 确定
            $.ajax({
                type : 'post',
                url : $(obj).attr('data-url'),
                data : {del_id:$(obj).attr('data-id'), list_id:list_id, _ajax:1},
                dataType : 'json',
                success : function(data){
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 1});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 2, title:false});
                    }
                },
                error:function(){
                    layer.closeAll();
                    layer.alert(ey_unknown_error, {icon: 2, title:false});
                }
            })
        }, function(index){
            layer.close(index);
        });
        return false;
    }

    /**
     * 批量删除提交
     */
    function DelBatch(obj, name) {
        var a = [];
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
            }
        })
        if(a.length == 0){
            layer.alert('请至少选择一项', {icon: 2, title:false});
            return;
        }
        // 删除按钮
        layer.confirm('此操作不可恢复，确认批量彻底删除？', {
            title: false,
            closeBtn: 0,
            btn: ['确定', '取消']
        }, function () {
            layer_loading('正在处理');
            $.ajax({
                type: "POST",
                url: $(obj).attr('data-url'),
                data: {del_id:a, list_id:list_id, _ajax:1},
                dataType: 'json',
                success: function (data) {
                    layer.closeAll();
                    if(data.code == 1){
                        layer.msg(data.msg, {icon: 1});
                        window.location.reload();
                    }else{
                        layer.alert(data.msg, {icon: 2, title:false});
                    }
                },
                error:function(){
                    layer.closeAll();
                    layer.alert(ey_unknown_error, {icon: 2, title:false});
                }
            });
        }, function (index) {
            layer.closeAll(index);
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