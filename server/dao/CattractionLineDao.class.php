<?php

class CattractionLineDao extends BaseServer
{

    /**
     * 根据线路id，获取线路信息
     * @param $cattraction_line_id 线路id
     * @return array|null
     */
    public static function DB_GetCattractionLineInfoById($cattraction_line_id)
    {
        $cattraction_line_id = intval(trim($cattraction_line_id));
        if ((!empty($cattraction_line_id)) && (is_int($cattraction_line_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $cattraction_line_sql = "select `ID`, `LineCode`, `Title`, `DayNum`, `Introduction`, `Detail`, `AdultBuyPrice`, `AdultSellPrice`, `ChildrenBuyPrice`, `ChildrenSellPrice`, `PriceInclude`, `PriceNoInclude`, `StartDate`, `EndDate`, `Schedule`, `Notice`, `GoOff`, `TravelAgentId`, `ThemeIds`, `MoneyType`, `Hot`, `Valid` from `travel_cline`  where ID=" . $cattraction_line_id;
            $db_obj->query($cattraction_line_sql);
            $cattraction_line_information = $db_obj->fetchRow_ASSOCS();
            return $cattraction_line_information;
        } else {
            return null;
        }
    }

    /**
     * 根据线路id，获取线路信息
     * @param $cattraction_line_ids 以逗号隔开的线路id
     * @return array|null
     */
    public static function DB_GetCattractionLineInfosByIds($cattraction_line_ids)
    {
        $cattraction_line_ids = intval(trim($cattraction_line_ids), ",");
        if (!empty($cattraction_line_ids)) {
            $db_obj = DB_MySQLi::getInstance();
            $cattraction_line_sql = "select `ID`, `LineCode`, `Title`, `DayNum`, `Introduction`, `Detail`, `AdultBuyPrice`, `AdultSellPrice`, `ChildrenBuyPrice`, `ChildrenSellPrice`, `PriceInclude`, `PriceNoInclude`, `StartDate`, `EndDate`, `Schedule`, `Notice`, `GoOff`, `TravelAgentId`, `ThemeIds`, `MoneyType`, `Hot`, `Valid` from `travel_cline`  where ID in (" . $cattraction_line_ids . ")";
            $db_obj->query($cattraction_line_sql);
            return $db_obj->fetchRow_ASSOCS();
        } else {
            return null;
        }
    }

    /**
     * 新增线路
     * @param $cattraction_line 新增账户信息
     * @return boole 新增成功返回true，失败返回false
     */
    public static function DB_SaveCattractionLine($cattraction_line)
    {
        $cattraction_line = array_filter($cattraction_line);
        if (!empty($cattraction_line)) {
            $db_obj = DB_MySQLi::getInstance();
            $cattraction_line_val_str = "";
            foreach (array_values($cattraction_line) as $val) {
                $cattraction_line_val_str .= "'" . $val . "',";
            }
            $cattraction_line_val_str = rtrim($cattraction_line_val_str, ",");
            $cattraction_line_sql = "insert into `travel_cline`(" . implode(array_keys($cattraction_line), ",") . ") values (" . $cattraction_line_val_str . ")";
            return $db_obj->query($cattraction_line_sql);
        }
    }


    /**
     * 根据线路id,修改线路信息
     * @param $cattraction_line_id 线路id
     * @param $cattraction_line 线路信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateCattractionLineById($cattraction_line_id, $cattraction_line, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $cattraction_line = array_filter($cattraction_line);
        }
        if ((!empty($cattraction_line_id)) && (!empty($cattraction_line))) {
            $db_obj = DB_MySQLi::getInstance();
            $cattraction_line_val_str = "";
            foreach ($cattraction_line as $key => $val) {
                $cattraction_line_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $cattraction_line_val_str = rtrim($cattraction_line_val_str, ",");
            $cattraction_sql = "update `travel_cline` set $cattraction_line_val_str where ID=" . $cattraction_line_id;
            return $db_obj->query($cattraction_sql);
        }
    }


    /**
     * 分页获取所有的线路
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetCattractionLineByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $cattraction_line_sql = "select `ID`, `LineCode`, `Title`, `DayNum`, `Introduction`, `Detail`, `AdultBuyPrice`, `AdultSellPrice`, `ChildrenBuyPrice`, `ChildrenSellPrice`, `PriceInclude`, `PriceNoInclude`, `StartDate`, `EndDate`, `Schedule`, `Notice`, `GoOff`, `TravelAgentId`, `ThemeIds`, `MoneyType`, `Hot`, `Valid` from `travel_cline`  order by ID desc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($cattraction_line_sql);
    }


    /**
     * 线路图片
     * @param $cattraction_line_picture
     * @return null
     */
    public static function DB_SaveCattractionLinePicture($cattraction_line_picture)
    {
        $$cattraction_line_picture = array_filter($cattraction_line_picture);
        if ((!empty($cattraction_line_picture)) && (isset($cattraction_line_picture['TravelCattractionLineId'])) && (!empty($cattraction_line_picture['TravelCattractionLineId']))) {
            $db_obj = DB_MySQLi::getInstance();
            $cattraction_line_picture_val_str = "";
            foreach (array_values($cattraction_line_picture) as $val) {
                $cattraction_line_picture_val_str .= "'" . $val . "',";
            }
            $cattraction_line_picture_val_str = rtrim($cattraction_line_picture_val_str, ",");
            $cattraction_line_picture_sql = "insert into `travel_cline_picture`(" . implode(array_keys($cattraction_line_picture), ",") . ") values (" . $cattraction_line_picture_val_str . ")";
            return $db_obj->query($cattraction_line_picture_sql);
        }
    }

    /**
     * 根据线路id获取景点图片
     * @param $attraction_line_id
     * @return array|null
     */
    public static function DB_GetCattractionLinePictureByAid($attraction_line_id)
    {
        $attraction_line_picture = array();
        if (!empty($attraction_line_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $cattraction_line_picture_sql = "select `ID`, `TravelCattractionLineId`, `PictureName`, `PictureTitle`, `PictureDescription`, `PictureSrc` FROM `travel_cline_picture` where TravelCattractionLineId=" . $attraction_line_id . " order by ID";
            $attraction_line_picture = $db_obj->getData_ASSOCS($cattraction_line_picture_sql);
        }
        return $attraction_line_picture;
    }

    /**
     * 根据图片id删除线路图片
     * @param $pic_id
     * @return array|bool|null
     */
    public static function DB_DelCattractionLinePictureById($pic_id)
    {
        if (!empty($pic_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $del_cattraction_line_picture_sql = "delete from `travel_cline_picture` where ID=" . $pic_id;
            return $db_obj->getData_ASSOCS($del_cattraction_line_picture_sql);
        } else {
            return false;
        }
    }

    /**
     * 根据条件统计线路记录数
     * @param string $whe 查询条件
     * @return mixed 符合条件的记录数
     */
    public static function countNumByWhe($whe = "")
    {
        $db = DB_MySQLi::getInstance();
        $count_sql = "select count(ID) as num from travel_cline " . $whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }

} 