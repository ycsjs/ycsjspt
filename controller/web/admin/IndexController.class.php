<?php

/**
 * 管理员类
 */
class IndexController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 后台登陆首页
     */
    public function Index()
    {
        $this->tpl->display("index.html");
    }

    /**
     * 登录验证
     */
    public function Login()
    {
        $account_user = Http_Validation::get('account_user');
        $account_password = Http_Validation::get('account_password');
        $json_data=array();//返回数据
        if ((!empty($account_user)) && (!empty($account_password))) {
            IndexManager::checkAdminAccountInfoByAccountAndPassword($account_user, $account_password);
        }
        $admin_account_info = Http_Handle::getSession('admin_account_info');
        if (!empty($admin_account_info)) {
            $redirect_url = APP_HTTP_URL . 'Index/Home';
            $up_account['LastLoginTime'] = time();
            $up_account['LastLoginIp'] = Http_Handle::getIP();
            AdminAccountDao::DB_UpdateAdminAccountById($admin_account_info['ID'], $up_account);
            $json_data['status']=true;
            $json_data['url']=$redirect_url;
        } else {
            $json_data['status']=false;
            $json_data['info']="用户名和密码错误.";
        }
        echo json_encode($json_data);
    }

    /**
     * 退出后台
     */
    public function Logout()
    {
        Http_Handle::setSession('admin_account_info', false);
        Http_Handle::url301Redirect(APP_HTTP_URL);
    }


    /**
     * 后台主页
     */
    public function Home()
    {
        $admin_account_info = Http_Handle::getSession('admin_account_info');
        if ((!empty($admin_account_info)) && (isset($admin_account_info['Restrict'])) && (!empty($admin_account_info['Restrict']))) {
            $account_menu = AdminMenuManager::getMenuListByMenuNumStr(unserialize($admin_account_info['Restrict']));
            $this->tpl->assign('account_menu', $account_menu);
        }
        $this->tpl->assign('admin_account_info', $admin_account_info);
        $this->tpl->display("home.html");
    }
}

?>