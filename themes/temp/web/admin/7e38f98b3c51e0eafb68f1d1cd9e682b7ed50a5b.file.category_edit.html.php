<?php /* Smarty version Smarty-3.1.15, created on 2015-01-12 02:24:10
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_base\category_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1188254b2ba5adc70f6-61898421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e38f98b3c51e0eafb68f1d1cd9e682b7ed50a5b' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_base\\category_edit.html',
      1 => 1421000646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1188254b2ba5adc70f6-61898421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b2ba5aee8223_52425461',
  'variables' => 
  array (
    'app_http_url' => 0,
    'category' => 0,
    'first_category' => 0,
    'first_category_item' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2ba5aee8223_52425461')) {function content_54b2ba5aee8223_52425461($_smarty_tpl) {?><!DOCTYPE html>
GoodsBase/EditGoodsCategory" method="post" onSubmit="return chkinput(this)" class="form-horizontal">
" class="m-wrap span12" placeholder="">
 $_from = $_smarty_tpl->tpl_vars['first_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['first_category_item']->key => $_smarty_tpl->tpl_vars['first_category_item']->value) {
$_smarty_tpl->tpl_vars['first_category_item']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['first_category_item']->value['ID']==$_smarty_tpl->tpl_vars['category']->value['ParentId']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['first_category_item']->value['CategoryName'];?>
</option>
"/>
" />
"/>
GoodsBase/ListGoodsCategory" />