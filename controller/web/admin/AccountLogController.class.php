<?php

class AccountLogController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 日志列表
     */
    public function AccountLogList()
    {
        $start_time = Http_Validation::getInput('StartTime', 20);
        $end_time = Http_Validation::getInput('EndTime', 20);
        $username = Http_Validation::getInput('UserName', 20);
        $page = Http_Validation::getInt('p');
        $page_size = 1;

        $parameter = $whe = "";
        $whe_arr = array();
        if (!empty($start_time)) {
            $whe_arr[] = "aal.CreationDate >= '" . $start_time . " 00:00:00'";
        }

        if (!empty($end_time)) {
            $whe_arr[] = "aal.CreationDate <= '" . $end_time . " 23:59:59'";
        }

        if (!empty($username)) {
            $whe_arr[] = " aa.UserName like '%" . $username . "%'";
        }

        if (!empty($whe_arr)) {
            $whe_str = implode(" and ", $whe_arr);
            $whe = "where " . $whe_str;
            $parameter = "StartTime=" . $start_time . "&EndTime=" . $end_time . "&UserName=" . $username;
        }

        $total_log = AdminAccountLogDao::countNumByWhe($whe);
        $log_list = AdminAccountLogDao::DB_GetAdminAccountLogByPage($page, $page_size, $whe);
        $page = new Page($total_log, $page_size, "", "", $parameter);
        $total_page = $page->get_totalPages();

        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show());
        $this->tpl->assign('log_list', $log_list);

        $this->tpl->display("account/account_log_list.html");
    }

}