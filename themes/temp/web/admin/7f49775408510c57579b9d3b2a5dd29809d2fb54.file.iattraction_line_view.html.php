<?php /* Smarty version Smarty-3.1.15, created on 2015-01-11 17:06:32
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\iattraction_line\iattraction_line_view.html" */ ?>
<?php /*%%SmartyHeaderCode:1970954b2394c29d2f1-68958410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f49775408510c57579b9d3b2a5dd29809d2fb54' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\iattraction_line\\iattraction_line_view.html',
      1 => 1420967191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1970954b2394c29d2f1-68958410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b2394c890b26_28956445',
  'variables' => 
  array (
    'iattraction_line' => 0,
    'app_http_url' => 0,
    'iattraction' => 0,
    'schedule' => 0,
    'theme' => 0,
    'iattraction_line_picture' => 0,
    'http_resource_url' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b2394c890b26_28956445')) {function content_54b2394c890b26_28956445($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\wamp\\www\\iyouwu\\system\\libs\\smarty\\plugins\\modifier.replace.php';
?><!DOCTYPE html>
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