<?php
/**
 * 错误日志配置
 */
class LogConfig
{

    //接收邮件组
    public static $log_mail_user = array(
        "huowei"
    );

    //错误日志的文件名
    public static $error_log_flie_name = array(
        "db_error"
    );

    //文件列表 $error_log_flie_name=>$log_mail_user
    public static $oversee_file_list = array(
        "0" => array("0")
    );
}

;
?>