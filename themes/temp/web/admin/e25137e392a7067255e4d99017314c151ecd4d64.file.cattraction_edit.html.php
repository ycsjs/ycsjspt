<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:19:38
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/cattraction/cattraction_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:164224221455ffa17a696e94-43164343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e25137e392a7067255e4d99017314c151ecd4d64' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/cattraction/cattraction_edit.html',
      1 => 1420968228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164224221455ffa17a696e94-43164343',
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
  'unifunc' => 'content_55ffa17a88a1c3_05100977',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa17a88a1c3_05100977')) {function content_55ffa17a88a1c3_05100977($_smarty_tpl) {?><!DOCTYPE html>
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