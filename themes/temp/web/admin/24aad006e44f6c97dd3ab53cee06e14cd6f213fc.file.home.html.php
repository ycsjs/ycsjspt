<?php /* Smarty version Smarty-3.1.15, created on 2016-01-02 01:50:36
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/home.html" */ ?>
<?php /*%%SmartyHeaderCode:12599223055ffa04e0d30b2-11282503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24aad006e44f6c97dd3ab53cee06e14cd6f213fc' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/home.html',
      1 => 1451641833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12599223055ffa04e0d30b2-11282503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa04e18d219_33616638',
  'variables' => 
  array (
    'account_menu' => 0,
    'first_menu' => 0,
    'admin_account_info' => 0,
    'app_http_url' => 0,
    'second_menu' => 0,
    'third_menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa04e18d219_33616638')) {function content_55ffa04e18d219_33616638($_smarty_tpl) {?><!DOCTYPE html>
 $_from = $_smarty_tpl->tpl_vars['account_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['first_menu']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['first_menu']->key => $_smarty_tpl->tpl_vars['first_menu']->value) {
$_smarty_tpl->tpl_vars['first_menu']->_loop = true;
 $_smarty_tpl->tpl_vars['first_menu']->index++;
 $_smarty_tpl->tpl_vars['first_menu']->first = $_smarty_tpl->tpl_vars['first_menu']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['first'] = $_smarty_tpl->tpl_vars['first_menu']->first;
?>
" class="fist_menu <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['first']) {?>active<?php }?>"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['first_menu']->value['menu_name'];?>
<span class="selected <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['first']) {?>hidden<?php }?>"></span></a></li>
</span>
Index/Logout"><i class="icon-key"></i> 退出</a></li>
 $_from = $_smarty_tpl->tpl_vars['account_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['first_menu']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['first_menu']->key => $_smarty_tpl->tpl_vars['first_menu']->value) {
$_smarty_tpl->tpl_vars['first_menu']->_loop = true;
 $_smarty_tpl->tpl_vars['first_menu']->index++;
 $_smarty_tpl->tpl_vars['first_menu']->first = $_smarty_tpl->tpl_vars['first_menu']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['first'] = $_smarty_tpl->tpl_vars['first_menu']->first;
?>
SecondMenu">
 $_from = $_smarty_tpl->tpl_vars['first_menu']->value['menu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['second_menu']->key => $_smarty_tpl->tpl_vars['second_menu']->value) {
$_smarty_tpl->tpl_vars['second_menu']->_loop = true;
?>
" href="javascript:;">
</span>
Menus" class="sub-menu ul_two left_meun_two">
 $_from = $_smarty_tpl->tpl_vars['second_menu']->value['menu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['third_menu']->key => $_smarty_tpl->tpl_vars['third_menu']->value) {
$_smarty_tpl->tpl_vars['third_menu']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['third_menu']->value['menu_controller']) {?><?php echo $_smarty_tpl->tpl_vars['third_menu']->value['menu_controller'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['second_menu']->value['menu_controller'];?>
<?php }?>/<?php echo $_smarty_tpl->tpl_vars['third_menu']->value['menu_action'];?>
" target="pages"><?php echo $_smarty_tpl->tpl_vars['third_menu']->value['menu_name'];?>
</a></li>