<?php /* Smarty version Smarty-3.1.15, created on 2015-01-28 00:01:20
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_brand\goods_brand_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1969354c7a53f007600-04448756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57e3eb847154c2e3bccf4fb3709a19762afc87d0' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_brand\\goods_brand_list.html',
      1 => 1422374476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1969354c7a53f007600-04448756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c7a53f114ec1_34671740',
  'variables' => 
  array (
    'app_http_url' => 0,
    'goods_brand_list' => 0,
    'goods_brand' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c7a53f114ec1_34671740')) {function content_54c7a53f114ec1_34671740($_smarty_tpl) {?><!DOCTYPE html>
GoodsBrand/AddGoodsBrand">
 $_from = $_smarty_tpl->tpl_vars['goods_brand_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods_brand']->key => $_smarty_tpl->tpl_vars['goods_brand']->value) {
$_smarty_tpl->tpl_vars['goods_brand']->_loop = true;
?>
</td>
</td>
GoodsBrand/EditGoodsBrand?goods_brand_id=<?php echo $_smarty_tpl->tpl_vars['goods_brand']->value['ID'];?>
"><span class="label label-danger">编辑</span></a>
" valid="<?php echo $_smarty_tpl->tpl_vars['goods_brand']->value['Valid'];?>
" > <span class="label label-warning"><?php if ($_smarty_tpl->tpl_vars['goods_brand']->value['Valid']==0) {?>禁用<?php } else { ?>启用<?php }?></span></a>
GoodsBrand/ViewGoodsBrand?goods_brand_id=<?php echo $_smarty_tpl->tpl_vars['goods_brand']->value['ID'];?>
"><span class="label label-info">查看</span></a>

"/>
"/>