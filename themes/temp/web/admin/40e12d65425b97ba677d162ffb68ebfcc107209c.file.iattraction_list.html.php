<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:19:52
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/iattraction/iattraction_list.html" */ ?>
<?php /*%%SmartyHeaderCode:142507387155ffa188a5f641-77002454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40e12d65425b97ba677d162ffb68ebfcc107209c' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/iattraction/iattraction_list.html',
      1 => 1420967790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142507387155ffa188a5f641-77002454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'iattraction_list' => 0,
    'iattraction' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa188af3b48_81909307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa188af3b48_81909307')) {function content_55ffa188af3b48_81909307($_smarty_tpl) {?><!DOCTYPE html>
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