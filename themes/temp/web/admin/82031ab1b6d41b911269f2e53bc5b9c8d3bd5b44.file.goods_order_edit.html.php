<?php /* Smarty version Smarty-3.1.15, created on 2015-01-31 22:14:43
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_order\goods_order_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1510954ccb4df6ef5a4-68358498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82031ab1b6d41b911269f2e53bc5b9c8d3bd5b44' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_order\\goods_order_edit.html',
      1 => 1422713667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1510954ccb4df6ef5a4-68358498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54ccb4dfa5a679_23397244',
  'variables' => 
  array (
    'app_http_url' => 0,
    'goods_order' => 0,
    'order_goods' => 0,
    'goods' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ccb4dfa5a679_23397244')) {function content_54ccb4dfa5a679_23397244($_smarty_tpl) {?><!DOCTYPE html>
GoodsOrder/ListGoodsOrder"><button class="btn black" style="float: right">订单列表<i class="m-icon-swapright m-icon-white"></i></button></a>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
 $_from = $_smarty_tpl->tpl_vars['order_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['Detail']['NameCn'];?>
</a>，<?php echo $_smarty_tpl->tpl_vars['goods']->value['Num'];?>
个，单价¥<?php echo $_smarty_tpl->tpl_vars['goods']->value['UnionPrice'];?>
；
</span>
GoodsOrder/EditGoodsOrder" method="post">
</textarea>
"/>
"/>
"/>