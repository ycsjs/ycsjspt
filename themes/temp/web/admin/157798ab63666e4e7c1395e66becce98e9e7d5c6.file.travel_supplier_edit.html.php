<?php /* Smarty version Smarty-3.1.15, created on 2015-01-27 20:53:27
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\travel_supplier\travel_supplier_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2937154c78a47db7ed0-10235904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '157798ab63666e4e7c1395e66becce98e9e7d5c6' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\travel_supplier\\travel_supplier_edit.html',
      1 => 1422362944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2937154c78a47db7ed0-10235904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'travel_supplier' => 0,
    'app_http_url' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c78a47f1f523_10355774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c78a47f1f523_10355774')) {function content_54c78a47f1f523_10355774($_smarty_tpl) {?><!DOCTYPE html>
：
TravelSupplier/ListTravelSupplier"><button class="btn black" style="float: right">旅游供应商列表<i class="m-icon-swapright m-icon-white"></i></button></a>
TravelSupplier/ViewTravelSupplier?travel_supplier_id=<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['ID'];?>
"><button class="btn blue" style="float: right">查看旅游供应商<i class="m-icon-swapright m-icon-white"></i></button></a>
TravelSupplier/FileTravelSupplier?travel_supplier_id=<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['ID'];?>
"><button class="btn purple" style="float: right">文件管理<i class="m-icon-swapright m-icon-white"></i></button></a>
TravelSupplier/EditTravelSupplier" method="post" onSubmit="return chkinput(this)">
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