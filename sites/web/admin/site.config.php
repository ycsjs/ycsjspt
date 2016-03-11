<?php
/**
 * 站点子项目配置文件
 */


//项目层级关系[S]
define('APP_TYPE', 'web'); // 项目类型(值为文件夹名)
define('APP_TEAM', 'primary'); // 项目组
define('APP_NAME', 'admin'); // 子项目名称
//项目层级关系[E]

//路径相关[S]
define('APP_TYPE_COMMON_CONTROLLER_PATH', CONTROLLER_PATH . APP_TYPE . '/common/'); //common controller
define('APP_PATH', SITES_PATH . APP_TYPE . APP_NAME . '/'); //项目根目录
define('APP_CONTROLLER_PATH', CONTROLLER_PATH . APP_TYPE . '/' . APP_NAME . '/'); //项目controller目录
define('APP_MANAGER_PATH', MANAGER_PATH . APP_TYPE . '/' . APP_NAME . '/'); //项目manager目录
define('APP_TYPE_COMMON_THEME_PATH', THEMES_PATH . APP_TYPE . '/common/'); //项目类型common theme目录
define('APP_THEME_PATH', THEMES_PATH . APP_TYPE . '/' . APP_NAME . '/'); //项目theme目录

define('APP_RESOURCE_CSS_PATH', APP_TYPE . '/' . RESOURCE_CSS_PATH_NAME . '/' . APP_NAME . '/'); //项目样式目录
define('APP_RESOURCE_IMGS_PATH', APP_TYPE . '/' . RESOURCE_IMGS_PATH_NAME . '/' . APP_NAME . '/'); //项目图片目录
define('APP_RESOURCE_JS_PATH', APP_TYPE . '/' . RESOURCE_JS_PATH_NAME . '/' . APP_NAME . '/'); //项目JS目录

//路径相关[E]

//域名相关[S]
define('APP_HTTP_URL', ADMIN_URL); //后台项目URL地址
//域名相关[E]

?>