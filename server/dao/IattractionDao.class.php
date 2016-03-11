<?php

class IattractionDao extends BaseServer
{
    /**
     * 根据景点id，获取景点信息
     * @param $iattraction_id 景点id
     * @return array|null
     */
    public static function DB_GetIattractionInfoById($iattraction_id)
    {
        $iattraction_id = intval(trim($iattraction_id));
        if ((!empty($iattraction_id)) && (is_int($iattraction_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $iattraction_sql = "select `ID`, `NameCn`, `NameEn`, `NameCnShort`, `NamePinYin`, `NamePinYinShort`, `CityID`, `ThemeIds`, `Level`, `Tel`, `Fax`, `WebSite`, `Address`, `Traffic`, `TicketPrice`, `BusinessHours`, `Lng`, `Lat`, `Hot`, `ParkService`, `Description`, `Raiders`, `Note`, `MoneyType`, `Uid`, `CreateTime`, `UpdateTime`, `Valid` from `travel_iattraction` where ID=" . $iattraction_id;
            $db_obj->query($iattraction_sql);
            $iattraction_information = $db_obj->fetchRow_ASSOCS();
            return $iattraction_information;
        } else {
            return null;
        }
    }


    /**
     * 新增景点
     * @param $iattraction 新增账户信息
     * @return boole 新增成功返回true，失败返回false
     */
    public static function DB_SaveIattraction($iattraction)
    {
        $iattraction = array_filter($iattraction);
        if (!empty($iattraction)) {
            $account_login = Http_Handle::getSession('admin_account_info');
            if ((isset($account_login)) && (!empty($account_login))) {
                $iattraction['Uid'] = $account_login['ID'];
            }
            $db_obj = DB_MySQLi::getInstance();
            $iattraction_val_str = "";
            foreach (array_values($iattraction) as $val) {
                $iattraction_val_str .= "'" . $val . "',";
            }
            $iattraction_val_str = rtrim($iattraction_val_str, ",");
            $iattraction_sql = "insert into `travel_iattraction`(" . implode(array_keys($iattraction), ",") . ") values (" . $iattraction_val_str . ")";
            return $db_obj->query($iattraction_sql);
        }
    }

    /**
     * 根据景点id,修改景点信息
     * @param $iattraction_id 景点id
     * @param $iattraction 景点信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateIattractionById($iattraction_id, $iattraction, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $iattraction = array_filter($iattraction);
        }
        if ((!empty($iattraction_id)) && (!empty($iattraction))) {
            $db_obj = DB_MySQLi::getInstance();
            $iattraction_val_str = "";
            foreach ($iattraction as $key => $val) {
                $iattraction_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $iattraction_val_str = rtrim($iattraction_val_str, ",");
            $iattraction_sql = "update `travel_iattraction` set $iattraction_val_str where ID=" . $iattraction_id;
            return $db_obj->query($iattraction_sql);
        }
    }


    /**
     * 分页获取所有的景点
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetIattractionByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $iattraction_sql = "select `ID`, `NameCn`, `NameEn`, `NameCnShort`, `NamePinYin`, `NamePinYinShort`, `CityID`, `ThemeIds`, `Level`, `Tel`, `Fax`, `WebSite`, `Address`, `Traffic`, `TicketPrice`, `BusinessHours`, `Lng`, `Lat`, `Hot`, `ParkService`, `Description`, `Raiders`, `Note`, `MoneyType`, `Uid`, `CreateTime`, `UpdateTime`, `Valid` from `travel_iattraction` order by ID desc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($iattraction_sql);
    }


    /**
     * 景点图片
     * @param $iattraction_picture
     * @return null
     */
    public static function DB_SaveIattractionPicture($iattraction_picture)
    {
        $iattraction_picture = array_filter($iattraction_picture);
        if ((!empty($iattraction_picture)) && (isset($iattraction_picture['TravelIattractionId'])) && (!empty($iattraction_picture['TravelIattractionId']))) {
            $db_obj = DB_MySQLi::getInstance();
            $iattraction_picture_val_str = "";
            foreach (array_values($iattraction_picture) as $val) {
                $iattraction_picture_val_str .= "'" . $val . "',";
            }
            $iattraction_picture_val_str = rtrim($iattraction_picture_val_str, ",");
            $iattraction_picture_sql = "insert into `travel_iattraction_picture`(" . implode(array_keys($iattraction_picture), ",") . ") values (" . $iattraction_picture_val_str . ")";
            return $db_obj->query($iattraction_picture_sql);
        }
    }

    /**
     * 根据景点id获取景点图片
     * @param $attraction_id
     * @return array|null
     */
    public static function DB_GetIattractionPictureByAid($attraction_id)
    {
        $attraction_picture = array();
        if (!empty($attraction_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $iattraction_picture_sql = "select `ID`, `TravelIattractionId`, `PictureName`, `PictureTitle`, `PictureDescription`, `PictureSrc` from `travel_iattraction_picture` where TravelIattractionId=" . $attraction_id . " order by ID";
            $attraction_picture = $db_obj->getData_ASSOCS($iattraction_picture_sql);
        }
        return $attraction_picture;
    }


    /**
     * 根据图片id删除景点图片
     * @param $pic_id
     * @return array|bool|null
     */
    public static function DB_DelIattractionPictureById($pic_id)
    {
        if (!empty($pic_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $del_iattraction_picture_sql = "delete from `travel_iattraction_picture` where ID=" . $pic_id;
            return $db_obj->getData_ASSOCS($del_iattraction_picture_sql);
        } else {
            return false;
        }
    }


    /**
     * 根据条件统计景点记录数
     * @param string $whe 查询条件
     * @return mixed 符合条件的记录数
     */
    public static function countNumByWhe($whe = "")
    {
        $db = DB_MySQLi::getInstance();
        $count_sql = "select count(ID) as num from travel_iattraction " . $whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }


}

?>