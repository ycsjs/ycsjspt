<?php /* Smarty version Smarty-3.1.15, created on 2015-01-12 02:56:27
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_base\group_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1834054b2c75bcc5c13-49092617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e463906e384a2889538477ddb21f6e213d5e62b0' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_base\\group_edit.html',
      1 => 1421001873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1834054b2c75bcc5c13-49092617',
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
  'unifunc' => 'content_54b2c75bddf031_82330666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2c75bddf031_82330666')) {function content_54b2c75bddf031_82330666($_smarty_tpl) {?><!DOCTYPE html>
GoodsBase/EditGoodsGroup" method="post" onSubmit="return chkinput(this)" class="form-horizontal">
" class="m-wrap span12" placeholder="">
 $_from = $_smarty_tpl->tpl_vars['first_group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['first_group_item']->key => $_smarty_tpl->tpl_vars['first_group_item']->value) {
$_smarty_tpl->tpl_vars['first_group_item']->_loop = true;
?>
" <?php if ($_smarty_tpl->tpl_vars['first_group_item']->value['ID']==$_smarty_tpl->tpl_vars['group']->value['ParentId']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['first_group_item']->value['GroupName'];?>
</option>
"/>
" />
"/>
GoodsBase/ListGoodsGroup" />