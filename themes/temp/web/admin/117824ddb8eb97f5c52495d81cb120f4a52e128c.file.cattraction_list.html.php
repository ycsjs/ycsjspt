<?php /* Smarty version Smarty-3.1.15, created on 2015-01-11 17:23:53
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\cattraction\cattraction_list.html" */ ?>
<?php /*%%SmartyHeaderCode:749254b240ab4204a1-97590635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '117824ddb8eb97f5c52495d81cb120f4a52e128c' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\cattraction\\cattraction_list.html',
      1 => 1420968228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '749254b240ab4204a1-97590635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b240ab587ad1_79405259',
  'variables' => 
  array (
    'app_http_url' => 0,
    'cattraction_list' => 0,
    'cattraction' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b240ab587ad1_79405259')) {function content_54b240ab587ad1_79405259($_smarty_tpl) {?><!DOCTYPE html>
Cattraction/AddCattraction">
 $_from = $_smarty_tpl->tpl_vars['cattraction_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cattraction']->key => $_smarty_tpl->tpl_vars['cattraction']->value) {
$_smarty_tpl->tpl_vars['cattraction']->_loop = true;
?>
</td>
</td>
</td>
</td>
</td>
Cattraction/EditCattraction?cattraction_id=<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
Cattraction/PictureCattraction?cattraction_id=<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['ID'];?>
"><span class="label label-success">图片</span></a>
Cattraction/ViewCattraction?cattraction_id=<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['ID'];?>
"><span class="label label-info">查看</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['Valid'];?>
" ><span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['cattraction']->value['Valid']==0) {?>恢复<?php } else { ?>删除<?php }?></span></a>

"/>
"/>