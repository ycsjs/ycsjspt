<?php /* Smarty version Smarty-3.1.15, created on 2015-01-30 17:00:40
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\cattraction\cattraction_view.html" */ ?>
<?php /*%%SmartyHeaderCode:1646554b241f15ba382-72447227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00f17bb790729c5de85830b150e056b990abecf8' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\cattraction\\cattraction_view.html',
      1 => 1422367194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1646554b241f15ba382-72447227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b241f1b1d270_28372960',
  'variables' => 
  array (
    'cattraction' => 0,
    'app_http_url' => 0,
    'city' => 0,
    'theme' => 0,
    'cattraction_picture' => 0,
    'picture' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b241f1b1d270_28372960')) {function content_54b241f1b1d270_28372960($_smarty_tpl) {?><!DOCTYPE html>
景点信息查看</div>
基本信息：
Cattraction/ListCattraction"><button class="btn green" style="float: right">返回列表</button></a>
Cattraction/PictureCattraction?cattraction_id=<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['ID'];?>
"><button class="btn blue" style="float: right"><i class="icon-pencil"></i>编辑图片</button></a>
Cattraction/EditCattraction?cattraction_id=<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['ID'];?>
"><button class="btn red" style="float: right"><i class="icon-pencil"></i>编辑景点</button></a>
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
 $_from = $_smarty_tpl->tpl_vars['cattraction_picture']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['picture']->key => $_smarty_tpl->tpl_vars['picture']->value) {
$_smarty_tpl->tpl_vars['picture']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['picture']->value['PictureSrc'];?>
" width="180" height="200">
Cattraction/EditCattraction?cattraction_id=<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['ID'];?>
"><button class="btn red"><i class="icon-pencil"></i>编辑景点</button></a>
Cattraction/PictureCattraction?cattraction_id=<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['ID'];?>
"><button class="btn blue"><i class="icon-pencil"></i>编辑图片</button></a>
Cattraction/ListCattraction"><button class="btn green">返回列表</button></a>