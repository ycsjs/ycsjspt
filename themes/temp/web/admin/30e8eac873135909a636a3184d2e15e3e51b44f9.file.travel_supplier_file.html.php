<?php /* Smarty version Smarty-3.1.15, created on 2015-01-27 21:59:59
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\travel_supplier\travel_supplier_file.html" */ ?>
<?php /*%%SmartyHeaderCode:98454c78a5449ac20-50041559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30e8eac873135909a636a3184d2e15e3e51b44f9' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\travel_supplier\\travel_supplier_file.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98454c78a5449ac20-50041559',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c78a545cb774_40491383',
  'variables' => 
  array (
    'travel_supplier' => 0,
    'app_http_url' => 0,
    'travel_supplier_file' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c78a545cb774_40491383')) {function content_54c78a545cb774_40491383($_smarty_tpl) {?><!DOCTYPE html>
旅游供应商文件管理</div>
TravelSupplier/ListTravelSupplier"><button class="btn black" style="float: right">旅游供应商列表<i class="m-icon-swapright m-icon-white"></i></button></a>
TravelSupplier/ViewTravelSupplier?travel_supplier_id=<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['ID'];?>
"><button class="btn blue" style="float: right">查看旅游供应商<i class="m-icon-swapright m-icon-white"></i></button></a>
TravelSupplier/EditTravelSupplier?travel_supplier_id=<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['ID'];?>
"><button class="btn purple" style="float: right">编辑旅游供应商<i class="m-icon-swapright m-icon-white"></i></button></a>
TravelSupplier/FileTravelSupplier" method="post" enctype="multipart/form-data">
 $_from = $_smarty_tpl->tpl_vars['travel_supplier_file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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