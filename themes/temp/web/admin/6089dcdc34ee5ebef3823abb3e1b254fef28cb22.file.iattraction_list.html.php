<?php /* Smarty version Smarty-3.1.15, created on 2015-01-11 17:17:02
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\iattraction\iattraction_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1984854b1dcadb67837-06848001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6089dcdc34ee5ebef3823abb3e1b254fef28cb22' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\iattraction\\iattraction_list.html',
      1 => 1420967791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984854b1dcadb67837-06848001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b1dcadcb38e8_74701529',
  'variables' => 
  array (
    'app_http_url' => 0,
    'iattraction_list' => 0,
    'iattraction' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b1dcadcb38e8_74701529')) {function content_54b1dcadcb38e8_74701529($_smarty_tpl) {?><!DOCTYPE html>
Iattraction/AddIattraction">
 $_from = $_smarty_tpl->tpl_vars['iattraction_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iattraction']->key => $_smarty_tpl->tpl_vars['iattraction']->value) {
$_smarty_tpl->tpl_vars['iattraction']->_loop = true;
?>
</td>
</td>
</td>
</td>
</td>
Iattraction/EditIattraction?iattraction_id=<?php echo $_smarty_tpl->tpl_vars['iattraction']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
Iattraction/PictureIattraction?iattraction_id=<?php echo $_smarty_tpl->tpl_vars['iattraction']->value['ID'];?>
"><span class="label label-success">图片</span></a>
Iattraction/ViewIattraction?iattraction_id=<?php echo $_smarty_tpl->tpl_vars['iattraction']->value['ID'];?>
"><span class="label label-info">查看</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['iattraction']->value['Valid'];?>
" ><span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['iattraction']->value['Valid']==0) {?>恢复<?php } else { ?>删除<?php }?></span></a>

"/>
"/>