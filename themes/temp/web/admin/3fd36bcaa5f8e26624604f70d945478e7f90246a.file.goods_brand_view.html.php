<?php /* Smarty version Smarty-3.1.15, created on 2015-01-28 00:16:22
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods_brand\goods_brand_view.html" */ ?>
<?php /*%%SmartyHeaderCode:1351054c7b6d86575f6-72525276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fd36bcaa5f8e26624604f70d945478e7f90246a' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods_brand\\goods_brand_view.html',
      1 => 1422375377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1351054c7b6d86575f6-72525276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c7b6d87f18d9_80371649',
  'variables' => 
  array (
    'goods_brand' => 0,
    'app_http_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c7b6d87f18d9_80371649')) {function content_54c7b6d87f18d9_80371649($_smarty_tpl) {?><!DOCTYPE html>
品牌信息查看</div>
基本信息：
GoodsBrand/ListGoodsBrand"><button class="btn green" style="float: right">返回列表</button></a>
GoodsBrand/EditGoodsBrand?goods_brand_id=<?php echo $_smarty_tpl->tpl_vars['goods_brand']->value['ID'];?>
"><button class="btn red" style="float: right"><i class="icon-pencil"></i>编辑品牌</button></a>
</span>
</span>
</span>
品牌图标：</h3>
<?php echo $_smarty_tpl->tpl_vars['goods_brand']->value['Logo'];?>
" width="180" height="200">
GoodsBrand/EditGoodsBrand?goods_brand_id=<?php echo $_smarty_tpl->tpl_vars['goods_brand']->value['ID'];?>
"><button class="btn red"><i class="icon-pencil"></i>编辑品牌</button></a>
GoodsBrand/ListGoodsBrand"><button class="btn green">返回列表</button></a>