<?php /* Smarty version Smarty-3.1.15, created on 2015-01-11 01:06:51
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\account\account_log_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2442654b14d552394f4-72694376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bd76fd8c8db4133d5ee429f26ec78affc25425e' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\account\\account_log_list.html',
      1 => 1420909608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2442654b14d552394f4-72694376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b14d55317f92_74807504',
  'variables' => 
  array (
    'app_http_url' => 0,
    'log_list' => 0,
    'log_item' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b14d55317f92_74807504')) {function content_54b14d55317f92_74807504($_smarty_tpl) {?><!DOCTYPE html>
AccountLog/AccountLogList" onsubmit="return CheckCondition()">
 $_from = $_smarty_tpl->tpl_vars['log_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log_item']->key => $_smarty_tpl->tpl_vars['log_item']->value) {
$_smarty_tpl->tpl_vars['log_item']->_loop = true;
?>
</td>
</td>
</td>
</td>

"/>
"/>