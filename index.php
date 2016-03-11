<?php
session_start();
require './system/configs/system.config.php'; //加载系统全局配置文件
$server_name = $_SERVER['SERVER_NAME'];
switch ($server_name) {
    case "admin.uitour.cn":
        include("./sites/web/admin/index.php");
        break;
    case "www.uitour.cn":
        include("./sites/web/itravel/index.php");
        break;
    case "card.uitour.cn":
        include("./sites/mobile/card/index.php");
        break;
}