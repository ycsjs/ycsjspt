<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:19:03
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/goods_base/category_list.html" */ ?>
<?php /*%%SmartyHeaderCode:145403107555ffa157e6db85-35413878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f4fcd22e97c63d76080be0f7c980901672ddc10' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/goods_base/category_list.html',
      1 => 1422328182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145403107555ffa157e6db85-35413878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'category_list' => 0,
    'category' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa157eee1d6_97521886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa157eee1d6_97521886')) {function content_55ffa157eee1d6_97521886($_smarty_tpl) {?><!DOCTYPE html>
GoodsBase/AddGoodsCategory">
 $_from = $_smarty_tpl->tpl_vars['category_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
</td>
</td>
GoodsBase/EditGoodsCategory?category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['category']->value['Valid'];?>
" > <span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['category']->value['Valid']==0) {?>禁用<?php } else { ?>启用<?php }?></span></a>

"/>
"/>