<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:18:03
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/travel_supplier/travel_supplier_list.html" */ ?>
<?php /*%%SmartyHeaderCode:179654193055ffa11b4d25b5-67942077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0833d828bdc01df4f1b2b7a6dd0eebb7685eec26' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/travel_supplier/travel_supplier_list.html',
      1 => 1422363188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179654193055ffa11b4d25b5-67942077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'travel_supplier_list' => 0,
    'travel_supplier' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa11b56a3a1_11457116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa11b56a3a1_11457116')) {function content_55ffa11b56a3a1_11457116($_smarty_tpl) {?><!DOCTYPE html>
TravelSupplier/AddTravelSupplier">
 $_from = $_smarty_tpl->tpl_vars['travel_supplier_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['travel_supplier']->key => $_smarty_tpl->tpl_vars['travel_supplier']->value) {
$_smarty_tpl->tpl_vars['travel_supplier']->_loop = true;
?>
</td>
</td>
</td>
</td>
-<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['EndDate'];?>
</td>
TravelSupplier/EditTravelSupplier?travel_supplier_id=<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
TravelSupplier/FileTravelSupplier?travel_supplier_id=<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['ID'];?>
"><span class="label label-success">文件</span></a>
TravelSupplier/ViewTravelSupplier?travel_supplier_id=<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['ID'];?>
"><span class="label label-info">查看</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['Valid'];?>
" ><span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['travel_supplier']->value['Valid']==0) {?>恢复<?php } else { ?>删除<?php }?></span></a>

"/>
"/>