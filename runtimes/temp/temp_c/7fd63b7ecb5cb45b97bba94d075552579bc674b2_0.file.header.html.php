<?php
/* Smarty version 3.1.31, created on 2017-09-19 12:09:25
  from "E:\phpstudy\phpStudy20160101\WWW\linkphp-bbs\assets\views\main\public\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c108f5ce3c27_58484482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fd63b7ecb5cb45b97bba94d075552579bc674b2' => 
    array (
      0 => 'E:\\phpstudy\\phpStudy20160101\\WWW\\linkphp-bbs\\assets\\views\\main\\public\\header.html',
      1 => 1505740920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c108f5ce3c27_58484482 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="nav">
    <div class="nav-show">
        <div class="nav-show-left">
            <img src="/resource/static/main/img/linkphp.png" />
        </div>
        <div class="nav-show-right">
            <a class="avatar" href="/user/">
                <img src="//q.qlogo.cn/qqapp/101235792/A645D3B0234D71AE1EB9B2366399817D/100">
                <cite>LauGene</cite>
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
                        <dd><a href="http://api.linkphp.cn" target="_blank">设置</a></dd>
                        <dd><a href="http://class.linkphp.cn" target="_blank">我的帖子</a></dd>
                        <dd><a href="http://dev.linkphp.cn" target="_blank">我的收藏</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
</div>
<hr style="margin:0;">
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
