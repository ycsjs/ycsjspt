<?php /* Smarty version Smarty-3.1.15, created on 2015-01-27 22:00:55
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\travel_supplier\travel_supplier_view.html" */ ?>
<?php /*%%SmartyHeaderCode:900954c78a620e89d3-44771282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72046454e38050ffdb4a592b6e406e32630eb916' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\travel_supplier\\travel_supplier_view.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '900954c78a620e89d3-44771282',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c78a622b5941_21408906',
  'variables' => 
  array (
    'travel_supplier' => 0,
    'app_http_url' => 0,
    'travel_supplier_file' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c78a622b5941_21408906')) {function content_54c78a622b5941_21408906($_smarty_tpl) {?><!DOCTYPE html>
旅游供应商信息查看</div>
基本信息：
TravelSupplier/ListTravelSupplier"><button class="btn green" style="float: right">返回列表</button></a>
TravelSupplier/FileTravelSupplier?travel_supplier_id=<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['ID'];?>
"><button class="btn blue" style="float: right"><i class="icon-pencil"></i>编辑文件</button></a>
TravelSupplier/EditTravelSupplier?travel_supplier_id=<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['ID'];?>
"><button class="btn red" style="float: right"><i class="icon-pencil"></i>编辑旅游供应商</button></a>
</span>
</span>
-<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['EndDate'];?>
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
 $_from = $_smarty_tpl->tpl_vars['travel_supplier_file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['file']->value['FileSrc'];?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['FileTitle'];?>
</a><br/>
TravelSupplier/EditTravelSupplier?travel_supplier_id=<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['ID'];?>
"><button class="btn red"><i class="icon-pencil"></i>编辑旅游供应商</button></a>
TravelSupplier/FileTravelSupplier?travel_supplier_id=<?php echo $_smarty_tpl->tpl_vars['travel_supplier']->value['ID'];?>
"><button class="btn blue"><i class="icon-pencil"></i>编辑文件</button></a>
TravelSupplier/ListTravelSupplier"><button class="btn green">返回列表</button></a>