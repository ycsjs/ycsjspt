<?php /* Smarty version Smarty-3.1.15, created on 2015-01-27 20:29:41
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_supplier\goods_supplier_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2944954c7763399d1f0-18660459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a448b8a2804281bd2efa0432b5520b9b75ff770' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_supplier\\goods_supplier_edit.html',
      1 => 1422361779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2944954c7763399d1f0-18660459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c77633af0fb7_76218366',
  'variables' => 
  array (
    'goods_supplier' => 0,
    'app_http_url' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c77633af0fb7_76218366')) {function content_54c77633af0fb7_76218366($_smarty_tpl) {?><!DOCTYPE html>
：
GoodsSupplier/ListGoodsSupplier"><button class="btn black" style="float: right">商品供应商列表<i class="m-icon-swapright m-icon-white"></i></button></a>
GoodsSupplier/ViewGoodsSupplier?goods_supplier_id=<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['ID'];?>
"><button class="btn blue" style="float: right">查看商品供应商<i class="m-icon-swapright m-icon-white"></i></button></a>
GoodsSupplier/FileGoodsSupplier?goods_supplier_id=<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['ID'];?>
"><button class="btn purple" style="float: right">文件管理<i class="m-icon-swapright m-icon-white"></i></button></a>
GoodsSupplier/EditGoodsSupplier" method="post" onSubmit="return chkinput(this)">
" class="m-wrap span12"/>
" class="m-wrap span12"/>
" class="m-wrap span12"/>
" class="m-wrap span12"/>
" class="m-wrap span12"/>
" class="m-wrap span12" placeholder="">
" class="m-wrap span12"/>
" class="m-wrap span12"/>
" class="m-wrap span12"/>
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
</textarea>
"/>
"/>
"/>