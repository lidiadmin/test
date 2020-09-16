<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:34:"./template/mobile/view_recruit.htm";i:1580985390;s:42:"D:\wwwroot\test\template\mobile\header.htm";i:1571728724;s:42:"D:\wwwroot\test\template\mobile\footer.htm";i:1587637467;}*/ ?>
<!doctype html>
<html>
<head>
<!--此模板为自定义新增招聘模型详情模板-->
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
<article>
  <section>
    <div class="job_show">
      <!--文章标题-->
      <h1><?php echo $eyou['field']['title']; ?></h1>
      <div class="info">
        <ul>
          <li><span>地点：</span><?php echo $eyou['field']['gzdd']; ?></li>
          <li><span>性质：</span><?php echo $eyou['field']['gzxz']; ?></li>
          <li><span>学历：</span><?php echo $eyou['field']['xlyq']; ?></li>
          <li><span>年限：</span><?php echo $eyou['field']['gznx']; ?></li>
          <li><span>薪资：</span><?php echo $eyou['field']['xzdy']; ?></li>
          <li><span>人数：</span><?php echo $eyou['field']['zprs']; ?></li>
          <li><span>日期：</span><?php echo MyDate('Y-m-d',$eyou['field']['add_time']); ?></li>
          <li><span>浏览：</span><?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagArcclick = new \think\template\taglib\eyou\TagArcclick; $__VALUE__ = $tagArcclick->getArcclick($aid, "", ""); echo $__VALUE__; ?></li>
        </ul>
      </div>
      <div class="tags">
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "6"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
        <div class="action"><a onclick="showdiv();"><?php echo $field['typename']; ?></a></div>
        <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; if(!(empty($eyou['field']['tags']) || (($eyou['field']['tags'] instanceof \think\Collection || $eyou['field']['tags'] instanceof \think\Paginator ) && $eyou['field']['tags']->isEmpty()))): ?>
        标签:<?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagTag = new \think\template\taglib\eyou\TagTag; $_result = $tagTag->getTag(0, $typeid, $aid, 100, "now", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 100, true) : $_result->slice(0, 100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?> <a href="<?php echo $field['link']; ?>"  <?php echo $field['target']; ?>><?php echo $field['tag']; ?></a> <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $field = []; endif; ?>
        </div>
    </div>
  </section>
  <section>
    <div class="clear"></div>
    <div class="job_show">
      <div class="intro">
       <!--文章主体——自定义字段-->
        <?php echo $eyou['field']['nnxq']; ?> 
      </div>
      <!--上下篇——开始-->
      <div class="prenext"> 
        <!--上一篇--> 
        <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("pre");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" class="pre"> <?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys11";}'); echo $__VALUE__; ?></span> </a> <?php else: ?> <a class="pre"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys10";}'); echo $__VALUE__; ?></a> <?php endif; $field = []; ?> 
        <!--下一篇--> 
        <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("next");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?> <a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" class="next"> <?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys12";}'); echo $__VALUE__; ?> </span> </a> <?php else: ?> <a class="next"><?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys10";}'); echo $__VALUE__; ?></a> <?php endif; $field = []; ?> 
      </div>
      <!--上下篇——结束-->
    </div>
  </section>
  <section>
    <div class="subject"> <b>其他职位</b> </div>
    <div class="clear"></div>
    <ul class="home_news">
     <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "", ); $tag = array (
  'orderby' => 'rand',
  'titlelen' => '30',
  'row' => '4',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "rand", "","desc","",$tag,"0","on","off");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <li><span class="date"><?php echo MyDate('m-d',$field['add_time']); ?></span>
        <div class="right"><a href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>" class="text-hide"><?php echo $field['title']; ?></a>
          <p class="text-hide"><?php echo html_msubstr($field['seo_description'],0,30,true); ?></p>
        </div>
      </li>
     <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
    </ul>
    <div class="clear"></div>
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
    <li><a href="<?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "30"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?><?php echo $field['typeurl']; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>"><span class="am-icon-comment-o"></span>留言</a></li>
    <li><a href="javascript:;" onclick="$('.search').toggle()"><span class="am-icon-search"></span>搜索</a></li>
  </ul>
</figure>
<!-- 应用插件标签 start --> 
 <?php  $tagWeapp = new \think\template\taglib\eyou\TagWeapp; $__VALUE__ = $tagWeapp->getWeapp("default"); echo $__VALUE__; ?> 
<!-- 应用插件标签 end -->
<!--网站公用底部——结束-->
<div id="bg" ></div>
<div id="show">
<div class="job-popup">
	<div class="tit">在线应聘 <input id="btnclose" type="button" value="×" onclick="hidediv();"> </div>
	 <?php  $typeid = "6"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
         <form method="POST" class="am-form am-form-horizontal form-add" action="<?php echo $field['action']; ?>" <?php echo $field['formhidden']; ?> onsubmit="<?php echo $field['submit']; ?>">
		  <dl>
			<dt><?php echo $field['itemname_4']; ?></dt>
			<dd><input type="text" value="<?php echo $eyou['field']['title']; ?>" name="<?php echo $field['attr_4']; ?>" id="attr_4"></dd>
		  </dl>
		   <dl>
			<dt><?php echo $field['itemname_5']; ?></dt>
			<dd><input type="text" value="" name="<?php echo $field['attr_5']; ?>" id="attr_5"></dd>
		  </dl>
		  <dl>
			<dt><?php echo $field['itemname_6']; ?></dt>
			<dd>
             <select name="<?php echo $field['attr_6']; ?>" id="attr_6">
               <option value="">请选择性别</option>
               <?php if(is_array($field['options_6']) || $field['options_6'] instanceof \think\Collection || $field['options_6'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $field['options_6'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
               <option value="<?php echo $vo['value']; ?>"><?php echo $vo['value']; ?></option>
			   <?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
             </select>
            </dd>
		  </dl>
		  <dl>
			<dt><?php echo $field['itemname_16']; ?></dt>
			<dd><input type="text" value="" name="<?php echo $field['attr_16']; ?>" id="attr_16"></dd>
		  </dl>
		  <dl>
			<dt><?php echo $field['itemname_20']; ?></dt>
			<dd><textarea name="<?php echo $field['attr_20']; ?>" id="attr_20" rows="3" cols="50"></textarea></dd>
		  </dl>
		  <dl>
			<dt></dt>
			<dd><button type="submit" class="bt">提交</button></dd>
		  </dl>
		  <?php echo $field['hidden']; ?>
		</form>
       <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 

</div>
</div>


<script type="text/javascript">
  //招聘弹出框 
  function showdiv() {            
		document.getElementById("bg").style.display ="block";
		document.getElementById("show").style.display ="block";
	}
  function hidediv() {
		document.getElementById("bg").style.display ='none';
		document.getElementById("show").style.display ='none';
	}
</script>
</body>
</html>