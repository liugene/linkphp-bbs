<?php
/* Smarty version 3.1.31, created on 2017-09-18 04:29:35
  from "C:\Object\linkphp-bbs\assets\views\main\ask\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59bf2f8f5e7b81_37328533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47e08a42f9a642c84ec6a4abfb5a352092dcc6c9' => 
    array (
      0 => 'C:\\Object\\linkphp-bbs\\assets\\views\\main\\ask\\main.html',
      1 => 1505701772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/tool.html' => 1,
  ),
),false)) {
function content_59bf2f8f5e7b81_37328533 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="LinkPHP" content="liugene" />
    <link href="/resource/static/layui/css/layui.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/index.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/ask.css" type="text/css" rel="stylesheet" />
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
<!-- 头部  -->
<?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- 社区中间  -->

<div class="content">
    <div class="content-box">
        <form class="layui-form" action="">
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <input type="text" name="title" placeholder="请输入标题" autocomplete="off" class="layui-input title">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <input type="text" name="title" placeholder="标签,如:linkphp" autocomplete="off" class="layui-input tags">
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <div class="layui-input-block">
                    <textarea id="desc" name="desc" style="display: none;"></textarea>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:public/tool.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
<?php echo '<script'; ?>
>
    layui.use('layedit', function(){
        var layedit = layui.layedit;
        layedit.build('desc'); //建立编辑器
    });
<?php echo '</script'; ?>
>
</html>
<?php }
}