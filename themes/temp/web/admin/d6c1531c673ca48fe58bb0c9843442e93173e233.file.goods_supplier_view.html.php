<?php /* Smarty version Smarty-3.1.15, created on 2015-01-27 22:02:21
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_supplier\goods_supplier_view.html" */ ?>
<?php /*%%SmartyHeaderCode:3129754c78047234ca0-13508717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6c1531c673ca48fe58bb0c9843442e93173e233' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_supplier\\goods_supplier_view.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3129754c78047234ca0-13508717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c7804748a7b8_97395630',
  'variables' => 
  array (
    'goods_supplier' => 0,
    'app_http_url' => 0,
    'goods_supplier_file' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c7804748a7b8_97395630')) {function content_54c7804748a7b8_97395630($_smarty_tpl) {?><!DOCTYPE html>
商品供应商信息查看</div>
基本信息：
GoodsSupplier/ListGoodsSupplier"><button class="btn green" style="float: right">返回列表</button></a>
GoodsSupplier/FileGoodsSupplier?goods_supplier_id=<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['ID'];?>
"><button class="btn blue" style="float: right"><i class="icon-pencil"></i>编辑文件</button></a>
GoodsSupplier/EditGoodsSupplier?goods_supplier_id=<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['ID'];?>
"><button class="btn red" style="float: right"><i class="icon-pencil"></i>编辑商品供应商</button></a>
</span>
</span>
-<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['EndDate'];?>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
</span>
文件信息：</h3>
 $_from = $_smarty_tpl->tpl_vars['goods_supplier_file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['file']->value['FileSrc'];?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['FileTitle'];?>
</a><br/>
GoodsSupplier/EditGoodsSupplier?goods_supplier_id=<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['ID'];?>
"><button class="btn red"><i class="icon-pencil"></i>编辑商品供应商</button></a>
GoodsSupplier/FileGoodsSupplier?goods_supplier_id=<?php echo $_smarty_tpl->tpl_vars['goods_supplier']->value['ID'];?>
"><button class="btn blue"><i class="icon-pencil"></i>编辑文件</button></a>
GoodsSupplier/ListGoodsSupplier"><button class="btn green">返回列表</button></a>