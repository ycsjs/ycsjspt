<?php /* Smarty version Smarty-3.1.15, created on 2015-02-02 18:27:22
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\goods\goods_view.html" */ ?>
<?php /*%%SmartyHeaderCode:1490754c74548594bd4-35583887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d823967902fd1700a960bc0970c3329cd6fd292' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\goods\\goods_view.html',
      1 => 1422716293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1490754c74548594bd4-35583887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c74548b88431_62532427',
  'variables' => 
  array (
    'goods' => 0,
    'app_http_url' => 0,
    'goods_picture' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c74548b88431_62532427')) {function content_54c74548b88431_62532427($_smarty_tpl) {?><!DOCTYPE html>
商品信息查看</div>
基本信息：
Goods/ListGoods"><button class="btn green" style="float: right">返回列表</button></a>
Goods/PictureGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><button class="btn blue" style="float: right"><i class="icon-pencil"></i>编辑图片</button></a>
Goods/EditGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><button class="btn red" style="float: right"><i class="icon-pencil"></i>编辑商品</button></a>
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
</span>
</span>
</span>
</span>
图片信息：</h3>
 $_from = $_smarty_tpl->tpl_vars['goods_picture']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['picture']->value['PictureSrc'];?>
" width="180" height="200">
Goods/EditGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><button class="btn red"><i class="icon-pencil"></i>编辑商品</button></a>
Goods/PictureGoods?goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['ID'];?>
"><button class="btn blue"><i class="icon-pencil"></i>编辑图片</button></a>
Goods/ListGoods"><button class="btn green">返回列表</button></a>