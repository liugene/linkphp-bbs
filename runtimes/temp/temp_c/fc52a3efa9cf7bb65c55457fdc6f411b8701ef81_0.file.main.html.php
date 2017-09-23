<?php
/* Smarty version 3.1.31, created on 2017-09-23 07:45:10
  from "E:\phpstudy\phpStudy20160101\WWW\linkphp-bbs\assets\views\main\ask\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c61106331995_81924200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc52a3efa9cf7bb65c55457fdc6f411b8701ef81' => 
    array (
      0 => 'E:\\phpstudy\\phpStudy20160101\\WWW\\linkphp-bbs\\assets\\views\\main\\ask\\main.html',
      1 => 1506152704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/tool.html' => 1,
  ),
),false)) {
function content_59c61106331995_81924200 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="LinkPHP" content="liugene" />
    <?php echo '<script'; ?>
 src="/resource/static/main/js/jquery.min.js"><?php echo '</script'; ?>
>
    <link href="/resource/static/editor.md/css/editormd.min.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/layui/css/layui.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/index.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/ask.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/footer.css" type="text/css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="/resource/static/layer/layer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/main/util/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/main/logic/ask.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/editor.md/editormd.min.js"><?php echo '</script'; ?>
>

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-LinkPHP开源框架</title>
</head>

<body>
<div id="body">
    <!-- 头部  -->
    <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- 社区中间  -->

    <div class="content">
        <div class="content-box">
            <form class="layui-form" action="">
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <input id="title" type="text" name="title" placeholder="请输入标题" autocomplete="off" class="layui-input title">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <input id="type" type="text" name="type" placeholder="标签,如:linkphp" autocomplete="off" class="layui-input tags">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <div id="markdown">
                        <textarea id="desc" name="desc" style="display: none;"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:public/tool.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>


</body>
<?php echo '<script'; ?>
>
    var markdown;
    $(function() {
        markdown = editormd("markdown", {
            width   : "99.5%",
            height  : 380,
            syncScrolling : "single",
            path    : "/resource/static/editor.md/lib/"
        });
    });
<?php echo '</script'; ?>
>
</html>
<?php }
}
