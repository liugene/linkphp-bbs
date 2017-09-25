<?php
/* Smarty version 3.1.31, created on 2017-09-25 04:41:29
  from "C:\Object\linkphp-bbs\assets\views\main\blog\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c86cd9e38a05_87857369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1289b258ce8862329d7d52bcd8a10b85b648e508' => 
    array (
      0 => 'C:\\Object\\linkphp-bbs\\assets\\views\\main\\blog\\main.html',
      1 => 1506301493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_59c86cd9e38a05_87857369 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="LinkPHP" content="liugene" />
    <link href="/resource/static/layui/css/layui.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/index.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/blog.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/footer.css" type="text/css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="/resource/static/main/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/layer/layer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/layui/layui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/main/util/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/resource/static/main/logic/blog.js"><?php echo '</script'; ?>
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
            <!--<div class="blog-content">-->
                <!--<div class="blog-img">-->
                    <!--<img src="/">-->
                <!--</div>-->
                <!--<header class="blog-title">-->
                    <!--<a href="#" target="_blank">响应国家政策，本站评论需实名认证后使用</a>-->
                <!--</header>-->
                <!--<div class="blog-dec">-->
                    <!--<p>-->
                        <!--根据网信办《互联网跟帖评论服务管理规定》，要求网站按照“后台实名、前台自愿”原则，对注册用户进行真实身份信息认证，-->
                        <!--不得向未认证真实身份信息的用户提供跟帖评论服务。为了充分落实《规定》精神、维护国家安全和公共利益、-->
                        <!--弘扬社会主义核心价值观，即日起在树洞博客评论需在本页面实名认证后才能进行。 认证流程 打开https://r […]-->
                    <!--</p>-->
                <!--</div>-->
            <!--</div>-->
        </div>
    </div>

    <!-- 底部  -->
    <hr style="margin:0;">
    <?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>


</body>
</html>
<?php }
}
