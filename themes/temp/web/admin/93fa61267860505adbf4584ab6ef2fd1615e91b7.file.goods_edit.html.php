<?php /* Smarty version Smarty-3.1.15, created on 2015-10-09 09:42:30
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/goods/goods_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:87739977556171b86ef6a68-54994677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93fa61267860505adbf4584ab6ef2fd1615e91b7' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/goods/goods_edit.html',
      1 => 1422344722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87739977556171b86ef6a68-54994677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goods' => 0,
    'app_http_url' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56171b871659c5_38314136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56171b871659c5_38314136')) {function content_56171b871659c5_38314136($_smarty_tpl) {?><!DOCTYPE html>
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