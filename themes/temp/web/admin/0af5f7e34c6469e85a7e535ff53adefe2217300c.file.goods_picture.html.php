<?php /* Smarty version Smarty-3.1.15, created on 2016-01-02 02:06:31
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/goods/goods_picture.html" */ ?>
<?php /*%%SmartyHeaderCode:19495249675686c027ef5b76-03260248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af5f7e34c6469e85a7e535ff53adefe2217300c' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/goods/goods_picture.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19495249675686c027ef5b76-03260248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods' => 0,
    'app_http_url' => 0,
    'goods_picture' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5686c02805bf21_19221894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5686c02805bf21_19221894')) {function content_5686c02805bf21_19221894($_smarty_tpl) {?><!DOCTYPE html>
商品图片管理</div>
Goods/ListGoods"><button class="btn black" style="float: right">商品列表<i class="m-icon-swapright m-icon-white"></i></button></a>
Goods/ViewGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><button class="btn blue" style="float: right">查看商品<i class="m-icon-swapright m-icon-white"></i></button></a>
Goods/EditGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><button class="btn purple" style="float: right">编辑商品<i class="m-icon-swapright m-icon-white"></i></button></a>
Goods/PictureGoods" method="post" enctype="multipart/form-data">
 $_from = $_smarty_tpl->tpl_vars['goods_picture']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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