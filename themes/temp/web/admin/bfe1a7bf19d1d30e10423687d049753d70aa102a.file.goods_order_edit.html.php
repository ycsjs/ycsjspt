<?php /* Smarty version Smarty-3.1.15, created on 2016-01-02 02:01:45
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/goods_order/goods_order_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:13485438385686bf095662f0-96053682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe1a7bf19d1d30e10423687d049753d70aa102a' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/goods_order/goods_order_edit.html',
      1 => 1422713666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13485438385686bf095662f0-96053682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'goods_order' => 0,
    'order_goods' => 0,
    'goods' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5686bf0975e894_06428051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5686bf0975e894_06428051')) {function content_5686bf0975e894_06428051($_smarty_tpl) {?><!DOCTYPE html>
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