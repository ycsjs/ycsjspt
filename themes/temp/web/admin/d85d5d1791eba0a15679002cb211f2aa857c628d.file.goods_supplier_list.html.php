<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:19:59
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/goods_supplier/goods_supplier_list.html" */ ?>
<?php /*%%SmartyHeaderCode:75986901855ffa18f931b72-01494296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd85d5d1791eba0a15679002cb211f2aa857c628d' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/goods_supplier/goods_supplier_list.html',
      1 => 1422363170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75986901855ffa18f931b72-01494296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'goods_supplier_list' => 0,
    'goods_supplier' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa18f9cdb07_28236454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa18f9cdb07_28236454')) {function content_55ffa18f9cdb07_28236454($_smarty_tpl) {?><!DOCTYPE html>
GoodsSupplier/AddGoodsSupplier">
 $_from = $_smarty_tpl->tpl_vars['goods_supplier_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods_supplier']->key => $_smarty_tpl->tpl_vars['goods_supplier']->value) {
$_smarty_tpl->tpl_vars['goods_supplier']->_loop = true;
?>
</td>
</td>
</td>
</td>
-<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['EndDate'];?>
</td>
GoodsSupplier/EditGoodsSupplier?goods_supplier_id=<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
GoodsSupplier/FileGoodsSupplier?goods_supplier_id=<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['ID'];?>
"><span class="label label-success">文件</span></a>
GoodsSupplier/ViewGoodsSupplier?goods_supplier_id=<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['ID'];?>
"><span class="label label-info">查看</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['Valid'];?>
" ><span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['goods_supplier']->value['Valid']==0) {?>恢复<?php } else { ?>删除<?php }?></span></a>

"/>
"/>