<?php /* Smarty version Smarty-3.1.15, created on 2015-01-27 22:01:23
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\cattraction_line\cattraction_line_view.html" */ ?>
<?php /*%%SmartyHeaderCode:1615654b24463ca4695-95455882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b71833b5d704bd3a489aafe4e7c28151c36c0e30' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\cattraction_line\\cattraction_line_view.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1615654b24463ca4695-95455882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b24464322d85_20034507',
  'variables' => 
  array (
    'cattraction_line' => 0,
    'app_http_url' => 0,
    'cattraction' => 0,
    'schedule' => 0,
    'theme' => 0,
    'cattraction_line_picture' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b24464322d85_20034507')) {function content_54b24464322d85_20034507($_smarty_tpl) {?><!DOCTYPE html>
线路信息查看</div>
基本信息：
CattractionLine/ListCattractionLine">
CattractionLine/PictureCattractionLine?cattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ID'];?>
">
CattractionLine/EditCattractionLine?cattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ID'];?>
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
 $_from = $_smarty_tpl->tpl_vars['cattraction_line_picture']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['picture']->value['PictureSrc'];?>
" width="180" height="200">
CattractionLine/ListCattractionLine">
CattractionLine/PictureCattractionLine?cattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ID'];?>
">
CattractionLine/EditCattractionLine?cattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ID'];?>
">