<?php /* Smarty version Smarty-3.1.15, created on 2016-01-02 00:52:28
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/goods_order/goods_order_list.html" */ ?>
<?php /*%%SmartyHeaderCode:18941593825686aeccd888c9-04927659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef3ceb8efde65db472ff88f3fbf16c08dc64a47e' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/goods_order/goods_order_list.html',
      1 => 1422760558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18941593825686aeccd888c9-04927659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
    'goods_order_list' => 0,
    'goods_order' => 0,
    'page' => 0,
    'save_sign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5686aecce30b78_46851840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5686aecce30b78_46851840')) {function content_5686aecce30b78_46851840($_smarty_tpl) {?><!DOCTYPE html>
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