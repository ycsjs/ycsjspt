<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:17:18
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/iattraction_line/iattraction_line_view.html" */ ?>
<?php /*%%SmartyHeaderCode:201290716655ffa0ee5bc8b5-77903572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c0403d536af32badacb9108e3623c4c422ad3b9' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/iattraction_line/iattraction_line_view.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201290716655ffa0ee5bc8b5-77903572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iattraction_line' => 0,
    'app_http_url' => 0,
    'iattraction' => 0,
    'schedule' => 0,
    'theme' => 0,
    'iattraction_line_picture' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa0ee7ed431_41645067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa0ee7ed431_41645067')) {function content_55ffa0ee7ed431_41645067($_smarty_tpl) {?><!DOCTYPE html>
线路信息查看</div>
基本信息：
IattractionLine/ListIattractionLine">
IattractionLine/PictureIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
">
IattractionLine/EditIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
">
</span>
</span>
</span>
</span>
</span>
</span>
</span>



</span>
</span>
</span>
</span>
</span>
图片信息：</h3>
 $_from = $_smarty_tpl->tpl_vars['iattraction_line_picture']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['picture']->value['PictureSrc'];?>
" width="180" height="200">
IattractionLine/ListIattractionLine">
IattractionLine/PictureIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
">
IattractionLine/EditIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
">