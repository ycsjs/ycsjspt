<?php /* Smarty version Smarty-3.1.15, created on 2015-01-12 02:55:34
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_base\group_add.html" */ ?>
<?php /*%%SmartyHeaderCode:3026354b2c726e98c68-94175568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61edde0a6ca8fa09174574db0f407dff5c9b99ec' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_base\\group_add.html',
      1 => 1421001873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3026354b2c726e98c68-94175568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'group' => 0,
    'first_group' => 0,
    'first_group_item' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b2c726f38f04_05068010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2c726f38f04_05068010')) {function content_54b2c726f38f04_05068010($_smarty_tpl) {?><!DOCTYPE html>
GoodsBase/AddGoodsGroup" method="post" onSubmit="return chkinput(this)" class="form-horizontal">
" class="m-wrap span12" placeholder="">
 $_from = $_smarty_tpl->tpl_vars['first_group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['first_group_item']->key => $_smarty_tpl->tpl_vars['first_group_item']->value) {
$_smarty_tpl->tpl_vars['first_group_item']->_loop = true;
?>
"><?php echo $_smarty_tpl->tpl_vars['first_group_item']->value['GroupName'];?>
</option>
" />
"/>
GoodsBase/ListGoodsGroup" />