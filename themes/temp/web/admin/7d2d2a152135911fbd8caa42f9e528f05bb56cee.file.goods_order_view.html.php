<?php /* Smarty version Smarty-3.1.15, created on 2015-01-31 23:17:42
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_order\goods_order_view.html" */ ?>
<?php /*%%SmartyHeaderCode:1903654cce3742c9cf4-72919756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d2d2a152135911fbd8caa42f9e528f05bb56cee' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_order\\goods_order_view.html',
      1 => 1422717460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1903654cce3742c9cf4-72919756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54cce3744bdd71_53012488',
  'variables' => 
  array (
    'app_http_url' => 0,
    'goods_order' => 0,
    'order_goods' => 0,
    'goods' => 0,
    'goods_order_logs' => 0,
    'order_logs' => 0,
    'admin_account' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cce3744bdd71_53012488')) {function content_54cce3744bdd71_53012488($_smarty_tpl) {?><!DOCTYPE html>
GoodsOrder/ListGoodsOrder"><button class="btn black" style="float: right">返回列表</button></a>
GoodsOrder/EditGoodsOrder?goods_order_id=<?php echo $_smarty_tpl->tpl_vars['goods_order']->value['ID'];?>
"><button class="btn red" style="float: right"><i class="icon-pencil"></i>处理订单</button></a>
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
 $_from = $_smarty_tpl->tpl_vars['goods_order_logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order_logs']->key => $_smarty_tpl->tpl_vars['order_logs']->value) {
$_smarty_tpl->tpl_vars['order_logs']->_loop = true;
?>
</td>
</td>
</td>
</td>
</td>
GoodsOrder/EditGoodsOrder?goods_order_id=<?php echo $_smarty_tpl->tpl_vars['goods_order']->value['ID'];?>
"><button class="btn red"><i class="icon-pencil"></i>编辑订单</button></a>
GoodsOrder/ListGoodsOrder"><button class="btn black">返回列表</button></a>