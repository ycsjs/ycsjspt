<?php /* Smarty version Smarty-3.1.15, created on 2015-01-27 15:45:28
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods\goods_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:3003254c7391e507ac0-71338678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da30d9d16a0402af3d676da569fae184fed4fc91' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods\\goods_edit.html',
      1 => 1422344723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3003254c7391e507ac0-71338678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c7391e86ed14_11655867',
  'variables' => 
  array (
    'goods' => 0,
    'app_http_url' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c7391e86ed14_11655867')) {function content_54c7391e86ed14_11655867($_smarty_tpl) {?><!DOCTYPE html>
商品</div>
详细信息：
Goods/ListGoods"><button class="btn black" style="float: right">商品列表<i class="m-icon-swapright m-icon-white"></i></button></a>
Goods/ViewGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><button class="btn blue" style="float: right">查看商品<i class="m-icon-swapright m-icon-white"></i></button></a>
Goods/PictureGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><button class="btn purple" style="float: right">图片管理<i class="m-icon-swapright m-icon-white"></i></button></a>
Goods/EditGoods" method="post"  onSubmit="return chkinput(this)">
" class="m-wrap span12" />
" class="m-wrap span12" />
" class="m-wrap span12" />
" class="m-wrap span12" />
" class="m-wrap span12" />
" class="m-wrap span12" />
" class="m-wrap span12" />
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" />
" class="m-wrap span12" />
</textarea>
</textarea>
</textarea>
"/>
"/>
"/>