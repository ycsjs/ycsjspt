<?php /* Smarty version Smarty-3.1.15, created on 2015-01-11 17:27:32
         compiled from "D:\wamp\www\iyouwu\themes\web\admin\cattraction\cattraction_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1272754b24204c71cf4-25195343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d3b66a9c3976d355653d95e22ed457a86db9d76' => 
    array (
      0 => 'D:\\wamp\\www\\iyouwu\\themes\\web\\admin\\cattraction\\cattraction_edit.html',
      1 => 1420968228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1272754b24204c71cf4-25195343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cattraction' => 0,
    'app_http_url' => 0,
    'theme' => 0,
    'save_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b24205253ff1_91617616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b24205253ff1_91617616')) {function content_54b24205253ff1_91617616($_smarty_tpl) {?><!DOCTYPE html>
景点信息</div>
详细信息：
Cattraction/ListCattraction"><button class="btn black" style="float: right">景点列表<i class="m-icon-swapright m-icon-white"></i></button></a>
Cattraction/ViewCattraction?cattraction_id=<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['ID'];?>
"><button class="btn blue" style="float: right">查看景点<i class="m-icon-swapright m-icon-white"></i></button></a>
Cattraction/PictureCattraction?cattraction_id=<?php echo $_smarty_tpl->tpl_vars['cattraction']->value['ID'];?>
"><button class="btn purple" style="float: right">图片管理<i class="m-icon-swapright m-icon-white"></i></button></a>
Cattraction/EditCattraction" method="post"  onSubmit="return chkinput(this)">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
"/>
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
" class="m-wrap span12" placeholder="">
</textarea>
</textarea>
</textarea>
</textarea>
</textarea>
</textarea>
"/>
" />
"/>