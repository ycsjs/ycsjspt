<?php

require 'config.inc.php';
require 'cron_include/config.site.php';
require 'cron_include/common_cron.include.php';
require_once(SYSTEM_PATH . 'lib/SendMail.php');


class error_exception_mail
{

    public $max_oversee_time;

    public function __construct()
    {
        $this->max_oversee_time = 600;
    }

    /**
     * 发送系统错误邮件
     * @param <string> $email 邮件地址
     * @return <bool> 发送成功返回true，否则返回false
     */

    /**
     * 发送系统错误邮件
     * @param $to_email 邮件地址
     * @param $error_file_name
     * @param $mail_content
     * @return mixed
     */
    public function sendMail($to_email, $error_file_name, $mail_content)
    {
        $title = '(' . str_replace(COOKIE_DOMAIN, '', str_replace('http://', '', HTTP_URL)) . ')错误提示_' . $error_file_name;
        $headers['from_mail'] = MailConfig::$from; //发信地址
        $headers['to_mail'] = $to_email; //收信地址
        $headers['mail_title'] = "=?UTF-8?B?" . base64_encode($title) . "?=";

        $mailer = new smtp();
        $mail_res = $mailer->sendmail($headers['to_mail'], $headers['mail_title'], $mail_content, 'HTML');
        return $mail_res;
    }

    /**
     * 从文件中获取最新错误日志,
     * @param $file_path_name 文件路径名称
     * @param $now_time 时间
     * @return string 当文件没有被修改过，返回值为空,否空为最新修改内容
     */
    public function getErrorExceptionMsg($file_path_name, $now_time)
    {
        $re_str = "";
        $week_num = date("w", $now_time);
        $is_start_oversee = false;


        if ($now_time > strtotime(date("Y-m-d", $now_time) . "23:50")) {
            $is_start_oversee = true;
        }

        if (0 == $week_num || 6 == $week_num) {
            $oversee_time = 86400; //60*60*24 		//周六日，只有晚上23:50以后发送一次错误
        } else {
            $oversee_time = 18000; //周一到周五，晚上23:50以后发送一次错误
            if ($now_time > strtotime(date("Y-m-d", $now_time) . "08:00") && $now_time < strtotime(date("Y-m-d", $now_time) . "19:00")) {
                $is_start_oversee = true;
                if ($now_time < strtotime(date("Y-m-d", $now_time) . "08:10")) {
                    $oversee_time = 28800; //60*60*24 //周一到周五，只有早上8:00以后完成第一次发送
                } else {
                    $oversee_time = $this->max_oversee_time;
                }
            }
        }
        if ($is_start_oversee) {
            if ("" != $file_path_name && is_file($file_path_name)) {
                $last_eidt_time = filemtime($file_path_name);
                if ($last_eidt_time && $now_time - $last_eidt_time < $oversee_time) {
                    $start_sign = false; //是否开始获取内容
                    $handle = file($file_path_name);
                    foreach ($handle as $con_str) {
                        $new_str = trim($con_str);
                        if ($start_sign) {
                            if ("" != $re_str) {
                                $re_str .= "<br>";
                            }
                            $re_str .= $new_str;
                        } else {
                            if (strlen($new_str) && "time:" == substr($new_str, 0, 5)) {
                                $error_time = strtotime(str_replace("time: ", "", $new_str));
                                if ($now_time - $error_time < $oversee_time) {
                                    $start_sign = true;
                                    $re_str .= $new_str;
                                }
                            }
                        }
                    }
                }
            }
        }

        return $re_str;
    }

    /**
     * 日志邮件
     */
    public function log_mail()
    {
        $now_time = time();
        $file_arr = array_keys(LogConfig::$oversee_file_list);
        foreach ($file_arr as $file_name_key) {
            $file_name = LogConfig::$error_log_flie_name[$file_name_key];
            $file_full_name = LOG_PATH . date("Y_m/d/", $now_time) . $file_name . ".txt";
            $file_contents = $this->getErrorExceptionMsg($file_full_name, $now_time);
            if ("" != $file_contents) {
                $file_contents .= "<br>HTTPURL:" . HTTP_URL;
                $mail_arr = LogConfig::$oversee_file_list[$file_name_key];
                $mail_list = "";
                if (is_array($mail_arr)) {
                    foreach ($mail_arr as $key_num) {
                        if ("" != $mail_list) {
                            $mail_list .= ",";
                        }
                        $mail_list .= LogConfig::$log_mail_user[$key_num];
                    }
                } else {
                    $mail_list = LogConfig::$log_mail_user[$mail_arr];
                }
                if ("" != $mail_list) {
                    $mail_list_arr = explode(",", $mail_list);
                    unset($new_mail_arr);
                    foreach ($mail_list_arr as $new_arr) {
                        $new_mail_arr[] = $new_arr . "@iyouwu.com";
                    }
                    $mail_list_str = implode(",", $new_mail_arr);
                    if ($this->sendMail($mail_list_str, $file_name . ".txt", $file_contents)) {
                        echo("发送成功");
                    }
                }
            }
        }
    }

}


$error_exception_mail_obj = new error_exception_mail();
$error_exception_mail_obj->log_mail();

?>