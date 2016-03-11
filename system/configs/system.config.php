<?php
/**
 * 系统公共配置文件
 */


//目录名称定义[S]
define('THEMES_PATH_NAME', 'themes'); //模板文件夹名
define('CONTROLLER_PATH_NAME', 'controller'); //控制层文件夹名
define('SERVER_PATH_NAME', 'server'); //业务逻辑层文件夹名
define('LOG_PATH_NAME', 'log'); //日志文件夹名
define('DATA_PATH_NAME', 'data'); //数据文件夹名
define('SYSTEM_PATH_NAME', 'system'); //系统文件夹名
define('SITES_PATH_NAME', 'sites'); //站点入口文件夹名
define('STATICS_PATH_NAME', 'statics'); //静态资源文件夹名
define('DOC_PATH_NAME', 'doc'); //文档文件夹名
define('TOOLS_PATH_NAME', 'tools'); //工具文件夹名

define('MANAGER_PATH_NAME', 'manager'); //表现逻辑层文件夹名
define('MODULE_PATH_NAME', 'module'); //数据逻辑层文件夹名
define('DAO_PATH_NAME', 'dao'); //持久层文件夹名

define('CONFIGS_PATH_NAME', 'configs'); //配置文件夹名
define('LIBS_PATH_NAME', 'libs'); //类库文件夹名

define('ENCODE_PATH_NAME', 'encode'); //编码资源文件夹名
define('MODEL_PATH_NAME', 'model'); //内部构件文件夹名
define('SMARTY_PATH_NAME', 'smarty'); //Smarty文件夹名

define('RESOURCE_PATH_NAME', 'resource'); //资源文件夹名
define('UPLOAD_PATH_NAME', 'upload'); //上传文件夹名
define('SECRET_PATH_NAME', 'secret'); //保密文件夹名

define('RESOURCE_COMMON_PATH_NAME', 'common'); //资源公共文件夹名
define('SECRET_CONTRACT_PATH_NAME', 'contract'); //合同文件夹名

define('RESOURCE_CSS_PATH_NAME', 'css'); //样式文件夹名
define('RESOURCE_IMGS_PATH_NAME', 'imgs'); //图片文件夹名
define('RESOURCE_JS_PATH_NAME', 'js'); //JS文件夹名
define('RESOURCE_PLUGS_PATH_NAME', 'plugs'); //plugs文件夹名
//目录名称定义[E]

//路径名称定义[S]
//define('ROOT_PATH', 'D:/wamp/www/uitour/'); //系统部署根目录
define('ROOT_PATH', '/data/home/byu17691/htdocs/'); //系统部署根目录

define('LOG_PATH', ROOT_PATH . LOG_PATH_NAME . '/'); //日志根目录
define('DATA_PATH', ROOT_PATH . DATA_PATH_NAME . '/'); //数据目录
define('SYSTEM_PATH', ROOT_PATH . SYSTEM_PATH_NAME . '/'); //系统文件目录
define('SITES_PATH', ROOT_PATH . SITES_PATH_NAME . '/'); //网站入口根目录
define('THEMES_PATH', ROOT_PATH . THEMES_PATH_NAME . '/'); //模板目录
define('CONTROLLER_PATH', ROOT_PATH . CONTROLLER_PATH_NAME . '/'); //控制层目录
define('SERVER_PATH', ROOT_PATH . SERVER_PATH_NAME . '/'); //业务逻辑层目录
define('STATICS_PATH', ROOT_PATH . STATICS_PATH_NAME . '/'); //静态资源目录
define('DOC_PATH', ROOT_PATH . DOC_PATH_NAME . '/'); //文档目录
define('TOOLS_PATH', ROOT_PATH . TOOLS_PATH_NAME . '/'); //工具目录

define('CONFIGS_PATH', SYSTEM_PATH . CONFIGS_PATH_NAME . '/'); //配置文件目录
define('LIBS_PATH', SYSTEM_PATH . LIBS_PATH_NAME . '/'); //类库目录

define('SMARTY_PATH', LIBS_PATH . SMARTY_PATH_NAME . '/'); //SMARTY目录
define('MODEL_PATH', LIBS_PATH . MODEL_PATH_NAME . '/'); //内部构件目录
define('ENCODE_PATH', LIBS_PATH . ENCODE_PATH_NAME . '/'); //编码资源目录

define('MANAGER_PATH', SERVER_PATH . MANAGER_PATH_NAME . '/'); //表现逻辑目录
define('MODULE_PATH', SERVER_PATH . MODULE_PATH_NAME . '/'); //数据逻辑目录
define('DAO_PATH', SERVER_PATH . DAO_PATH_NAME . '/'); //持久层目录

define('RESOURCE_PATH', STATICS_PATH . RESOURCE_PATH_NAME . '/'); //资源文件目录
define('UPLOAD_RELATIVE_PATH', STATICS_PATH_NAME . '/' . UPLOAD_PATH_NAME . '/'); //上传文件相对目录，该文件在生产环境不给可执行权限
define('UPLOAD_ABSOLUTELY_PATH', STATICS_PATH . UPLOAD_PATH_NAME . '/'); //上传文件绝对目录，该文件在生产环境不给可执行权限
define('SECRET_RELATIVE_PATH', DATA_PATH . '/' . SECRET_PATH_NAME . '/'); //保密文件相对目录，该文件在生产环境不给可执行权限
define('SECRET_ABSOLUTELY_PATH', DATA_PATH_NAME . SECRET_PATH_NAME . '/'); //保密文件绝对目录，该文件在生产环境不给可执行权限

define('RESOURCE_COMMON_CSS_PATH', RESOURCE_COMMON_PATH_NAME . '/' . RESOURCE_CSS_PATH_NAME . '/'); //资源文件公共样式目录
define('RESOURCE_COMMON_JS_PATH', RESOURCE_COMMON_PATH_NAME . '/' . RESOURCE_JS_PATH_NAME . '/'); //资源文件公共JS目录
define('RESOURCE_COMMON_IMGS_PATH', RESOURCE_COMMON_PATH_NAME . '/' . RESOURCE_IMGS_PATH_NAME . '/'); //资源文件公共图片目录
define('RESOURCE_COMMON_PLUGS_PATH', RESOURCE_COMMON_PATH_NAME . '/' . RESOURCE_PLUGS_PATH_NAME . '/'); //资源文件公共图片目录
define('SECRET_CONTRACT_RELATIVE_PATH', DATA_PATH_NAME . '/' . SECRET_PATH_NAME . '/' . SECRET_CONTRACT_PATH_NAME . '/'); //合同文件相对目录，该文件在生产环境不给可执行权限
define('SECRET_CONTRACT_ABSOLUTELY_PATH', DATA_PATH . SECRET_PATH_NAME . '/' . SECRET_CONTRACT_PATH_NAME . '/'); //合同文件绝对目录，该文件在生产环境不给可执行权限

//路径名称定义[E]

//域名相关[S]
define('HTTP_URL', 'http://www.uitour.cn/'); //主站域名
define('ADMIN_URL', 'http://admin.uitour.cn/'); //后台二级域名
define('CARD_URL', 'http://card.uitour.cn/'); //礼品卡二级域名
define('CTRAVEL_URL', 'http://ctravel.uitour.cn/'); //国内旅游二级域名
define('ITRAVEL_URL', 'http://itravel.uitour.cn/'); //国际旅游二级域名
define('HTTP_RESOURCE_URL', 'http://resource.uitour.cn/statics/resource/'); //静态文件访问二级域名
define("SECURE_URL", "https://secure.uitour.cn/"); //ssl二级域名
define('IMG_SERVER_URL', 'http://img.uitour.cn/'); //图片服务器二级域名
define('COOKIE_DOMAIN', '.uitour.cn'); //cookie中的网站作用域
//域名相关[E]

//控制安全相关[S]
define('DEBUG', true); //调试开关
define('SECRET_KEY', '123456'); //密钥
define('CHARSET', 'UTF-8'); //编码
//控制安全相关[S]

?>