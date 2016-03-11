<?php


class AccountController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 账户列表
     */
    public function ListAccount()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_account = AdminAccountDao::countNumByWhe();
        $account_list = AdminAccountDao::DB_GetAdminAccountByPage($page, $page_size);
        $page = new Page($total_account, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('account_list', $account_list);

        $this->tpl->display("account/account_list.html");
    }

    /**
     * 新增账户
     */
    public function AddAccount()
    {
        $http_method = Http_Handle::getMethod();
        if ($http_method == "POST") { //有form表单提交，即新增账户逻辑
            $account = array();
            $account['UserName'] = Http_Validation::getInput('UserName', 20);
            $account['RealName'] = Http_Validation::getInput('RealName', 20);
            $account['PassWord'] = Http_Validation::getInput('PassWord', 32);
            $account['PassWord2'] = Http_Validation::getInput('PassWord2', 32);
            $account['Email'] = Http_Validation::getInput('Email', 255);
            $account['QQ'] = Http_Validation::getInput('QQ', 20);
            $account['Phone'] = Http_Validation::getInput('Phone', 4);
            $account['Mobile'] = Http_Validation::getInput('Mobile', 11);

            $account = array_filter($account); //过滤为空的元素

            if ((!empty($account['PassWord'])) && ($account['PassWord'] == $account['PassWord2']) && (!empty($account['UserName'])) && (!empty($account['RealName']))) { //两次输入的密码一直，则为有效密码，且必填项数据都不为空
                unset($account['PassWord2']);
                $account['PassWord'] = md5($account['PassWord']);
                $save_sign = AdminAccountDao::DB_SaveAdminAccount($account);
                if ($save_sign) { //保存成功返回列表页
                    $account_info=AdminAccountDao::DB_GetAdminAccountInfoByUserName($account['UserName']);
                    header("Location:" . APP_HTTP_URL . "Account/RestrictAccount?account_id=".$account_info['ID']);
                    exit();
                }
            }
            $this->tpl->assign("save_error", "true");
            $this->tpl->assign("account", $account);

        }
        $this->tpl->display("account/account_add.html");
    }


    /**
     * 查看账户信息
     */
    public function ViewAccount()
    {
        $account_id = Http_Validation::getInt('account_id');
        $account = AdminAccountDao::DB_GetAdminAccountInfoById($account_id);
        $this->tpl->assign('account', $account);
        $this->tpl->display("account/account_view.html");
    }


    /**
     * 编辑账户信息
     */
    public function EditAccount()
    {

        $http_method = Http_Handle::getMethod();
        $account_id = Http_Validation::getInt('account_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改账户逻辑
            $account = array();
            $account['RealName'] = Http_Validation::getInput('RealName', 20);
            $account['PassWord'] = Http_Validation::getInput('PassWord', 32);
            $account['PassWord2'] = Http_Validation::getInput('PassWord2', 32);
            $account['Email'] = Http_Validation::getInput('Email', 255);
            $account['QQ'] = Http_Validation::getInput('QQ', 20);
            $account['Phone'] = Http_Validation::getInput('Phone', 4);
            $account['Mobile'] = Http_Validation::getInput('Mobile', 11);
            $account = array_filter($account); //过滤为空的元素

            if ((!empty($account['PassWord'])) && ($account['PassWord'] == $account['PassWord2']) && (!empty($account['RealName']))) { //两次输入的密码一直，则为有效密码，且必填项数据都不为空
                unset($account['PassWord2']);
                $account['PassWord'] = md5($account['PassWord']);
                $save_sign = AdminAccountDao::DB_UpdateAdminAccountById($account_id, $account);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "Account/ListAccount?save_sign=true");
                    exit();
                }
            }else{
                $this->tpl->assign("edit_error", "true");
            }
        } else {//编辑页面
            $account = AdminAccountDao::DB_GetAdminAccountInfoById($account_id);
        }
        $this->tpl->assign('account', $account);
        $this->tpl->display("account/account_edit.html");
    }

    /**
     * 用户权限管理页
     */
    public function RestrictAccount()
    {

        $account_id = Http_Validation::getInt('account_id');
        $account_info = AdminAccountDao::DB_GetAdminAccountInfoById($account_id);
        $account_restrict = array();
        if ($account_info['Restrict']) {
            $account_restrict = unserialize($account_info['Restrict']);
        }
        $all_menu = AdminMenuManager::$menus;

        $this->tpl->assign("account_info", $account_info);
        $this->tpl->assign("all_menu", $all_menu);
        $this->tpl->assign("account_restrict", $account_restrict);

        $this->tpl->display("account/account_restrict.html");
    }

    /**
     * 更新账户权限
     *  返回值 成功:true、失败:false
     */
    public function AjaxSaveRestrictAccount()
    {
        $restrict_str = Http_Validation::get('restrict_str');
        $account_id = Http_Validation::getInt('account_id');

        if ((!empty($account_id)) && (!empty($restrict_str))) {
            $restrict = array();
            $restrict_arr = explode(":", $restrict_str);
            foreach ($restrict_arr as $val) {
                $r_arr = explode("_", $val);
                $restrict[$r_arr[0]][$r_arr[1]][$r_arr[2]] = 1;
            }
            $account['Restrict'] = serialize($restrict);
            echo AdminAccountDao::DB_UpdateAdminAccountById($account_id, $account);
        } else {
            echo false;
        }
    }


    /**
     * 异步修改有效性
     */
    public function AjaxChangeStatus()
    {
        $account_id = Http_Validation::getInt('account_id');
        $account['Valid'] = Http_Validation::getInt('valid');
        echo AdminAccountDao::DB_UpdateAdminAccountById($account_id, $account, false);
    }


    /**
     * 异步校验用户名是否存在
     */
    public function AjaxCheckAccount()
    {
        $UserName= Http_Validation::getInput('UserName',20);
        echo AdminAccountDao::DB_GetAdminAccountInfoByUserName($UserName);
    }
}