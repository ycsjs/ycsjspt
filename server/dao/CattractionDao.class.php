<?php

class CattractionDao extends BaseServer
{
    /**
     * 根据景点id，获取景点信息
     * @param $cattraction_id 景点id
     * @return array|null
     */
    public static function DB_GetCattractionInfoById($cattraction_id)
    {
        $cattraction_id = intval(trim($cattraction_id));
        if ((!empty($cattraction_id)) && (is_int($cattraction_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $cattraction_sql = "select `ID`, `NameCn`, `NameEn`, `NameCnShort`, `NamePinYin`, `NamePinYinShort`, `CityID`, `ThemeIds`, `Level`, `Tel`, `Fax`, `WebSite`, `Address`, `Traffic`, `TicketPrice`, `BusinessHours`, `Lng`, `Lat`, `Hot`, `ParkService`, `Description`, `Raiders`, `Note`, `MoneyType`, `Uid`, `CreateTime`, `UpdateTime`, `Valid` from `travel_cattraction` where ID=" . $cattraction_id;
            $db_obj->query($cattraction_sql);
            $cattraction_information = $db_obj->fetchRow_ASSOCS();
            return $cattraction_information;
        } else {
            return null;
        }
    }


    /**
     * 新增景点
     * @param $cattraction 新增账户信息
     * @return boole 新增成功返回true，失败返回false
     */
    public static function DB_SaveCattraction($cattraction)
    {
        $cattraction = array_filter($cattraction);
        if (!empty($cattraction)) {
            $account_login = Http_Handle::getSession('admin_account_info');
            if ((isset($account_login)) && (!empty($account_login))) {
                $cattraction['Uid'] = $account_login['ID'];
            }
            $db_obj = DB_MySQLi::getInstance();
            $cattraction_val_str = "";
            foreach (array_values($cattraction) as $val) {
                $cattraction_val_str .= "'" . $val . "',";
            }
            $cattraction_val_str = rtrim($cattraction_val_str, ",");
            $cattraction_sql = "insert into `travel_cattraction`(" . implode(array_keys($cattraction), ",") . ") values (" . $cattraction_val_str . ")";
            return $db_obj->query($cattraction_sql);
        }
    }

    /**
     * 根据景点id,修改景点信息
     * @param $cattraction_id 景点id
     * @param $cattraction 景点信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateCattractionById($cattraction_id, $cattraction, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $cattraction = array_filter($cattraction);
        }
        if ((!empty($cattraction_id)) && (!empty($cattraction))) {
            $db_obj = DB_MySQLi::getInstance();
            $cattraction_val_str = "";
            foreach ($cattraction as $key => $val) {
                $cattraction_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $cattraction_val_str = rtrim($cattraction_val_str, ",");
            $cattraction_sql = "update `travel_cattraction` set $cattraction_val_str where ID=" . $cattraction_id;
            return $db_obj->query($cattraction_sql);
        }
    }


    /**
     * 分页获取所有的景点
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetCattractionByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $cattraction_sql = "select `ID`, `NameCn`, `NameEn`, `NameCnShort`, `NamePinYin`, `NamePinYinShort`, `CityID`, `ThemeIds`, `Level`, `Tel`, `Fax`, `WebSite`, `Address`, `Traffic`, `TicketPrice`, `BusinessHours`, `Lng`, `Lat`, `Hot`, `ParkService`, `Description`, `Raiders`, `Note`, `MoneyType`, `Uid`, `CreateTime`, `UpdateTime`, `Valid` from `travel_cattraction` order by ID desc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($cattraction_sql);
    }


    /**
     * 景点图片
     * @param $cattraction_picture
     * @return null
     */
    public static function DB_SaveCattractionPicture($cattraction_picture)
    {
        $cattraction_picture = array_filter($cattraction_picture);
        if ((!empty($cattraction_picture)) && (isset($cattraction_picture['TravelCattractionId'])) && (!empty($cattraction_picture['TravelCattractionId']))) {
            $db_obj = DB_MySQLi::getInstance();
            $cattraction_picture_val_str = "";
            foreach (array_values($cattraction_picture) as $val) {
                $cattraction_picture_val_str .= "'" . $val . "',";
            }
            $cattraction_picture_val_str = rtrim($cattraction_picture_val_str, ",");
            $cattraction_picture_sql = "insert into `travel_cattraction_picture`(" . implode(array_keys($cattraction_picture), ",") . ") values (" . $cattraction_picture_val_str . ")";
            return $db_obj->query($cattraction_picture_sql);
        }
    }

    /**
     * 根据景点id获取景点图片
     * @param $attraction_id
     * @return array|null
     */
    public static function DB_GetCattractionPictureByAid($attraction_id)
    {
        $attraction_picture = array();
        if (!empty($attraction_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $cattraction_picture_sql = "select `ID`, `TravelCattractionId`, `PictureName`, `PictureTitle`, `PictureDescription`, `PictureSrc` from `travel_cattraction_picture` where TravelCattractionId=" . $attraction_id . " order by ID";
            $attraction_picture = $db_obj->getData_ASSOCS($cattraction_picture_sql);
        }
        return $attraction_picture;
    }


    /**
     * 根据图片id删除景点图片
     * @param $pic_id
     * @return array|bool|null
     */
    public static function DB_DelCattractionPictureById($pic_id)
    {
        if (!empty($pic_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $del_cattraction_picture_sql = "delete from `travel_cattraction_picture` where ID=" . $pic_id;
            return $db_obj->getData_ASSOCS($del_cattraction_picture_sql);
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
        $count_sql = "select count(ID) as num from travel_cattraction " . $whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }


}

?>