<?php

/**
 * 项目前段控制器，日志管理、项目运行、控制转发
 */
class App
{

    /**
     * 构造函数
     */
    public function __construct()
    {
        set_error_handler(array($this, 'siteErrorHandler'));
        set_exception_handler(array($this, 'siteExceptionHandler'));
    }


    public function run()
    {
        $controller_pre = $this->getContronller();
        $controller = ucfirst($controller_pre) . 'Controller';
        $method = $this->getMethod();


        //用户提交参数过滤
        $_GET['c'] = $controller_pre;
        $_GET['m'] = $method;

        //运行

        //用户提交参数过滤
        if (class_exists($controller, TRUE)) {
            $obj = new $controller;
        } else {
            $error_c = 'PageErrorController';
        }

        if (isset($obj) && method_exists($obj, $method)) {
            call_user_func(array(&$obj, $method));
        } else {
            $error_c = 'PageErrorController';
        }
        //执行404页面
        if (!empty($error_c)) {
            $obj = new $error_c;
            $obj->page_error();
        }

        return;
    }

    private function getContronller()
    {
        if ((isset($_GET['c'])) && (!empty($_GET['c']))) {
            return $_GET['c'];
        } else {
            $path = $this->getPathInfo();
            if ((isset($path['c'])) && (!empty($path['c']))) {
                return $path['c'];
            }
            return 'index';
        }
    }

    private function getMethod()
    {
        if ((isset($_GET['m'])) && (!empty($_GET['m']))) {
            return strtolower($_GET['m']);
        } else {
            $path = $this->getPathInfo();
            if ((isset($path['m'])) && (!empty($path['m']))) {
                return strtolower($path['m']);
            } else {
                return 'Index';
            }
        }
        return NULL;
    }

    /**
     * 解析url path部分
     * @return array
     */
    private function getPathInfo()
    {

        static $path = NULL;
        if ($path === NULL) {
            $pathinfo = parse_url($_SERVER['REQUEST_URI']);
            $cs = explode('/', $pathinfo['path']);
            $path = array();
            if ($cs[1]) {
                $path['c'] = $cs[1];
                if ($cs[2])
                    $path['m'] = $cs[2];
            }
        }
        return $path;
    }


    /**
     * 自定义的异常处理函数。
     * 在异常未被try/catch捕获时，代码再执行完此函数后终止。
     * @param <type> $exception 被抛出的异常对象
     */
    public function siteExceptionHandler($exception)
    {
        //记录异常日志
        $format = "system error:  Uncaught exception '%s' in %s: line %s \r\nc:\r\n%s\r\n";
        $msg = sprintf($format, $exception->getMessage(), $exception->getFile(), $exception->getLine(), $exception->getTraceAsString());
        Log_File::writeExecptionLog($msg, true);
    }


    /**
     * 自定义的错误处理函数。
     * 在系统发生严重错误或者trigger_error()被呼叫时执行。
     * @param $errno 错误的级别，整型。为系统预定义错误代码。
     * @param string $errstr 错误信息，字符。
     * @param string $errorfile 产生错误的文件名，可选。
     * @param int $errline 产生错误的代码所在的行数，可选。
     * @param array $errcontext 错误的上下文变量数组。手机版新架构测试用
     */
    public function siteErrorHandler($errno, $errstr = "", $errorfile = "", $errline = 0, $errcontext = array())
    {
        //根据错误级别记录日志
        $errno = intval($errno);
        $error_log_level = array(1, 2, 4, 16, 32, 64, 4096);

        //输出 GET POST COOKIE等上下变量
        $context = array();
        $context['_GET'] = isset($errcontext['_nGET']) ? $errcontext['_nGET'] : array();
        $context['_POST'] = isset($errcontext['_nPOST']) ? $errcontext['_nPOST'] : array();
        $context['_COOKIE'] = isset($errcontext['_nCOOKIE']) ? $errcontext['_nCOOKIE'] : array();
        if ($context['_GET'] || $context['_POST'] || $context['_COOKIE']) {
            $errstr .= var_export($context, TRUE);
        }

        if (in_array($errno, $error_log_level)) {
            Log_File::writeSysErrorLog($errno, $errstr, $errorfile, $errline, true);
        }
    }

}

?>