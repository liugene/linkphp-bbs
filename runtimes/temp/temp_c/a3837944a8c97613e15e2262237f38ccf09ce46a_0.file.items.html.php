<?php
/* Smarty version 3.1.31, created on 2017-09-20 12:51:18
  from "E:\phpstudy\phpStudy20160101\WWW\linkphp-bbs\assets\views\main\forum\items.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c26446a7ff57_57042077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3837944a8c97613e15e2262237f38ccf09ce46a' => 
    array (
      0 => 'E:\\phpstudy\\phpStudy20160101\\WWW\\linkphp-bbs\\assets\\views\\main\\forum\\items.html',
      1 => 1505910859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_59c26446a7ff57_57042077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="LinkPHP" content="liugene" />
    <link href="/resource/static/layui/css/layui.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/index.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/forum.css" type="text/css" rel="stylesheet" />
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

<div id="body">
    <!-- 头部  -->
    <?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- 社区详细中间  -->

    <div class="content item-content">
        <div class="content-box item-content-box">
            <div class="content-item">
                <div class="content-item-box">
                    <div class="post-title">
                        <a href="/index.php/main/forum/items" target="_blank">这是一个测试的内容</a>
                    </div>
                    <div class="post-info">
                        <strong class="post-user">linkphp</strong>
                        <em class="post-time">2017-09-17</em>
                        <span class="post-tags"><a href="#" class="tags-info">mvc</a></span>
                        <span class="post-num"><i class="layui-icon">&#xe611;</i> 0</span>
                    </div>
                </div>
                <div class="content-item-box-dec">
                    <p>1.0新版本在调试公众号网页的时候，控制台没有任何JSSDK的输出，不知道是bug还是新版本调整在别的地方了</p>
                    <strong class="post-last-time">最后一次编辑于: 2017-09-17</strong>
                </div>
                <div class="content-item-box-repeat">
                    <div class="content-item-box-img">
                        <img src="//q.qlogo.cn/qqapp/101235792/A645D3B0234D71AE1EB9B2366399817D/100">
                    </div>
                    <div class="content-item-box-notic">
                        <textarea id="notic" style="display: none;"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 底部  -->
    <hr style="margin:0;">
    <?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>


<?php echo '<script'; ?>
>
    layui.use(['element','layedit'],function(){
        var element = layui.element;
        var layedit = layui.layedit;
        layedit.build('notic',{
            height: 180 //设置编辑器高度
        });
    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
