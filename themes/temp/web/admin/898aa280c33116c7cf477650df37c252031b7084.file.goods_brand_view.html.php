<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:26:13
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/goods_brand/goods_brand_view.html" */ ?>
<?php /*%%SmartyHeaderCode:195058998255ffa30593ba34-91633901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '898aa280c33116c7cf477650df37c252031b7084' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/goods_brand/goods_brand_view.html',
      1 => 1422375376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195058998255ffa30593ba34-91633901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods_brand' => 0,
    'app_http_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa3059b8ee3_84258229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa3059b8ee3_84258229')) {function content_55ffa3059b8ee3_84258229($_smarty_tpl) {?><!DOCTYPE html>
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