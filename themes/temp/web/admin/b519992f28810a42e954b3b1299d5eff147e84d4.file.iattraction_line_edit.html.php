<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 15:59:38
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/iattraction_line/iattraction_line_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:122180511555ffb8eaa67648-20390421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b519992f28810a42e954b3b1299d5eff147e84d4' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/iattraction_line/iattraction_line_edit.html',
      1 => 1420967790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122180511555ffb8eaa67648-20390421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iattraction_line' => 0,
    'app_http_url' => 0,
    'schedule' => 0,
    'theme' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffb8eac6bd69_65091868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffb8eac6bd69_65091868')) {function content_55ffb8eac6bd69_65091868($_smarty_tpl) {?><!DOCTYPE html>
线路信息</div>
详细信息：
IattractionLine/ListIattractionLine"><button class="btn black" style="float: right">线路列表<i class="m-icon-swapright m-icon-white"></i></button></a>
IattractionLine/ViewIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
"><button class="btn blue" style="float: right">查看线路<i class="m-icon-swapright m-icon-white"></i></button></a>
IattractionLine/PictureIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
"><button class="btn purple" style="float: right">图片管理<i class="m-icon-swapright m-icon-white"></i></button></a>
IattractionLine/EditIattractionLine" method="post" onSubmit="return chkinput(this)">
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