<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 16:01:21
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/iattraction_line/iattraction_line_picture.html" */ ?>
<?php /*%%SmartyHeaderCode:68674611055ffb9515c9b17-07877583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6c998721739d7469816d8e6c47cc2ff76fb59ee' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/iattraction_line/iattraction_line_picture.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68674611055ffb9515c9b17-07877583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iattraction_line' => 0,
    'app_http_url' => 0,
    'iattraction_line_picture' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffb95164b2b0_07487532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffb95164b2b0_07487532')) {function content_55ffb95164b2b0_07487532($_smarty_tpl) {?><!DOCTYPE html>
线路图片管理</div>
IattractionLine/ListIattractionLine"><button class="btn black" style="float: right">线路列表<i class="m-icon-swapright m-icon-white"></i></button></a>
IattractionLine/ViewIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
"><button class="btn blue" style="float: right">查看线路<i class="m-icon-swapright m-icon-white"></i></button></a>
IattractionLine/EditIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
"><button class="btn purple" style="float: right">编辑线路<i class="m-icon-swapright m-icon-white"></i></button></a>
IattractionLine/PictureIattractionLine" method="post" enctype="multipart/form-data">
 $_from = $_smarty_tpl->tpl_vars['iattraction_line_picture']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['picture']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->_loop = true;
 $_smarty_tpl->tpl_vars['picture']->index++;
 $_smarty_tpl->tpl_vars['picture']->first = $_smarty_tpl->tpl_vars['picture']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['first'] = $_smarty_tpl->tpl_vars['picture']->first;
?>
" href="javascript:;">
<?php echo $_smarty_tpl->tpl_vars['picture']->value['PictureSrc'];?>
" alt="Photo" />
" class="icon-remove delete_pic"></i></a>
"/>
"/>