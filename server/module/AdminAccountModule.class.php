<?php

class AdminAccountModule extends BaseServer
{
    public static function Cache_AccountInfoById($account_id)
    {
        return AdminAccountDao::DB_GetAdminAccountInfoById($account_id);
    }
}