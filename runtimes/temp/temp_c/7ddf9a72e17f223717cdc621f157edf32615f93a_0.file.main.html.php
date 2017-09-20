<?php
/* Smarty version 3.1.31, created on 2017-09-20 13:17:09
  from "E:\phpstudy\phpStudy20160101\WWW\linkphp-bbs\assets\views\main\library\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c26a551dbc58_54516204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ddf9a72e17f223717cdc621f157edf32615f93a' => 
    array (
      0 => 'E:\\phpstudy\\phpStudy20160101\\WWW\\linkphp-bbs\\assets\\views\\main\\library\\main.html',
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
function content_59c26a551dbc58_54516204 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <meta name="LinkPHP" content="liugene" />
    <link href="/resource/static/layui/css/layui.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/index.css" type="text/css" rel="stylesheet" />
    <link href="/resource/static/main/css/lib.css" type="text/css" rel="stylesheet" />
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

    <!-- 类库中间  -->
    <div class="content">
        <div class="content-box">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                <ul class="layui-tab-title">
                    <li class="layui-this">全部</li>
                    <li>PHP</li>
                    <li>阿里云</li>
                    <li>七牛</li>
                    <li>淘宝客</li>
                </ul>
                <div class="layui-tab-content"></div>
            </div>
            <div class="library-box">
                <div class="library-content">
                    <div class="library-content-child">
                        <div class="library-dec"></div>
                        <div class="library-down">
                            <a class="layui-btn" href="javascript:;">
                                <i class="layui-icon">&#xe601;</i> 点击下载
                            </a>
                        </div>
                    </div>
                </div>
                <div class="library-content">
                    <div class="library-content-child">
                        <div class="library-dec"></div>
                        <div class="library-down">
                            <a class="layui-btn" href="javascript:;">
                                <i class="layui-icon">&#xe601;</i> 点击下载
                            </a>
                        </div>
                    </div>
                </div>
                <div class="library-content">
                    <div class="library-content-child">
                        <div class="library-dec"></div>
                        <div class="library-down">
                            <a class="layui-btn" href="javascript:;">
                                <i class="layui-icon">&#xe601;</i> 点击下载
                            </a>
                        </div>
                    </div>
                </div>
                <div class="library-content last-box">
                    <div class="library-content-child">
                        <div class="library-dec"></div>
                        <div class="library-down">
                            <a class="layui-btn" href="javascript:;">
                                <i class="layui-icon">&#xe601;</i> 点击下载
                            </a>
                        </div>
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


</body>
</html>
<?php }
}
