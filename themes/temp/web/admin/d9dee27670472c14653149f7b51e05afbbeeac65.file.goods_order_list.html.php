<?php /* Smarty version Smarty-3.1.15, created on 2015-02-01 11:16:00
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_order\goods_order_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1079254cca04d0d7ff3-39212440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9dee27670472c14653149f7b51e05afbbeeac65' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_order\\goods_order_list.html',
      1 => 1422760558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1079254cca04d0d7ff3-39212440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54cca04d2498b8_52540972',
  'variables' => 
  array (
    'app_http_url' => 0,
    'goods_order_list' => 0,
    'goods_order' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cca04d2498b8_52540972')) {function content_54cca04d2498b8_52540972($_smarty_tpl) {?><!DOCTYPE html>
GoodsOrder/AddGoodsOrder">
 $_from = $_smarty_tpl->tpl_vars['goods_order_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods_order']->key => $_smarty_tpl->tpl_vars['goods_order']->value) {
$_smarty_tpl->tpl_vars['goods_order']->_loop = true;
?>
</td>
</td>
</td>
</td>
</td>
</td>
</td>
GoodsOrder/EditGoodsOrder?goods_order_id=<?php echo $_smarty_tpl->tpl_vars['goods_order']->value['ID'];?>
"><span class="label label-warning">处理</span></a>
GoodsOrder/ViewGoodsOrder?goods_order_id=<?php echo $_smarty_tpl->tpl_vars['goods_order']->value['ID'];?>
"><span class="label label-info">查看</span></a>

"/>
"/>