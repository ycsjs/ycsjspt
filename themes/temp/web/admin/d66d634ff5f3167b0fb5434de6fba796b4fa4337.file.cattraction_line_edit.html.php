<?php /* Smarty version Smarty-3.1.15, created on 2015-01-11 17:36:38
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\cattraction_line\cattraction_line_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2558254b24426b8d5c4-78049824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd66d634ff5f3167b0fb5434de6fba796b4fa4337' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\cattraction_line\\cattraction_line_edit.html',
      1 => 1420968780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2558254b24426b8d5c4-78049824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cattraction_line' => 0,
    'app_http_url' => 0,
    'schedule' => 0,
    'theme' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b2442716ba41_51495023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2442716ba41_51495023')) {function content_54b2442716ba41_51495023($_smarty_tpl) {?><!DOCTYPE html>
线路信息</div>
详细信息：
CattractionLine/ListCattractionLine"><button class="btn black" style="float: right">线路列表<i class="m-icon-swapright m-icon-white"></i></button></a>
CattractionLine/ViewCattractionLine?cattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ID'];?>
"><button class="btn blue" style="float: right">查看线路<i class="m-icon-swapright m-icon-white"></i></button></a>
CattractionLine/PictureCattractionLine?cattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ID'];?>
"><button class="btn purple" style="float: right">图片管理<i class="m-icon-swapright m-icon-white"></i></button></a>
CattractionLine/EditCattractionLine" method="post" onSubmit="return chkinput(this)">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
</textarea>
</textarea>
</textarea>
</textarea>
</textarea>
"/>
"/>
"/>