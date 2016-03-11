<?php
require 'site.config.php'; //加载站点配置文件

require LIBS_PATH . 'functions.php'; //自动加载函数
require SMARTY_PATH . 'smarty.cap.class.php'; //smarty类封装

//校验管理员是否登录,无登录用户，或者非login登录验证入口，全部跳转到登录首页

$account_login = Http_Handle::getSession('admin_account_info');

if (empty($account_login) && !((strtolower($_SERVER['REQUEST_URI']) == '/index/login') || ((isset($_GET['c'])) && (strtolower($_GET['c']) == 'index') && (isset($_GET['m'])) && (strtolower($_GET['m']) == 'login')))) {
    $_GET['c'] = $_GET['m'] = 'index';
    $_SERVER['REQUEST_URI'] = 'index/index';
}
$app = new App();
$app->run();
?>