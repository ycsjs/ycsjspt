<?php /* Smarty version Smarty-3.1.15, created on 2015-01-12 02:26:21
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_base\category_add.html" */ ?>
<?php /*%%SmartyHeaderCode:448654b28ea13e3b06-61321717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f0ab08aee9c71aaac850e3339eabcfb496195a' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_base\\category_add.html',
      1 => 1420998330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '448654b28ea13e3b06-61321717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b28ea14aa201_00390680',
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
<?php if ($_valid && !is_callable('content_54b28ea14aa201_00390680')) {function content_54b28ea14aa201_00390680($_smarty_tpl) {?><!DOCTYPE html>
GoodsBase/AddGoodsCategory" method="post" onSubmit="return chkinput(this)" class="form-horizontal">
" class="m-wrap span12" placeholder="">
 $_from = $_smarty_tpl->tpl_vars['first_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['first_category_item']->key => $_smarty_tpl->tpl_vars['first_category_item']->value) {
$_smarty_tpl->tpl_vars['first_category_item']->_loop = true;
?>
"><?php echo $_smarty_tpl->tpl_vars['first_category_item']->value['CategoryName'];?>
</option>
" />
"/>
GoodsBase/ListGoodsCategory" />