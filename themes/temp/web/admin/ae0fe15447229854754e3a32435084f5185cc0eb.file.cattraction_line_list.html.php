<?php /* Smarty version Smarty-3.1.15, created on 2015-01-11 17:33:04
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\cattraction_line\cattraction_line_list.html" */ ?>
<?php /*%%SmartyHeaderCode:423754b243500d69b4-66815959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae0fe15447229854754e3a32435084f5185cc0eb' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\cattraction_line\\cattraction_line_list.html',
      1 => 1420968780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '423754b243500d69b4-66815959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'cattraction_line_list' => 0,
    'cattraction_line' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b243502268e4_87132455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b243502268e4_87132455')) {function content_54b243502268e4_87132455($_smarty_tpl) {?><!DOCTYPE html>
CattractionLine/AddCattractionLine">
 $_from = $_smarty_tpl->tpl_vars['cattraction_line_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cattraction_line']->key => $_smarty_tpl->tpl_vars['cattraction_line']->value) {
$_smarty_tpl->tpl_vars['cattraction_line']->_loop = true;
?>
</td>
</td>
</td>
</td>
</td>
CattractionLine/EditCattractionLine?cattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
CattractionLine/PictureCattractionLine?cattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ID'];?>
"><span class="label label-success">图片</span></a>
CattractionLine/ViewCattractionLine?cattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['ID'];?>
"><span class="label label-info">查看</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['cattraction_line']->value['Valid'];?>
" ><span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['cattraction_line']->value['Valid']==0) {?>恢复<?php } else { ?>删除<?php }?></span></a>

"/>
"/>