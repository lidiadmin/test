<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:35:"./template/mobile/lists_product.htm";i:1571728724;s:42:"D:\wwwroot\test\template\mobile\header.htm";i:1599972768;s:42:"D:\wwwroot\test\template\mobile\footer.htm";i:1599973059;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<!--页面seo标题-->
<title><?php echo $eyou['field']['seo_title']; ?></title>
<!--页面seo描述-->
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<!--页面seo关键词-->
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<!--网站地址栏图标-->
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/amazeui.min.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/app.css","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.min.js","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/app.js","","",""); echo $__VALUE__; ?>
</head>
<body>
<!--网站公用头部——开始-->
<header class="header">
<!--会员模块——开始-->
 <?php  $tagUser = new \think\template\taglib\eyou\TagUser; $__LIST__ = $tagUser->getUser("login", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
  <div class="am-fr"><a  href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>" class="am-icon-user am-icon-sm"></a></div>
 <?php echo $field['hidden']; endif; $field = []; ?> 
 <!--会员模块——结束-->
  <div class="am-fl"><a href="javascript:;" class="am-icon-bars am-icon-sm" data-am-offcanvas="{target:'#nav_top'}"></a></div>
  <!--网站LOGO——开始-->
  <div class="logo"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_13"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>" /></a></div>
  <!--网站LOGO——结束-->
  <div class="clear"></div>
</header>
<!--导航——开始-->
<div class="nav am-offcanvas" id="nav_top">
  <div class="am-offcanvas-bar">
    <ul id="collapase-nav">
      <li><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>">网站首页</a></li>
      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "hover", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <li class="am-panel"><?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?> <span class="am-icon-angle-right" data-am-collapse="{parent:'#collapase-nav', target:'#nav_<?php echo $i; ?>'}"></span> <?php endif; ?><a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>"><?php echo $field['typename']; ?></a>
       <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
        <ul class="am-collapse" id="nav_<?php echo $i; ?>">
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a> </li>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>   
        </ul>
        <?php endif; ?>
      </li>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </ul>
  </div>
</div>
<!--导航——结束-->
<!--网站公用头部——结束-->
<div class="nav am-offcanvas" id="nav">
  <div class="am-offcanvas-bar am-offcanvas-bar-flip">
    <ul id="collapase-nav">
      <!--当前栏目下二级栏目调用-->
     <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "first", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <li class="am-panel"> <span class="am-icon-angle-right" data-am-collapse="{parent:'#collapase-nav', target:'#nav_a<?php echo $i; ?>'}"></span> <a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>"><?php echo $field['typename']; ?></a>
        <ul class="am-collapse" id="nav_a<?php echo $i; ?>">
         <!--当前栏目下三级栏目调用-->
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,10, true) : $field['children']->slice(0,10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li><a href="<?php echo $field2['typeurl']; ?>" title="<?php echo $field2['typename']; ?>"><?php echo $field2['typename']; ?></a></li>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
        </ul>
      </li>
     <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
    </ul>
  </div>
</div>
<article>
 <!--筛选——开始-->
  <section>
   <?php  $tagScreening = new \think\template\taglib\eyou\TagScreening; $_result = $tagScreening->getScreening("hover", "", "", "全部", "");if(!empty($_result["list"]) || (($_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator ) && $_result["list"]->isEmpty())): $field = $_result; ?>
    <div class="subject"> <b>筛选</b> </div>
    <div class="clear"></div>
    <div class="filter">
     <?php if(is_array($field['list']) || $field['list'] instanceof \think\Collection || $field['list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $field['list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <dl>
        <dd><?php echo $vo['title']; ?>：</dd>
        <dt> 
        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$val): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <a <?php echo $val['onClick']; ?> class="<?php echo $val['currentstyle']; ?>"><?php echo $val['name']; ?></a>
        <?php echo isset($val["ey_1563185380"])?$val["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($val["ey_1563185376"]))?$val["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $val = []; ?> 
        </dt>
        <div class="clear"></div>
      </dl>
     <?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
    </div>
    <?php echo $field['hidden']; endif; $field = []; ?>  
  </section>
  <!--筛选——结束-->
  <section>
    <div class="subject">
    <?php if($eyou['field']['grade'] > '0'): ?>
    	<span class="more"><a href="javascript:;" class="am-icon-bars am-icon-sm" data-am-offcanvas="{target:'#nav'}"></a></span>
    <?php else: if(!(empty($eyou['field']['has_children']) || (($eyou['field']['has_children'] instanceof \think\Collection || $eyou['field']['has_children'] instanceof \think\Paginator ) && $eyou['field']['has_children']->isEmpty()))): ?>
		<span class="more"><a href="javascript:;" class="am-icon-bars am-icon-sm" data-am-offcanvas="{target:'#nav'}"></a></span>
		<?php endif; endif; ?>
    <b><?php echo $eyou['field']['typename']; ?></b> </div>
    <div class="clear"></div>
    <div class="home_pro">
      <ul>
        <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 12, "", "", "desc", "on","off");if(is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
         <li><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>">
          <div><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"></div>
          <p class="title"><?php echo $field['title']; ?></p>
          <p class="price"><span>点击数：<?php echo $field['click']; ?> </span>¥ <?php echo $field['users_price']; ?> </p>
          </a></li>
        <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>  
      </ul>
      <div class="clear"></div>
    </div>
	  <!--列表分页——开始-->
	  <div class="pagelist">
		<ul>
		    <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "index,pre,next,end", "2"); echo $__VALUE__; ?>
		</ul>
	  </div>
	  <!--列表分页——结束-->
  </section>
</article>
<!--网站公用底部——开始-->
<footer>
  <p><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></p>
</footer>
<figure class="footnav">
  <div class="search">
    <?php  $tagSearchform = new \think\template\taglib\eyou\TagSearchform; $_result = $tagSearchform->getSearchform("","","","","","default"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
    <form method="get" action="<?php echo $field['action']; ?>">
      <?php echo $field['hidden']; ?>
      <span><a href="javascript:;" onclick="$('.search').toggle()" class="am-close">&times;</a>站内搜索：</span>
      <input type="text" name="keywords" placeholder="请输入关键字" />
      <button type="submit">搜索</button>
    </form>
    <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
  </div>
  <ul>
    <li><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>"><span class="am-icon-home"></span>首页</a></li>
    <li><a href="tel:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?>"><span class="am-icon-phone"></span>电话</a></li>
    <li><a href="<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "3"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?><?php echo $field['typeurl']; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>"><span class="am-icon-comment-o"></span>产品</a></li>
    <li><a href="javascript:;" onclick="$('.search').toggle()"><span class="am-icon-search"></span>搜索</a></li>
  </ul>
</figure>
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?> 
<!-- 应用插件标签 end -->
<!--网站公用底部——结束-->
</body>
</html>