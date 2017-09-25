<?php
/* Smarty version 3.1.31, created on 2017-09-25 12:16:28
  from "E:\phpstudy\phpStudy20160101\WWW\linkphp-bbs\assets\views\main\user\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c8f39c89aba9_10673117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8693ec13af000a9461fc606933e02b498d2ac1f3' => 
    array (
      0 => 'E:\\phpstudy\\phpStudy20160101\\WWW\\linkphp-bbs\\assets\\views\\main\\user\\main.html',
      1 => 1506341485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_59c8f39c89aba9_10673117 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="LinkPHP" content="liugene" />
    <link href="/resource/static/layui/css/layui.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/index.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/user.css" type="text/css" rel="stylesheet" />
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
 src="/resource/static/main/logic/user.js"><?php echo '</script'; ?>
>

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-LinkPHP开源框架</title>
</head>
<body>
<div id="body">
    <div class="header">
        <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <div class="user_content">
        <div class="user_box">
            <!-- 左侧 开始 -->
            <div class="user_left">
                <dl>
                    <dt>数据中心</dt>
                    <dd><a href="javascript:;" class="my-post">我的帖子</a></dd>
                    <dd><a href="#">我的收藏</a></dd>
                </dl>
                <dl>
                    <dt>帐号管理</dt>
                    <dd>个人信息</dd>
                    <dd>修改密码</dd>
                </dl>
            </div>
            <!-- 右侧 开始 -->
            <div class="user_right">
                <div class="user_right-type">
                    <span>我的帖子</span>
                    <div class="border"></div>
                </div>
                <div class="right-content-box">
                    <!--<div class="right-content-item">-->
                        <!--<div class="row">-->
                            <!--<div class="row-size">-->
                                <!--<span class="label label-warning">123</span>-->
                            <!--</div>-->
                            <!--<div class="row-title">-->
                                <!--<span><a href="javascript:;">123</a></span>-->
                            <!--</div>-->
                            <!--<div class="row-time">-->
                                <!--<span>2017-09-25</span>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
    <div class="border"></div>
    <?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
</body>
</html><?php }
}
