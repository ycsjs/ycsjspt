<?php /* Smarty version Smarty-3.1.15, created on 2016-01-02 02:02:36
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/goods_order/goods_order_view.html" */ ?>
<?php /*%%SmartyHeaderCode:8814322265686bf3cb427e0-61975457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a69389fc8945158cae9dd17d63a36384a4daba5f' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/goods_order/goods_order_view.html',
      1 => 1422717460,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8814322265686bf3cb427e0-61975457',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5686bf3ccd28e3_57456123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5686bf3ccd28e3_57456123')) {function content_5686bf3ccd28e3_57456123($_smarty_tpl) {?><!DOCTYPE html>
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