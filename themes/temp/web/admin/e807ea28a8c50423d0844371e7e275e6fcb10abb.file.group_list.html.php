<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:18:59
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/goods_base/group_list.html" */ ?>
<?php /*%%SmartyHeaderCode:64356448355ffa1539607a6-00157084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e807ea28a8c50423d0844371e7e275e6fcb10abb' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/goods_base/group_list.html',
      1 => 1422328248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64356448355ffa1539607a6-00157084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'group_list' => 0,
    'group' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa1539e1532_89673685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa1539e1532_89673685')) {function content_55ffa1539e1532_89673685($_smarty_tpl) {?><!DOCTYPE html>
GoodsBase/AddGoodsGroup">
 $_from = $_smarty_tpl->tpl_vars['group_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
</td>
</td>
GoodsBase/EditGoodsGroup?group_id=<?php echo $_smarty_tpl->tpl_vars['group']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['group']->value['Valid'];?>
" > <span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['group']->value['Valid']==0) {?>禁用<?php } else { ?>启用<?php }?></span></a>

"/>
"/>