<?php /* Smarty version Smarty-3.1.15, created on 2016-01-02 00:55:51
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/goods_base/category_add.html" */ ?>
<?php /*%%SmartyHeaderCode:632301655686af970b2990-33748824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4916ab938e78f23d224af84449e1ca7960f75fcc' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/goods_base/category_add.html',
      1 => 1420998330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '632301655686af970b2990-33748824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'category' => 0,
    'first_category' => 0,
    'first_category_item' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5686af97129014_01344903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5686af97129014_01344903')) {function content_5686af97129014_01344903($_smarty_tpl) {?><!DOCTYPE html>
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