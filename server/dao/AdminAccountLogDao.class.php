<?php

class AdminAccountLogDao extends BaseServer {
    /**
     * 分页获取所有的管理员日志
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @param string $whe 条件
     * @return array|null
     */
    public static function DB_GetAdminAccountLogByPage($page = 1, $page_size = 20,$whe="")
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $account_log_sql = "select aal.ID as ID, aal.Description as Description, aal.CreationDate as CreationDate,aa.UserName
                                from `admin_account_log` as aal
                                left join admin_account  as aa
                                on aal.UserId=aa.ID
                                ".$whe."
                                order by aal.ID desc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($account_log_sql);
    }


    /**
     * 根据条件统计管理员记录数
     * @param string $whe 查询条件
     * @return mixed 符合条件的记录数
     */
    public static function countNumByWhe($whe = "")
    {
        $db = DB_MySQLi::getInstance();
        $count_sql = "select count(aa.ID) as num from `admin_account_log` as aal left join admin_account  as aa on aal.UserId=aa.ID ".$whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }

} 