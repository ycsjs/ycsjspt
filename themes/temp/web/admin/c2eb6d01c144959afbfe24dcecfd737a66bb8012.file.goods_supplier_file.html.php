<?php /* Smarty version Smarty-3.1.15, created on 2015-01-27 22:27:22
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_supplier\goods_supplier_file.html" */ ?>
<?php /*%%SmartyHeaderCode:207454c778dfd9d188-45233489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2eb6d01c144959afbfe24dcecfd737a66bb8012' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_supplier\\goods_supplier_file.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207454c778dfd9d188-45233489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c778e005a988_10445441',
  'variables' => 
  array (
    'goods_supplier' => 0,
    'app_http_url' => 0,
    'goods_supplier_file' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c778e005a988_10445441')) {function content_54c778e005a988_10445441($_smarty_tpl) {?><!DOCTYPE html>
商品供应商文件管理</div>
GoodsSupplier/ListGoodsSupplier"><button class="btn black" style="float: right">商品供应商列表<i class="m-icon-swapright m-icon-white"></i></button></a>
GoodsSupplier/ViewGoodsSupplier?goods_supplier_id=<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['ID'];?>
"><button class="btn blue" style="float: right">查看商品供应商<i class="m-icon-swapright m-icon-white"></i></button></a>
GoodsSupplier/EditGoodsSupplier?goods_supplier_id=<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['ID'];?>
"><button class="btn purple" style="float: right">编辑商品供应商<i class="m-icon-swapright m-icon-white"></i></button></a>
GoodsSupplier/FileGoodsSupplier" method="post" enctype="multipart/form-data">
 $_from = $_smarty_tpl->tpl_vars['goods_supplier_file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['file']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['file']->index++;
 $_smarty_tpl->tpl_vars['file']->first = $_smarty_tpl->tpl_vars['file']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['first'] = $_smarty_tpl->tpl_vars['file']->first;
?>
" href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['file']->value['FileSrc'];?>
" style="float: left">

" class="icon-remove delete_pic">删除</i></a>
"/>
"/>