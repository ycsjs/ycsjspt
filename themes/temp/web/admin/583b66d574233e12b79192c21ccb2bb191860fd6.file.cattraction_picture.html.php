<?php /* Smarty version Smarty-3.1.15, created on 2015-01-30 17:00:49
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\cattraction\cattraction_picture.html" */ ?>
<?php /*%%SmartyHeaderCode:1656654b241fb4e3c26-96495531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '583b66d574233e12b79192c21ccb2bb191860fd6' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\cattraction\\cattraction_picture.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1656654b241fb4e3c26-96495531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b241fb61c446_66860105',
  'variables' => 
  array (
    'cattraction' => 0,
    'app_http_url' => 0,
    'cattraction_picture' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b241fb61c446_66860105')) {function content_54b241fb61c446_66860105($_smarty_tpl) {?><!DOCTYPE html>
景点图片管理</div>
Cattraction/ListCattraction"><button class="btn black" style="float: right">景点列表<i class="m-icon-swapright m-icon-white"></i></button></a>
Cattraction/ViewCattraction?cattraction_id=<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['ID'];?>
"><button class="btn blue" style="float: right">查看景点<i class="m-icon-swapright m-icon-white"></i></button></a>
Cattraction/EditCattraction?cattraction_id=<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['ID'];?>
"><button class="btn purple" style="float: right">编辑景点<i class="m-icon-swapright m-icon-white"></i></button></a>
Cattraction/PictureCattraction" method="post" enctype="multipart/form-data">
 $_from = $_smarty_tpl->tpl_vars['cattraction_picture']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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