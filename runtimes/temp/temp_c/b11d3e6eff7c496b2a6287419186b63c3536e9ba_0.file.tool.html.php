<?php
/* Smarty version 3.1.31, created on 2017-09-19 12:31:43
  from "E:\phpstudy\phpStudy20160101\WWW\linkphp-bbs\assets\views\main\public\tool.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59c10e2fc60f64_33924790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b11d3e6eff7c496b2a6287419186b63c3536e9ba' => 
    array (
      0 => 'E:\\phpstudy\\phpStudy20160101\\WWW\\linkphp-bbs\\assets\\views\\main\\public\\tool.html',
      1 => 1505740920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c10e2fc60f64_33924790 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footerbtn" style="z-index:9999;">
    <a id="saveFun" class="layui-btn layui-btn"><i class="layui-icon">&#xe619;</i> 发布</a>
    <a id="btnRefresh" class="layui-btn layui-btn-normal layui-btn"><i class="layui-icon">&#x1002;</i>刷新</a>
    <a id="closeFun" class="layui-btn layui-btn layui-btn-danger"><i class="layui-icon">&#x1006;</i> 放弃</a>
</div>

<?php echo '<script'; ?>
>
    $('#btnRefresh').on('click',function(){
        location.reload();
    });
<?php echo '</script'; ?>
><?php }
}
