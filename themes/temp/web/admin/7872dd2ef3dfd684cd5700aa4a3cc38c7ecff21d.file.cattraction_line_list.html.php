<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:18:02
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/cattraction_line/cattraction_line_list.html" */ ?>
<?php /*%%SmartyHeaderCode:116362391655ffa11a576432-39196471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7872dd2ef3dfd684cd5700aa4a3cc38c7ecff21d' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/cattraction_line/cattraction_line_list.html',
      1 => 1420968780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116362391655ffa11a576432-39196471',
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
  'unifunc' => 'content_55ffa11a60ac34_28669432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa11a60ac34_28669432')) {function content_55ffa11a60ac34_28669432($_smarty_tpl) {?><!DOCTYPE html>
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