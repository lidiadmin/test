<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:42:"./application/admin/template/shop\conf.htm";i:1586593422;s:60:"D:\wwwroot\test\application\admin\template\public\layout.htm";i:1596507477;s:56:"D:\wwwroot\test\application\admin\template\shop\left.htm";i:1590716805;s:60:"D:\wwwroot\test\application\admin\template\public\footer.htm";i:1571728724;}*/ ?>
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

<body class="bodystyle" style="overflow-y: scroll;">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
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
<div class="page" style="min-width:auto; margin-left:98px;">
    <div class="flexigrid">
        <div class="mDiv">
            <div class="ftitle">
                <h3>功能配置</h3>
            </div>
        </div>
        <form class="form-horizontal" id="post_form" action="<?php echo url('Shop/conf'); ?>" method="post">
            <div class="ncap-form-default">
                <dl class="row">
                    <dt class="tit">
                        <label for="uname">商家提示</label>
                    </dt>
                    <dd class="opt">
                        <textarea name="shop[shop_prompt]" placeholder="此处文字将显示在会员下单确认页面上" style="width: 30%; height: 60px;"><?php echo $userConfig['shop_prompt']; ?></textarea>
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="tit">
                        <label for="uname">货到付款</label>
                    </dt>
                    <dd class="opt">
                        <label>
                            <input type="radio" name="shop[shop_open_offline]" value="0" <?php if(!isset($userConfig['shop_open_offline']) || empty($userConfig['shop_open_offline'])): ?>checked="checked"<?php endif; ?>/>开启
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="radio" name="shop[shop_open_offline]" value="1" <?php if($userConfig['shop_open_offline'] == 1): ?>checked="checked"<?php endif; ?>/>关闭
                        </label>
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="tit">
                        <label for="username">运费模板</label>
                    </dt>
                    <dd class="opt" style="line-height: 30px;">
                        <label>
                            <input type="radio" name="shop[shop_open_shipping]" value="0" <?php if(!isset($userConfig['shop_open_shipping']) || empty($userConfig['shop_open_shipping'])): ?>checked="checked"<?php endif; ?>/>包邮
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="radio" name="shop[shop_open_shipping]" value="1" <?php if($userConfig['shop_open_shipping'] == 1): ?>checked="checked"<?php endif; ?>/>需要运费
                            &nbsp;<a id="a_shop_open_shipping" href="javascript:void(0);" onclick="SetShipping();" class="ncap-btn ncap-btn-green" <?php if(!isset($userConfig['shop_open_shipping']) || empty($userConfig['shop_open_shipping'])): ?>style="display:none;"<?php endif; ?>>设置价格</a>
                        </label>
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="tit">
                        <label for="uname">产品类型</label>
                    </dt>
                    <dd class="opt">
                        <label>
                            <input type="radio" name="shop[shop_type]" value="0" <?php if(!isset($userConfig['shop_type']) || empty($userConfig['shop_type'])): ?>checked="checked"<?php endif; ?>/>实物
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="radio" name="shop[shop_type]" value="1" <?php if($userConfig['shop_type'] == 1): ?>checked="checked"<?php endif; ?>/>虚拟
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="radio" name="shop[shop_type]" value="2" <?php if($userConfig['shop_type'] == 2): ?>checked="checked"<?php endif; ?>/>两者均有
                        </label>
                    </dd>
                </dl>

                <dl class="row">
                    <dt class="tit">
                        <label for="username">商品规格</label>
                    </dt>
                    <dd class="opt" style="line-height: 30px;">
                        <input type="hidden" id="TestPass" name="TestPass" value="<?php echo $TestPass; ?>">
                        <label><input type="radio" onclick="tag_call('shop_open', '<?php echo $TestPass; ?>');" name="shop[shop_open_spec]" value="1" <?php if($userConfig['shop_open_spec'] == 1): ?>checked="checked"<?php endif; ?>/>开启</label>
                        &nbsp;&nbsp;&nbsp;
                        <label><input type="radio" name="shop[shop_open_spec]" value="0" <?php if(!isset($userConfig['shop_open_spec']) || empty($userConfig['shop_open_spec'])): ?>checked="checked"<?php endif; ?>/>关闭</label>
                        <!--&nbsp;
                        <span id="a_shop_open_spec" <?php if(!isset($userConfig['shop_open_spec']) || empty($userConfig['shop_open_spec'])): ?>style="display:none;"<?php endif; ?>>
                            <a href="javascript:void(0);" id='shop_open' onclick="tag_call('shop_open');" class="ncap-btn ncap-btn-green">标签调用</a>
                        </span>-->
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">订单提醒</dt>
                    <dd class="opt">
                        <ul class="nc-row ncap-waybill-list">
                            <li style="width: 100%;">
                                <label class="label" onmouseover="layer_tips = layer.tips('对管理员发送邮件提醒', this, {time:100000});" onmouseout="layer.close(layer_tips);">
                                    <input class="check" type="checkbox" name="smtp_shop_order_pay" <?php if(!empty($smtp['smtp_shop_order_pay'])): ?> value="1" checked="checked" <?php endif; ?> onclick="OpenSmtp(this);"><span>管理员邮箱</span>
                                </label>
                            </li>
                        </ul>
                    </dd>
                </dl>
                <dl class="row">
                    <dt class="tit">发货提醒</dt>
                    <dd class="opt">
                        <ul class="nc-row ncap-waybill-list">
                            <li style="width: 100%;">
                                <label class="label" onmouseover="layer_tips = layer.tips('对用户发送邮件提醒', this, {time:100000});" onmouseout="layer.close(layer_tips);">
                                    <input class="check" type="checkbox" name="smtp_shop_order_send" <?php if(!empty($smtp['smtp_shop_order_send'])): ?> value="1" checked="checked" <?php endif; ?> onclick="OpenSmtp(this);"><span>用户邮箱</span>
                                </label>
                            </li>
                        </ul>
                    </dd>
                </dl>
                <script type="text/javascript">
                    function OpenSmtp(obj) {
                        if (true == $(obj).is(':checked')) {
                            $.ajax({
                                type: "post",
                                url : "<?php echo url('Shop/FindSmptConfig', ['_ajax'=>1]); ?>",
                                data: {field:$(obj).attr('name')},
                                dataType: 'json',
                                success: function (res) {
                                    layer.closeAll();
                                    if(res.code == 0) {
                                        $(obj).removeAttr("checked");
                                        layer.alert(res.msg, {title:false, closeBtn:0, btn:['确认', '取消']}, function(){
                                            window.location.href = res.url;
                                        });
                                    }
                                }
                            });
                        }
                    }
                </script>
            </div>
            
            <div class="ncap-form-default">
                <dl class="row">
                    <div class="bot">
                        <a href="JavaScript:void(0);" onclick="ShopConfig();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
                    </div>
                </dl>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">

    $(function(){
        // 点击刷新数据
        $('.fa-refresh').click(function(){
            location.href = location.href;
        });

        $('input[name="shop[shop_open_shipping]"]').click(function() {
            var shop_open_shipping = $(this).val();
            if (1 == shop_open_shipping) {
                $('#a_shop_open_shipping').show();
            } else {
                $('#a_shop_open_shipping').hide();
            }
        });

        var ForceUse = $('#shop_force_use_wechat').val();
        if (1 == ForceUse) $('#shop_micro0').attr("disabled", "disabled");
    });

    // 设置运费模板
    function SetShipping() {
        var url = "<?php echo url('Shop/shipping_template'); ?>";
        //iframe窗
        layer.open({
            type: 2,
            title: '运费模板管理',
            shadeClose: false,
            maxmin: false, //开启最大化最小化按钮
            area: ['60%', '80%'],
            content: url
        });
    }

    // 标签调用
    function tag_call(name, TestPass) {
        if (1 == TestPass) return false
        $.ajax({
            type: "POST",
            url: "<?php echo url('System/ajax_tag_call', ['_ajax'=>1]); ?>",
            data: {name:name},
            dataType: 'json',
            success: function (res) {
                if(res.code == 1){
                    //询问框
                    var confirm = layer.confirm(res.data.msg, {
                            title: false,
                            area: ['80%','80%'],
                            btn: ['已完成，验证下','下次再操作'],
                            cancel: function(){
                                window.location.href = "<?php echo url('Shop/conf',['close'=>1]); ?>";
                            }
                        }, function (){
                            VerifyLatestTemplate(name);

                        }, function(){
                            window.location.href = "<?php echo url('Shop/conf',['close'=>1]); ?>";
                        }
                    );  
                }else{
                    layer.alert(res.msg, {icon: 2, title:false});
                }
            },
            error:function(){
                layer.alert(ey_unknown_error, {icon: 2, title:false});
            }
        });
    }

    // 检测文件是否最新版
    function VerifyLatestTemplate(name, is_close) {
        layer_loading('正在处理');
        $.ajax({
            type: "POST",
            url: "<?php echo url('Shop/VerifyLatestTemplate', ['_ajax'=>1]); ?>",
            data: {name:name, is_close:is_close},
            dataType: 'json',
            success: function (res) {
                layer.closeAll();
                if(res.code == 1){
                    layer.msg(res.msg, {icon: 1, time:1500}, function(){
                        window.location.href = "<?php echo url('Shop/conf'); ?>";
                    });
                }else{
                    layer.alert(res.msg, {
                        icon: 2, 
                        title: false,
                        cancel: function(){ 
                            window.location.href = "<?php echo url('Shop/conf'); ?>";
                        }
                    }, function(){
                        window.location.href = "<?php echo url('Shop/conf'); ?>";
                    });
                }
            },
            error:function(){
                layer.closeAll();
                layer.alert(ey_unknown_error, {icon: 2, title:false});
            }
        });
    }

    // 判断输入框是否为空
    function ShopConfig() {
        layer_loading('正在处理');
        $('#post_form').submit();
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