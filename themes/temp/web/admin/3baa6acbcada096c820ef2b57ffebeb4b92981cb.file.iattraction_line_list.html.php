<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:17:14
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/iattraction_line/iattraction_line_list.html" */ ?>
<?php /*%%SmartyHeaderCode:82337815055ffa0ea3d2763-11752079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3baa6acbcada096c820ef2b57ffebeb4b92981cb' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/iattraction_line/iattraction_line_list.html',
      1 => 1420967792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82337815055ffa0ea3d2763-11752079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'iattraction_line_list' => 0,
    'iattraction_line' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa0ea465c79_80253749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa0ea465c79_80253749')) {function content_55ffa0ea465c79_80253749($_smarty_tpl) {?><!DOCTYPE html>
IattractionLine/AddIattractionLine">
 $_from = $_smarty_tpl->tpl_vars['iattraction_line_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iattraction_line']->key => $_smarty_tpl->tpl_vars['iattraction_line']->value) {
$_smarty_tpl->tpl_vars['iattraction_line']->_loop = true;
?>
</td>
</td>
</td>
</td>
</td>
IattractionLine/EditIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
IattractionLine/PictureIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
"><span class="label label-success">图片</span></a>
IattractionLine/ViewIattractionLine?iattraction_line_id=<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['ID'];?>
"><span class="label label-info">查看</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['iattraction_line']->value['Valid'];?>
" ><span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['iattraction_line']->value['Valid']==0) {?>恢复<?php } else { ?>删除<?php }?></span></a>

"/>
"/>