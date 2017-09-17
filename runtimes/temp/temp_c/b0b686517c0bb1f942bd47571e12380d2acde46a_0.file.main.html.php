<?php
/* Smarty version 3.1.31, created on 2017-09-17 00:28:38
  from "E:\phpstudy\phpStudy20160101\WWW\linkphp-bbs\assets\views\main\home\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59bdc1b61e17a6_84248919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0b686517c0bb1f942bd47571e12380d2acde46a' => 
    array (
      0 => 'E:\\phpstudy\\phpStudy20160101\\WWW\\linkphp-bbs\\assets\\views\\main\\home\\main.html',
      1 => 1505573338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_59bdc1b61e17a6_84248919 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="LinkPHP" content="liugene" />
    <link href="/resource/static/layui/css/layui.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/index.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/footer.css" type="text/css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="/resource/static/layui/layui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/main/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/main/js/quietflow.min.js"><?php echo '</script'; ?>
>

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-LinkPHP开源框架</title>
</head>

<body>
<!-- 头部  -->
<?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- 首页中间  -->
<div class="clear"></div>
<div id="content">
 <div class="class-content">
  <div class="class-content-logo">
    <img src="/resource/static/main/img/icon.png" style="width:220px;height:220px" />
  </div>
  <div class="class-content-item">
    <a href="http://class.linkphp.cn" target="_blank" class="layui-btn layui-btn-big layui-btn-radius">加载类库</a>
    <a href="httP://wiki.linkphp.cn" target="_blank" class="layui-btn layui-btn-big layui-btn-radius">帮助手册</a>
    <a href="http://i.linkphp.cn" target="_blank" class="layui-btn layui-btn-primary layui-btn-big layui-btn-radius">技术问答社区</a>
    <a href="http://api.linkphp.cn" target="_blank" class="layui-btn layui-btn-big layui-btn-radius layui-btn-warm">API调用</a>
  </div>
  <div class="class-content-font">
   当前类库大小：15个 | 最新更新于: 2017-03-19
  </div>
 </div>
</div>

<div class="clear">
</div>
<hr style="margin:0;">
<!-- 首页中间  -->
<div id="center">
 <div class="center-show">
  <div class="center-show-item"><i class="layui-icon" style="font-size:230px; color:#5FB878;">&#xe635;</i></div>
  <div class="center-show-item"><i class="layui-icon" style="font-size:230px; color:#F7B824;">&#xe620;</i></div>
  <div class="center-show-item"><i class="layui-icon" style="font-size:230px; color:#5FB878;">&#xe61e;</i></div>
 </div>
 <div class="center-show">
  <div class="center-show-item center-show-font">
    <p>你可以配置不同的上传方案并绑定至不同的用户组，实现不同用户组的文件以不同方式存储，或者不同用户组对文件有不同的限制。</p>
  </div>
  <div class="center-show-item center-show-font">
    <p>你可以配置不同的上传方案并绑定至不同的用户组，实现不同用户组的文件以不同方式存储，或者不同用户组对文件有不同的限制。</p>
  </div>
  <div class="center-show-item center-show-font">
    <p>你可以配置不同的上传方案并绑定至不同的用户组，实现不同用户组的文件以不同方式存储，或者不同用户组对文件有不同的限制。</p>
  </div>
 </div>
</div>

<!-- 合作展示  -->
<!--
<hr style="margin:0;">
<div id="work">
 <div class="work-show">
  <div class="work-show-item"></div>
  <div class="work-show-item"></div>
  <div class="work-show-item"></div>
  <div class="work-show-item"></div>
  <div class="work-show-item"></div>
 </div>
 <div class="work-show">
  <div class="work-show-item"></div>
  <div class="work-show-item"></div>
  <div class="work-show-item"></div>
  <div class="work-show-item"></div>
  <div class="work-show-item"></div>
 </div>
 <div class="work-show work-show-space">
  <fieldset class="layui-elem-field">
   <legend>类库-支持以上 </legend>
   <div class="layui-field-box">
    LinkPHP开源类库支持以上
   </div>
  </fieldset>
 </div>
</div>
-->

<!-- 底部  -->
<hr style="margin:0;">
<?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
 $("#content").quietflow({
  theme:"bouncingBalls",
  backgroundCol : "#393D49",
  specificColors : ["#2F4056", "#d2d2d2","#333","#5FB878"]
 // speed : 100
})
layui.use(['element'],function(){
	var element = layui.element();
	element.on('tab(linkphpnav)',function(){
	});
});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
