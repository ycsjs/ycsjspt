<?php /* Smarty version Smarty-3.1.15, created on 2015-01-11 10:19:04
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\account\account_list.html" */ ?>
<?php /*%%SmartyHeaderCode:263354b0794f073f73-69773712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb776d35fd959d76e3977501267947389e16606a' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\account\\account_list.html',
      1 => 1420942738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263354b0794f073f73-69773712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b0794f0c2177_68505080',
  'variables' => 
  array (
    'app_http_url' => 0,
    'account_list' => 0,
    'account' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b0794f0c2177_68505080')) {function content_54b0794f0c2177_68505080($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\iyouwu\\system\\libs\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
Account/AddAccount">
 $_from = $_smarty_tpl->tpl_vars['account_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['account']->key => $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->_loop = true;
?>
</td>
</td>
</td>
</td>
</td>
Account/EditAccount?account_id=<?php echo $_smarty_tpl->tpl_vars['account']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
Account/ViewAccount?account_id=<?php echo $_smarty_tpl->tpl_vars['account']->value['ID'];?>
"><span class="label label-success">查看</span></a>
Account/RestrictAccount?account_id=<?php echo $_smarty_tpl->tpl_vars['account']->value['ID'];?>
"><span class="label label-info">权限</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['account']->value['Valid'];?>
" > <span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['account']->value['Valid']==0) {?>禁用<?php } else { ?>启用<?php }?></span></a>

"/>
"/>