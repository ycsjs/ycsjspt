<?php /* Smarty version Smarty-3.1.15, created on 2015-09-22 10:16:10
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/cattraction_line/cattraction_line_picture.html" */ ?>
<?php /*%%SmartyHeaderCode:11159097975600b9eae7b538-94099348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ba60c58dafbdfbbbe0b6361c0b0d7ab0ce2cb0c' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/cattraction_line/cattraction_line_picture.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11159097975600b9eae7b538-94099348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cattraction_line' => 0,
    'app_http_url' => 0,
    'cattraction_line_picture' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5600b9eb028270_05721588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5600b9eb028270_05721588')) {function content_5600b9eb028270_05721588($_smarty_tpl) {?><!DOCTYPE html>
线路图片管理</div>
CattractionLine/ListCattractionLine"><button class="btn black" style="float: right">线路列表<i class="m-icon-swapright m-icon-white"></i></button></a>
CattractionLine/ViewCattractionLine?cattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ID'];?>
"><button class="btn blue" style="float: right">查看线路<i class="m-icon-swapright m-icon-white"></i></button></a>
CattractionLine/EditCattractionLine?cattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ID'];?>
"><button class="btn purple" style="float: right">编辑线路<i class="m-icon-swapright m-icon-white"></i></button></a>
CattractionLine/PictureCattractionLine" method="post" enctype="multipart/form-data">
 $_from = $_smarty_tpl->tpl_vars['cattraction_line_picture']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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