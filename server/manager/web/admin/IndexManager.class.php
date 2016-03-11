<?php
/**
 * 用户登录Manager
 */
class IndexManager extends BaseServer
{

    /**
     * 校验管理员用户名、密码是否正确
     * @param $account
     * @param $password
     */
    public static function checkAdminAccountInfoByAccountAndPassword($account, $password)
    {
        $admin_account_info = AdminAccountDao::DB_GetAdminAccountInfoByAccountAndPassword($account, $password);
        if (!empty($admin_account_info)) {
            Http_Handle::setSession('admin_account_info', $admin_account_info);
        } else {
            Http_Handle::setSession('admin_account_info', false);
        }
    }
}