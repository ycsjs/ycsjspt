<?php

require 'site.config.php'; //加载站点配置文件

require LIBS_PATH . 'functions.php'; //自动加载函数
require SMARTY_PATH . 'smarty.cap.class.php'; //smarty类封装

$app = new App();
$app->run();

?>