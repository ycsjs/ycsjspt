<?php /* Smarty version Smarty-3.1.15, created on 2015-09-21 13:46:40
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:169436442155ff99c01607f3-33343570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a50154a47d2bb673b2a12dfbcd7336ebe2df5e63' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/index.html',
      1 => 1420780714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169436442155ff99c01607f3-33343570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app_http_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ff99c0191708_79910239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ff99c0191708_79910239')) {function content_55ff99c0191708_79910239($_smarty_tpl) {?><!DOCTYPE html><!--[if IE 8]> <html lang="en" class="ie8"> <![endif]--><!--[if IE 9]> <html lang="en" class="ie9"> <![endif]--><!--[if !IE]><!--> <html lang="en"> <!--<![endif]--><!-- BEGIN HEAD --><head>	<meta charset="utf-8" />	<title>尤物后台管理系统-登录</title>	<meta content="width=device-width, initial-scale=1.0" name="viewport" />	<meta content="" name="description" />	<meta content="" name="author" />	<!-- BEGIN GLOBAL MANDATORY STYLES -->	<link href="../../../statics/resource/common/plugs/metronic/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>	<link href="../../../statics/resource/common/plugs/metronic/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>	<link href="../../../statics/resource/common/plugs/metronic/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>	<link href="../../../statics/resource/common/plugs/metronic/css/style-metro.css" rel="stylesheet" type="text/css"/>	<link href="../../../statics/resource/common/plugs/metronic/css/style.css" rel="stylesheet" type="text/css"/>	<link href="../../../statics/resource/common/plugs/metronic/css/style-responsive.css" rel="stylesheet" type="text/css"/>	<link href="../../../statics/resource/common/plugs/metronic/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>	<link href="../../../statics/resource/common/plugs/metronic/css/uniform.default.css" rel="stylesheet" type="text/css"/>	<!-- END GLOBAL MANDATORY STYLES -->	<!-- BEGIN PAGE LEVEL STYLES -->	<link href="../../../statics/resource/common/plugs/metronic/css/login.css" rel="stylesheet" type="text/css"/>	<!-- END PAGE LEVEL STYLES -->	<link rel="shortcut icon" href="../../../statics/resource/common/plugs/metronic/image/favicon.ico" /></head><!-- END HEAD --><!-- BEGIN BODY --><body class="login">	<!-- BEGIN LOGO -->	<div class="logo">		<img src="../../../statics/resource/common/plugs/metronic/image/logo-big.jpg" alt="" />	</div>	<!-- END LOGO -->	<!-- BEGIN LOGIN -->	<div class="content">		<!-- BEGIN LOGIN FORM -->		<form class="form-vertical login-form" action="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
Index/Login" method="post">			<h3 class="form-title">欢迎使用尤物后台管理系统</h3>			<div class="alert alert-error hide">				<button class="close" data-dismiss="alert"></button>				<span id="msgerror">请输入用户名和密码.</span>			</div>			<div class="control-group">				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->				<label class="control-label visible-ie8 visible-ie9">Username</label>				<div class="controls">					<div class="input-icon left">						<i class="icon-user"></i>						<input class="m-wrap placeholder-no-fix" type="text" placeholder="用户名" name="username"/>					</div>				</div>			</div>			<div class="control-group">				<label class="control-label visible-ie8 visible-ie9">Password</label>				<div class="controls">					<div class="input-icon left">						<i class="icon-lock"></i>						<input class="m-wrap placeholder-no-fix" type="password" placeholder="密码" name="password"/>					</div>				</div>			</div>			<div class="form-actions">				<label class="checkbox">				<input type="checkbox" name="remember" value="1"/> 记住密码				</label>				<button type="submit" class="btn green pull-right">登录 <i class="m-icon-swapright m-icon-white"></i></button>			</div>		</form>		<!-- END LOGIN FORM -->	</div>	<!-- END LOGIN -->	<!-- BEGIN COPYRIGHT -->	<div class="copyright">2015 &copy; 界面-尤物后台管理系统.</div>	<!-- END COPYRIGHT -->	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->	<!-- BEGIN CORE PLUGINS -->	<script src="../../../statics/resource/common/plugs/metronic/js/jquery-1.10.1.min.js" type="text/javascript"></script>	<script src="../../../statics/resource/common/plugs/metronic/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->	<script src="../../../statics/resource/common/plugs/metronic/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>	<script src="../../../statics/resource/common/plugs/metronic/js/bootstrap.min.js" type="text/javascript"></script>	<!--[if lt IE 9]>	<script src="../../../statics/resource/common/plugs/metronic/js/excanvas.min.js"></script>	<script src="../../../statics/resource/common/plugs/metronic/js/respond.min.js"></script>	<![endif]-->	<script src="../../../statics/resource/common/plugs/metronic/js/jquery.slimscroll.min.js" type="text/javascript"></script>	<script src="../../../statics/resource/common/plugs/metronic/js/jquery.blockui.min.js" type="text/javascript"></script>	<script src="../../../statics/resource/common/plugs/metronic/js/jquery.cookie.min.js" type="text/javascript"></script>	<script src="../../../statics/resource/common/plugs/metronic/js/jquery.uniform.min.js" type="text/javascript" ></script>	<!-- END CORE PLUGINS -->	<!-- BEGIN PAGE LEVEL PLUGINS -->	<script src="../../../statics/resource/common/plugs/metronic/js/jquery.validate.min.js" type="text/javascript"></script>	<!-- END PAGE LEVEL PLUGINS -->	<!-- BEGIN PAGE LEVEL SCRIPTS -->	<script src="../../../statics/resource/common/plugs/metronic/js/app.js" type="text/javascript"></script>	<script src="../../../statics/resource/common/plugs/metronic/js/login.js" type="text/javascript"></script>	<!-- END PAGE LEVEL SCRIPTS --> 	<script>		jQuery(document).ready(function() {		  App.init();		  Login.init();		});	</script>	<!-- END JAVASCRIPTS --><!-- END BODY --></body></html><?php }} ?>
