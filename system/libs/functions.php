<?php

/**
 *  自动加载
 * @param $classname
 */
function auto_load_class($classname)
{
    if (substr($classname, -3) == 'Dao') {
        require_iyouwu(DAO_PATH . $classname . '.class.php');
    } elseif (substr($classname, -6) == 'Module') {
        require_iyouwu(MODULE_PATH . $classname . '.class.php');
    } elseif (substr($classname, -7) == 'Manager') {
        require_iyouwu(APP_MANAGER_PATH . $classname . '.class.php');
    } elseif (substr($classname, -6) == 'Server') {
        require_iyouwu(SERVER_PATH . $classname . '.class.php');
    }elseif (substr($classname, -10) == 'Controller') {
        require_iyouwu(APP_CONTROLLER_PATH . $classname . '.class.php');
        require_iyouwu(APP_TYPE_COMMON_CONTROLLER_PATH . $classname . '.class.php');
    } else {
        require_iyouwu(MODEL_PATH . $classname . '.class.php');
    }
    return;
}


/**
 * 文件引用函数
 * @param $filename
 * @return mixed
 */
function require_iyouwu($filename)
{
    static $_importFiles = array();
    $filename = realpath($filename);
    if (!isset($_importFiles[$filename])) {
        if (is_file($filename)) {
            require $filename;
            $_importFiles[$filename] = true;
        } else {
            $_importFiles[$filename] = false;
        }
    }
    return $_importFiles[$filename];
}

//注册自动加载函数
spl_autoload_register('auto_load_class');



/**
 * 安全过滤
 * @param str $string
 * @return str
 */
function safe_replace($string)
{
    $string = str_replace('%20', '', $string);
    $string = str_replace('%27', '', $string);
    $string = str_replace('%2527', '', $string);
    $string = str_replace('*', '', $string);
    $string = str_replace('"', '&quot;', $string);
    $string = str_replace("'", '', $string);
    $string = str_replace('"', '', $string);
    $string = str_replace('<', '&lt;', $string);
    $string = str_replace('>', '&gt;', $string);
    $string = str_replace("{", '', $string);
    $string = str_replace('}', '', $string);
    $string = str_replace('\\', '', $string);


    return $string;
}


/**
 * 参数的过滤
 * @param $string
 * @param bool $safe_replace
 * @return mixed
 */
function iyouwu_replace($string, $safe_replace = true)
{

    $string = preg_replace("/location|script|select|insert|update|delete|union|into|load_file|outfile|\*| and | or /i", " ", $string);
    $new_string = filter_var($string, FILTER_SANITIZE_STRING);
    if (false !== $new_string) {
        $string = $new_string;
    }
    if ($safe_replace) {
        return safe_replace($string);
    } else {
        return $string;
    }
}

?>