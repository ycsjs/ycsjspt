<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:19:57
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/goods/goods_list.html" */ ?>
<?php /*%%SmartyHeaderCode:167342976255ffa18d071206-85024113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b148f687d7111a7740c6afb16c4111788106ab4' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/goods/goods_list.html',
      1 => 1422342084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167342976255ffa18d071206-85024113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'goods_list' => 0,
    'goods' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa18d111e47_59825359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa18d111e47_59825359')) {function content_55ffa18d111e47_59825359($_smarty_tpl) {?><!DOCTYPE html>
Goods/AddGoods">
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
?>
</td>
</td>
</td>
</td>
Goods/EditGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
Goods/PictureGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><span class="label label-success">图片</span></a>
Goods/ViewGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><span class="label label-info">查看</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['goods']->value['Valid'];?>
" ><span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['goods']->value['Valid']==0) {?>恢复<?php } else { ?>删除<?php }?></span></a>

"/>
"/>