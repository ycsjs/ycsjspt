<?php


class AdminAccountDao extends BaseServer
{

    /**
     * 根据管理员账户id，获取管理员信息
     * @param $account_id 管理员id
     * @return array|null
     */
    public static function DB_GetAdminAccountInfoById($account_id)
    {
        $account_id = intval(trim($account_id));
        if ((!empty($account_id)) && (is_int($account_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $account_sql = "select `ID`, `UserName`, `RealName`, `PassWord`, `Email`, `QQ`, `Phone`, `Mobile`, `CteateTime`, `Valid`, `LastLoginTime`, `LastLoginIp`, `Restrict` from admin_account where ID=" . $account_id;
            $db_obj->query($account_sql);
            $account_information = $db_obj->fetchRow_ASSOCS();
            return $account_information;
        } else {
            return null;
        }
    }

    /**
     * 根据管理员账户ids，获取管理员信息
     * @param $account_ids 以逗号隔开的管理员id字符串
     * @return array|null
     */
    public static function DB_GetAdminAccountInfosByIds($account_ids)
    {
        $account_ids = trim($account_ids, ",");
        if (!empty($account_ids)) {
            $db_obj = DB_MySQLi::getInstance();
            $account_sql = "select `ID`, `UserName`, `RealName`, `PassWord`, `Email`, `QQ`, `Phone`, `Mobile`, `CteateTime`, `Valid`, `LastLoginTime`, `LastLoginIp`, `Restrict` from admin_account where ID in (" . $account_ids . ")";
            return $db_obj->getData_ASSOCS($account_sql);
        } else {
            return null;
        }
    }


    /**
     * 根据管理员账户username，获取管理员信息
     * @param $account_username 管理员用户名
     * @return array|null
     */
    public static function DB_GetAdminAccountInfoByUserName($account_username)
    {
        if (!empty($account_username)) {
            $db_obj = DB_MySQLi::getInstance();
            $account_sql = "select `ID`, `UserName`, `RealName`, `PassWord`, `Email`, `QQ`, `Phone`, `Mobile`, `CteateTime`, `Valid`, `LastLoginTime`, `LastLoginIp`, `Restrict` from admin_account where UserName='" . $account_username . "'";
            $db_obj->query($account_sql);
            $account_information = $db_obj->fetchRow_ASSOCS();
            return $account_information;
        } else {
            return null;
        }
    }


    /**
     * 分页获取所有的管理员账户
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetAdminAccountByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $account_sql = "select `ID`, `UserName`, `RealName`, `PassWord`, `Email`, `QQ`, `Phone`, `Mobile`, `CteateTime`, `Valid`, `LastLoginTime`, `LastLoginIp`, `Restrict` from admin_account order by ID desc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($account_sql);
    }

    /**
     * 根据管理员账户英文名及密码，获取管理员信息
     * @param $account 管理员英文账户
     * @param $password 管理员密码
     * @return array|null
     */
    public static function DB_GetAdminAccountInfoByAccountAndPassword($account, $password)
    {
        $account = trim($account);
        $password = md5($password);
        if ((!empty($account)) && (!empty($password))) {
            $db_obj = DB_MySQLi::getInstance();
            $account_sql = "select `ID`, `UserName`, `RealName`, `PassWord`, `Email`, `QQ`, `Phone`, `Mobile`, `CteateTime`, `Valid`, `LastLoginTime`, `LastLoginIp`, `Restrict` from admin_account where UserName='" . $account . "' and PassWord='" . $password . "' and Valid=1";
            $db_obj->query($account_sql);
            $account_information = $db_obj->fetchRow_ASSOCS();
            return $account_information;
        } else {
            return null;
        }
    }


    /**
     * 新增账户
     * @param $account 新增账户信息
     * @return boole 新增成功返回true，失败返回false
     */
    public static function DB_SaveAdminAccount($account)
    {
        $account = array_filter($account);
        if (!empty($account)) {
            $db_obj = DB_MySQLi::getInstance();
            $account_info = array();
            if ((isset($account['UserName'])) && (!empty($account['UserName']))) { //判断账户是否存在
                $account_info = self::DB_GetAdminAccountInfoByUserName($account['UserName']);
            }
            if (empty($account_info)) {
                $account_val_str = "";
                foreach (array_values($account) as $val) {
                    $account_val_str .= "'" . $val . "',";
                }
                $account_val_str = rtrim($account_val_str, ",");
                $account_sql = "insert into `admin_account`(" . implode(array_keys($account), ",") . ") values (" . $account_val_str . ")";
                return $db_obj->query($account_sql);
            } else {
                return false;
            }
        }
    }

    /**
     * 根据账户id,修改账户信息
     * @param $account_id 账户id
     * @param $account 账户信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateAdminAccountById($account_id, $account, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $account = array_filter($account);
        }
        if ((!empty($account_id)) && (!empty($account))) {
            $db_obj = DB_MySQLi::getInstance();
            $account_val_str = "";
            foreach ($account as $key => $val) {
                $account_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $account_val_str = rtrim($account_val_str, ",");
            $account_sql = "update `admin_account` set $account_val_str where ID=" . $account_id;
            return $db_obj->query($account_sql);
        }
    }

    /**
     * 根据条件统计管理员记录数
     * @param string $whe 查询条件
     * @return mixed 符合条件的记录数
     */
    public static function countNumByWhe($whe = "")
    {
        $db = DB_MySQLi::getInstance();
        $count_sql = "select count(ID) as num from admin_account " . $whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }

}