<?php /* Smarty version Smarty-3.1.15, created on 2015-09-22 10:16:15
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/cattraction_line/cattraction_line_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:645652745600b9ef1bbae0-28574381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b1f79ef65e31a816ee88aa38109bfadd2266359' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/cattraction_line/cattraction_line_edit.html',
      1 => 1420968780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '645652745600b9ef1bbae0-28574381',
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
  'unifunc' => 'content_5600b9ef3e4ad4_03475673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5600b9ef3e4ad4_03475673')) {function content_5600b9ef3e4ad4_03475673($_smarty_tpl) {?><!DOCTYPE html>
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