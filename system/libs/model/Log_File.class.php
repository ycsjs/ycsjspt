<?php

/**
 * 错误、异常日志的捕获和记录
 */
class Log_File
{
    //PHP系统内置错误代码及定义
    protected static $errorCodes = array(
        1 => "E_ERROR: Fatal run-time errors.",
        2 => "E_WARNING: Run-time warnings(non-fatal errors).",
        4 => "E_PARSE: Compile-time parse errors.",
        8 => "E_NOTICE: Run-time notices. Indicate something that could have an error.",
        16 => "E_CORE_ERROR: Fatal errors that occur during PHP's initial startup.",
        32 => "E_CORE_WARNING: Warnings(non-fatal errors) that occur during PHP's initial startup.",
        64 => "E_COMPILE_ERROR: Fatal compile-time errors(generated by Zend Scripting Engine).",
        128 => "E_COMPILE_WARNING: Compile-time warnings(non-fatal errors, generated by Zend Scripting Engine).",
        256 => "E_USER_ERROR: User-generated error message(generated by using trigger_error()).",
        512 => "E_USER_WARNING: User-generated warning message(generated by using trigger_error()).",
        1024 => "E_USER_NOTICE: User-generated notice message(generated by using trigger_error()).",
        2048 => "E_STRICT: PHP suggest changes to your code ensure the best interoperability and forward compatibility.",
        4096 => "E_RECOVERABLE_ERROR: Catchable fatal error.",
        8192 => "E_DEPRECATED: Run-time notices(code will not work in future versions).",
        16384 => "E_USER_DEPRECATED: User-generated warning message(generated by using trigger_error()).",
        30719 => "E_ALL: All errors and warnings, except of level E_STRICT in PHP < 6."
    );


    /**
     * 根据错误代码获取对应的信息
     * @param $codemask PHP预定义的错误代码
     * @return string 对应的错误信息
     */
    protected static function getErrorCode($codemask)
    {
        if (empty($codemask)) {
            return "";
        }
        return self::$errorCodes[$codemask];
    }


    /**
     * 获取最后一次错误信息, 并对格式进行编排
     * @return string 最后一次错误信息
     */
    protected static function getLastErrorMessage()
    {
        $error = error_get_last();
        if (empty($error)) {
            return "";
        }
        $lastErrorMsg = "last error: [type]=(" . $error["type"] . ")" . self::getErrorCode($error["type"]) . "\r\n";
        $lastErrorMsg .= "\t[message]=" . $error["message"] . "\r\n";
        $lastErrorMsg .= "\t[file]=" . $error["file"] . " (" . $error["line"] . ")\r\n";
        return $lastErrorMsg;
    }


    /**
     * 初始化错误日志的信息和格式
     * @param $msg
     * @return string
     */
    private static function getFormat($msg)
    {
        $txt = "\r\n" . "time: " . date("Y-m-d H:i:s") . "\r\n";
        if (!empty($_SERVER)) {
            $txt .= "server ip: " . $_SERVER['SERVER_ADDR'] . "\r\n";
            $txt .= "browser: " . Http_Handle::getBrowserInfo(true) . "\r\n";
            $txt .= "project name: " . APP_NAME . "\r\n";
            $txt .= "http url : " . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"] . "\r\n";
        }
        $txt .= empty($msg) ? "" : $msg . "\r\n";
        return $txt;
    }

    /**
     * 将日志写入文件，所有写日志的函数最终都会调用此私有函数
     * @param $type 日志的类型，主要用于对日志进行分类，比如数据库日志放入db目录下，$type的值就是db
     * @param $msg 日志信息
     * @param bool $appendLastError
     * @return bool 是否写入成功，是返回true，否则返回false
     */
    private static function write($type, $msg, $appendLastError = false)
    {
        if (empty($type)) {
            return false;
        }

        //把日志按类型分目录存放，且以xxxx_xx格式的目录分期存放，日志以天为单位，命名格式是xxxx_xx_xx
        $path = LOG_PATH . DIRECTORY_SEPARATOR . date("Y_m") . DIRECTORY_SEPARATOR . date("d") . DIRECTORY_SEPARATOR;
        $file = trim($type) . ".txt";
        $filepath = $path . $file;
        //创建目录
        $isCreated = Directory_File::dirCreate($path);

        //写文件，如果文件不存在则创建新文件
        $mode = "a+";
        if (!file_exists($filepath)) {
            $mode = "w+";
        }
        if (!$fp = @fopen($filepath, $mode)) {
            return false;
        }

        //日志内容
        $msg = self::getFormat($msg);
        //追加最后一次错误信息
        if ($appendLastError) {
            $msg .= self::getLastErrorMessage();
        }
        //加锁写入数据到文件尾部
        flock($fp, LOCK_EX);
        fwrite($fp, $msg);
        //解锁关闭文件
        flock($fp, LOCK_UN);
        fclose($fp);
        //将文件的权限设为可写
        @chmod($filepath, 0755);
        @chown($filepath, 'iyouwu');
        @chgrp($filepath, 'iyouwu');
        return true;
    }

    /**
     * 将日志以CSV格式写入文件，用于记录各类数据，而非错误信息
     * 所有写CSV日志的函数最终都会调用此私有函数
     * @param $type 日志的类型，主要用于对日志进行分类，比如数据库日志放入db目录下，$type的值就是db
     * @param $msg 日志信息
     * @return bool 写入成功返回true，否则返回false
     */
    private static function write_csv($type, $msg)
    {
        return self::write('csv_' . $type, $msg, false);
    }

    /**
     * 用于记录DB错误信息，置于Log目录下的db文件
     * @param $msg 要写入日志的信息
     * @param bool $appendLastError 是否追加最后一次错误的信息，默认为false
     * @return bool 是否写入成功，是返回true，否则返回false
     */
    public static function writeDBLog($msg, $appendLastError = true)
    {
        if (empty($msg) || trim($msg) == "") {
            return FALSE;
        }
        $msg = "file: " . $_SERVER ['SCRIPT_NAME'] . "\r\n" . $msg;
        return self::write("db_error", trim($msg), $appendLastError);
    }


    /**
     * 用于记录用户自定义的错误信息，置于Log目录下的sys_error文件
     * @param $errno
     * @param $msg 要写入日志的信息
     * @param $errorfile
     * @param $errline
     * @param bool $appendLastError 是否追加最后一次错误的信息，默认为false
     * @return bool 是否写入成功，是返回true，否则返回false
     */
    public static function writeSysErrorLog($errno, $msg, $errorfile, $errline, $appendLastError = true)
    {
        if (empty($msg) || trim($msg) == "") {
            return FALSE;
        }
        $msg = "file: " . $errorfile . ' on line ' . $errline . "\r\n" . self::$errorCodes[$errno] . "\r\n" . $msg;
        return self::write("sys_error", trim($msg), $appendLastError);
    }

    /**
     * 用于记录异常中的错误信息，置于Log目录下的sys_error文件
     * @param $msg 要写入日志的信息
     * @param bool $appendLastError 是否追加最后一次错误的信息，默认为false
     * @return bool 是否写入成功，是返回true，否则返回false
     */
    public static function writeExecptionLog($msg, $appendLastError = true)
    {
        if (empty($msg) || trim($msg) == "") {
            return FALSE;
        }
        $msg = "error: " . trim($msg);
        return self::write("sys_error", $msg, $appendLastError);
    }


}