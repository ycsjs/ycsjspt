<?php /* Smarty version Smarty-3.1.15, created on 2015-01-27 20:53:11
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_supplier\goods_supplier_list.html" */ ?>
<?php /*%%SmartyHeaderCode:98654c7727959b6a7-95704832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aad21811b5cb3515b82971975ac84df5c0a92402' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_supplier\\goods_supplier_list.html',
      1 => 1422363170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98654c7727959b6a7-95704832',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c772796e38f0_68444746',
  'variables' => 
  array (
    'app_http_url' => 0,
    'goods_supplier_list' => 0,
    'goods_supplier' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c772796e38f0_68444746')) {function content_54c772796e38f0_68444746($_smarty_tpl) {?><!DOCTYPE html>
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