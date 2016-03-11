<?php /* Smarty version Smarty-3.1.15, created on 2016-01-02 01:50:36
         compiled from "/data/home/byu17691/htdocs/themes/web/admin/home.html" */ ?>
<?php /*%%SmartyHeaderCode:12599223055ffa04e0d30b2-11282503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24aad006e44f6c97dd3ab53cee06e14cd6f213fc' => 
    array (
      0 => '/data/home/byu17691/htdocs/themes/web/admin/home.html',
      1 => 1451641833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12599223055ffa04e0d30b2-11282503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55ffa04e18d219_33616638',
  'variables' => 
  array (
    'account_menu' => 0,
    'first_menu' => 0,
    'admin_account_info' => 0,
    'app_http_url' => 0,
    'second_menu' => 0,
    'third_menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffa04e18d219_33616638')) {function content_55ffa04e18d219_33616638($_smarty_tpl) {?><!DOCTYPE html><!--[if IE 8]><html lang="en" class="ie8"> <![endif]--><!--[if IE 9]><html lang="en" class="ie9"> <![endif]--><!--[if !IE]><!--><html lang="en"> <!--<![endif]--><!-- BEGIN HEAD --><head>    <meta charset="utf-8"/>    <title>尤物后台管理系统</title>    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>    <meta content="" name="description"/>    <meta content="" name="author"/>    <!-- BEGIN GLOBAL MANDATORY STYLES -->    <link href="../../../statics/resource/common/plugs/metronic/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../statics/resource/common/plugs/metronic/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../statics/resource/common/plugs/metronic/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>    <link href="../../../statics/resource/common/plugs/metronic/css/style-metro.css" rel="stylesheet" type="text/css"/>    <link href="../../../statics/resource/common/plugs/metronic/css/style.css" rel="stylesheet" type="text/css"/>    <link href="../../../statics/resource/common/plugs/metronic/css/style-responsive.css" rel="stylesheet" type="text/css"/>    <link href="../../../statics/resource/common/plugs/metronic/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>    <link href="../../../statics/resource/common/plugs/metronic/css/uniform.default.css" rel="stylesheet" type="text/css"/>    <!-- END GLOBAL MANDATORY STYLES -->    <link rel="shortcut icon" href="../../../statics/resource/common/plugs/metronic/image/favicon.ico"/></head><!-- END HEAD --><!-- BEGIN BODY --><body class="page-header-fixed"><!-- BEGIN HEADER --><div class="header navbar navbar-inverse navbar-fixed-top">    <!-- BEGIN TOP NAVIGATION BAR -->    <div class="navbar-inner">        <div class="container-fluid">            <!-- BEGIN LOGO -->            <a class="brand" href="/" style="margin-left: 1px;color: white;font-size: 18px;">                后台管理系统                <!--<img src="../../../statics/resource/common/plugs/metronic/image/logo.png" alt="logo"/>-->            </a>            <!-- END LOGO -->            <!-- BEGIN HORIZANTAL MENU -->            <div class="navbar hor-menu hidden-phone hidden-tablet">                <div class="navbar-inner">                    <ul class="nav">                        <?php  $_smarty_tpl->tpl_vars['first_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['first_menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['account_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['first_menu']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['first_menu']->key => $_smarty_tpl->tpl_vars['first_menu']->value) {
$_smarty_tpl->tpl_vars['first_menu']->_loop = true;
 $_smarty_tpl->tpl_vars['first_menu']->index++;
 $_smarty_tpl->tpl_vars['first_menu']->first = $_smarty_tpl->tpl_vars['first_menu']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['first'] = $_smarty_tpl->tpl_vars['first_menu']->first;
?>                            <li id="<?php echo $_smarty_tpl->tpl_vars['first_menu']->value['menu_adpter'];?>
" class="fist_menu <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['first']) {?>active<?php }?>"><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['first_menu']->value['menu_name'];?>
<span class="selected <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['first']) {?>hidden<?php }?>"></span></a></li>                        <?php } ?>                    </ul>                </div>            </div>            <!-- END HORIZANTAL MENU -->            <!-- BEGIN RESPONSIVE MENU TOGGLER -->            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">                <img src="../../../statics/resource/common/plugs/metronic/image/menu-toggler.png" alt=""/>            </a>            <!-- END RESPONSIVE MENU TOGGLER -->            <!-- BEGIN TOP NAVIGATION MENU -->            <ul class="nav pull-right">                <!-- BEGIN USER LOGIN DROPDOWN -->                <li class="dropdown user">                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">                        <img alt="" src="../../../statics/resource/common/plugs/metronic/image/avatar1_small.jpg"/>                        <span class="username"><?php echo $_smarty_tpl->tpl_vars['admin_account_info']->value['RealName'];?>
</span>                        <i class="icon-angle-down"></i>                    </a>                    <ul class="dropdown-menu">                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
Index/Logout"><i class="icon-key"></i> 退出</a></li>                    </ul>                </li>                <!-- END USER LOGIN DROPDOWN -->            </ul>            <!-- END TOP NAVIGATION MENU -->        </div>    </div>    <!-- END TOP NAVIGATION BAR --></div><!-- END HEADER --><!-- BEGIN CONTAINER --><div class="page-container row-fluid">    <!-- BEGIN HORIZONTAL MENU PAGE SIDEBAR1 -->    <?php  $_smarty_tpl->tpl_vars['first_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['first_menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['account_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['first_menu']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['first_menu']->key => $_smarty_tpl->tpl_vars['first_menu']->value) {
$_smarty_tpl->tpl_vars['first_menu']->_loop = true;
 $_smarty_tpl->tpl_vars['first_menu']->index++;
 $_smarty_tpl->tpl_vars['first_menu']->first = $_smarty_tpl->tpl_vars['first_menu']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['first'] = $_smarty_tpl->tpl_vars['first_menu']->first;
?>        <div class="page-sidebar nav-collapse collapse centent_left <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['first']) {?>hidden<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['first_menu']->value['menu_adpter'];?>
SecondMenu">            <ul class="page-sidebar-menu hidden-phone hidden-tablet left_main_menu">                <li>                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->                    <div class="sidebar-toggler hidden-phone"></div>                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->                </li>                <?php  $_smarty_tpl->tpl_vars['second_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['second_menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['first_menu']->value['menu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['second_menu']->key => $_smarty_tpl->tpl_vars['second_menu']->value) {
$_smarty_tpl->tpl_vars['second_menu']->_loop = true;
?>                    <li class="left_meun_li">                        <a id="<?php echo $_smarty_tpl->tpl_vars['second_menu']->value['menu_controller'];?>
" href="javascript:;">                            <i class="icon-th-list"></i>                            <span class="title"><?php echo $_smarty_tpl->tpl_vars['second_menu']->value['menu_name'];?>
</span>                            <span class="selected"></span>                            <span class="arrow"></span>                        </a>                        <ul id="<?php echo $_smarty_tpl->tpl_vars['second_menu']->value['menu_controller'];?>
Menus" class="sub-menu ul_two left_meun_two">                            <?php  $_smarty_tpl->tpl_vars['third_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['third_menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['second_menu']->value['menu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['third_menu']->key => $_smarty_tpl->tpl_vars['third_menu']->value) {
$_smarty_tpl->tpl_vars['third_menu']->_loop = true;
?>                                <li class="third_menu"><a href="<?php echo $_smarty_tpl->tpl_vars['app_http_url']->value;?>
<?php if ($_smarty_tpl->tpl_vars['third_menu']->value['menu_controller']) {?><?php echo $_smarty_tpl->tpl_vars['third_menu']->value['menu_controller'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['second_menu']->value['menu_controller'];?>
<?php }?>/<?php echo $_smarty_tpl->tpl_vars['third_menu']->value['menu_action'];?>
" target="pages"><?php echo $_smarty_tpl->tpl_vars['third_menu']->value['menu_name'];?>
</a></li>                            <?php } ?>                        </ul>                    </li>                <?php } ?>            </ul>        </div>    <?php } ?>    <!--HORIZONTAL AND SIDEBAR MENU FOR MOBILE & TABLETS-->    <!-- END BEGIN HORIZONTAL MENU PAGE SIDEBAR -->    <!-- BEGIN PAGE -->    <div class="page-content">        <div class="container-fluid">            <iframe src="" width="100%" marginwidth="0" height="1900px;" marginheight="0" align="middle" scrolling="no" frameborder="0" name="pages"></iframe>        </div>    </div>    <!-- END PAGE --></div><!-- END CONTAINER --><!-- BEGIN FOOTER --><div class="footer">    <div class="footer-inner">        2015 &copy; 界面上海网络科技有限公司.    </div>    <div class="footer-tools">			<span class="go-top">			<i class="icon-angle-up"></i>			</span>    </div></div><!-- END FOOTER --><!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --><!-- BEGIN CORE PLUGINS --><script src="../../../statics/resource/common/plugs/metronic/js/jquery-1.10.1.min.js" type="text/javascript"></script><script src="../../../statics/resource/common/plugs/metronic/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script><!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip --><script src="../../../statics/resource/common/plugs/metronic/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script><script src="../../../statics/resource/common/plugs/metronic/js/bootstrap.min.js" type="text/javascript"></script><!--[if lt IE 9]><script src="../../../statics/resource/common/plugs/metronic/js/excanvas.min.js"></script><script src="../../../statics/resource/common/plugs/metronic/js/respond.min.js"></script><![endif]--><script src="../../../statics/resource/common/plugs/metronic/js/jquery.slimscroll.min.js" type="text/javascript"></script><script src="../../../statics/resource/common/plugs/metronic/js/jquery.blockui.min.js" type="text/javascript"></script><script src="../../../statics/resource/common/plugs/metronic/js/jquery.cookie.min.js" type="text/javascript"></script><script src="../../../statics/resource/common/plugs/metronic/js/jquery.uniform.min.js" type="text/javascript"></script><!-- END CORE PLUGINS --><script src="../../../statics/resource/common/plugs/metronic/js/app.js"></script><script>    jQuery(document).ready(function () {        App.init();        $(".fist_menu").click(function () {            var menu_name = $(this).attr("id");            $(".centent_left").addClass("hidden");            $("#" + menu_name + "SecondMenu").removeClass("hidden");            $(".fist_menu").removeClass("active");            $(this).addClass("active");            $(".fist_menu>a>span").addClass("hidden");            $(this).find("a span").removeClass("hidden");        });        $(".third_menu").click(function () {            $(".third_menu").removeClass("open");            $(this).addClass("open");            $(".left_meun_li").removeClass("active");            $(this).parent().parent().addClass("active");        });    });</script><!-- END JAVASCRIPTS --></body><!-- END BODY --></html><?php }} ?>
