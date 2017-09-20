<?php
/* Smarty version 3.1.31, created on 2017-09-20 13:18:16
  from "E:\phpstudy\phpStudy20160101\WWW\linkphp-bbs\assets\views\main\wiki\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c26a98169d32_25271299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df418812b129331624d610c8f6e8442f89c686ed' => 
    array (
      0 => 'E:\\phpstudy\\phpStudy20160101\\WWW\\linkphp-bbs\\assets\\views\\main\\wiki\\main.html',
      1 => 1505913489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
  ),
),false)) {
function content_59c26a98169d32_25271299 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="LinkPHP" content="liugene" />
    <link href="/resource/static/layui/css/layui.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/index.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/wiki.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/footer.css" type="text/css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="/resource/static/layui/layui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/main/js/jquery.min.js"><?php echo '</script'; ?>
>

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-LinkPHP开源框架</title>
</head>

<body>

<div class="wiki-center">
    <div class="header">
        <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <div class="body">
        <div class="left">
            <div class="wiki-left-box">
                <span class="wiki-show">
                    <a href="javascript:;">
                        <i class="layui-icon icon icon-active">&#xe61a;</i>
                        <i class="layui-icon icon icon-none">&#xe602;</i>
                        wiki中心
                    </a>
                </span>
                <ul class="wiki-active">
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                </ul>
                <span class="wiki-show">
                    <a href="javascript:;">
                        <i class="layui-icon icon icon-none">&#xe61a;</i>
                        <i class="layui-icon icon icon-active">&#xe602;</i>
                        wiki中心
                    </a>
                </span>
                <ul class="wiki-none">
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                </ul>
                <span class="wiki-show">
                    <a href="javascript:;">
                        <i class="layui-icon icon icon-none">&#xe61a;</i>
                        <i class="layui-icon icon icon-active">&#xe602;</i>
                        wiki中心
                    </a>
                </span>
                <ul class="wiki-none">
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                </ul>
                <span class="wiki-show">
                    <a href="javascript:;">
                        <i class="layui-icon icon icon-none">&#xe61a;</i>
                        <i class="layui-icon icon icon-active">&#xe602;</i>
                        wiki中心
                    </a>
                </span>
                <ul class="wiki-none">
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                    <li><a href="javascript:;">wiki手册</a></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <iframe src="/index.php/main/wiki/view" id="demoAdmin" style="width: 100%; height: 99%;" frameborder="0"></iframe>
            <div class="wiki-footer">
                © linkphp.cn - php api框架
            </div>
        </div>
    </div>
</div>

<!-- 底部  -->
<?php echo '<script'; ?>
 src="/resource/static/main/js/wiki.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
