<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 14:38:56
         compiled from "/data/home/byu17691/htdocs/themes/web/itravel/index.html" */ ?>
<?php /*%%SmartyHeaderCode:52465702855ffa600a8a893-82966618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b9d5408e6cfe94b9f5de5cb3fb5971d61a7d2f' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/itravel/index.html',
      1 => 1420688386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52465702855ffa600a8a893-82966618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_resource_css_url' => 0,
    'http_resource_js_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa600ad0219_99194199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa600ad0219_99194199')) {function content_55ffa600ad0219_99194199($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>尤物首页</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_resource_css_url']->value;?>
base.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_resource_css_url']->value;?>
index.css"/>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("../common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

页面内容
<?php echo $_smarty_tpl->getSubTemplate ("../common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['http_resource_js_url']->value;?>
jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['http_resource_js_url']->value;?>
jquery.KinSlideshow.min.js"></script>
</body>
</html>
<?php }} ?>
