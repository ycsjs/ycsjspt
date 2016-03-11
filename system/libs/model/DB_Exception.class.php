<?php
/**
 * 数据库异常类，继承系统异常类，自动调用日志函数记录当此异常和自定义的错误信息。
 */
class DB_Exception extends Exception
{

    /**
     * 构造函数
     * @param string $msg 自定义的错误信息
     * @param int $code 系统异常的错误级别代码，详见PHP帮助手册
     */
    public function  __construct($msg = "", $code = 0)
    {
        parent::__construct($msg, $code);
        $txt = "error: " . $msg . "\r\n";
        $txt .= "exception: " . $this->__toString() . "\r\n";
        Log_File::writeDBLog($txt);
    }
}

?>