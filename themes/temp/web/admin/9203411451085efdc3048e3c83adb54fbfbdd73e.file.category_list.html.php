<?php /* Smarty version Smarty-3.1.15, created on 2015-01-27 11:09:46
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_base\category_list.html" */ ?>
<?php /*%%SmartyHeaderCode:470554b28df4d44637-78529889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9203411451085efdc3048e3c83adb54fbfbdd73e' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_base\\category_list.html',
      1 => 1422328183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '470554b28df4d44637-78529889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b28df4e5e6d6_74548272',
  'variables' => 
  array (
    'app_http_url' => 0,
    'category_list' => 0,
    'category' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b28df4e5e6d6_74548272')) {function content_54b28df4e5e6d6_74548272($_smarty_tpl) {?><!DOCTYPE html>
GoodsBase/AddGoodsCategory">
 $_from = $_smarty_tpl->tpl_vars['category_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
</td>
</td>
GoodsBase/EditGoodsCategory?category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['category']->value['Valid'];?>
" > <span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['category']->value['Valid']==0) {?>禁用<?php } else { ?>启用<?php }?></span></a>

"/>
"/>