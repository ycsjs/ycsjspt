<?php /* Smarty version Smarty-3.1.15, created on 2016-01-02 00:57:19
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/iattraction/iattraction_picture.html" */ ?>
<?php /*%%SmartyHeaderCode:5865741985686afef7ce1a6-30150718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47b775ef5c21823da21de6e25aa4b9fcad0f4ae9' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/iattraction/iattraction_picture.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5865741985686afef7ce1a6-30150718',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iattraction' => 0,
    'app_http_url' => 0,
    'iattraction_picture' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5686afef861e79_39861135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5686afef861e79_39861135')) {function content_5686afef861e79_39861135($_smarty_tpl) {?><!DOCTYPE html>
景点图片管理</div>
Iattraction/ListIattraction"><button class="btn black" style="float: right">景点列表<i class="m-icon-swapright m-icon-white"></i></button></a>
Iattraction/ViewIattraction?iattraction_id=<?php echo $_smarty_tpl->tpl_vars['iattraction']->value['ID'];?>
"><button class="btn blue" style="float: right">查看景点<i class="m-icon-swapright m-icon-white"></i></button></a>
Iattraction/EditIattraction?iattraction_id=<?php echo $_smarty_tpl->tpl_vars['iattraction']->value['ID'];?>
"><button class="btn purple" style="float: right">编辑景点<i class="m-icon-swapright m-icon-white"></i></button></a>
Iattraction/PictureIattraction" method="post" enctype="multipart/form-data">
 $_from = $_smarty_tpl->tpl_vars['iattraction_picture']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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