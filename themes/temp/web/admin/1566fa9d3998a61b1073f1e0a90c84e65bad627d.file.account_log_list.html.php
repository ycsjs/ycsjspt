<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 15:57:51
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/account/account_log_list.html" */ ?>
<?php /*%%SmartyHeaderCode:139477200455ffb87f70dd54-75429614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1566fa9d3998a61b1073f1e0a90c84e65bad627d' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/account/account_log_list.html',
      1 => 1420909608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139477200455ffb87f70dd54-75429614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'log_list' => 0,
    'log_item' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffb87f7722c9_40316582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffb87f7722c9_40316582')) {function content_55ffb87f7722c9_40316582($_smarty_tpl) {?><!DOCTYPE html>
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