<?php
/* Smarty version 3.1.31, created on 2017-09-25 12:15:26
  from "E:\phpstudy\phpStudy20160101\WWW\linkphp-bbs\assets\views\main\public\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c8f35e3639f6_77321838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fd63b7ecb5cb45b97bba94d075552579bc674b2' => 
    array (
      0 => 'E:\\phpstudy\\phpStudy20160101\\WWW\\linkphp-bbs\\assets\\views\\main\\public\\header.html',
      1 => 1506341485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c8f35e3639f6_77321838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="nav">
    <div class="nav-show">
        <div class="nav-show-left">
            <a href="/">
            <img src="/resource/static/main/img/linkphp.png" />
            </a>
        </div>
        <div class="nav-show-right">
            <a class="avatar" href="/index.php/main/login/main">
                <img src="/resource/static/main/img/photo.png">
                <cite>登入/注册</cite>
            </a>
        </div>
        <div class="nav-show-middle">
            <ul class="layui-nav" layui-filter="linkphpnav">
                <li class="layui-nav-item"><a href="/">首页</a></li>
                <li class="layui-nav-item"><a href="/index.php/main/forum/main">社区</a></li>
                <li class="layui-nav-item"><a href="/index.php/main/wiki/main">WIKI</a></li>
                <li class="layui-nav-item"><a href="/index.php/main/blog/main">博客</a></li>
                <li class="layui-nav-item"><a href="/index.php/main/library/main">类库</a></li>
                <li class="layui-nav-item">
                    <a href="javascript:;">个人中心</a>
                    <dl class="layui-nav-child">
                        <dd><a href="/index.php/main/user/main">设置</a></dd>
                        <dd><a href="/index.php/main/user/main">我的帖子</a></dd>
                        <dd><a href="/index.php/main/user/main">我的收藏</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="border"></div>
<!--<hr style="margin:0;">-->
<?php echo '<script'; ?>
>
    layui.use(['element'],function(){
        var element = layui.element;
        element.on('tab(linkphpnav)',function(){
        });
    });
<?php echo '</script'; ?>
><?php }
}
