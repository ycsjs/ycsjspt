<?php

class IattractionLineDao extends BaseServer
{

    /**
     * 根据线路id，获取线路信息
     * @param $iattraction_line_id 线路id
     * @return array|null
     */
    public static function DB_GetIattractionLineInfoById($iattraction_line_id)
    {
        $iattraction_line_id = intval(trim($iattraction_line_id));
        if ((!empty($iattraction_line_id)) && (is_int($iattraction_line_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $iattraction_line_sql = "select `ID`, `LineCode`, `Title`, `DayNum`, `Introduction`, `Detail`, `AdultBuyPrice`, `AdultSellPrice`, `ChildrenBuyPrice`, `ChildrenSellPrice`, `PriceInclude`, `PriceNoInclude`, `StartDate`, `EndDate`, `Schedule`, `Notice`, `GoOff`, `TravelAgentId`, `ThemeIds`, `MoneyType`, `Hot`, `Valid` from `travel_iline`  where ID=" . $iattraction_line_id;
            $db_obj->query($iattraction_line_sql);
            $iattraction_line_information = $db_obj->fetchRow_ASSOCS();
            return $iattraction_line_information;
        } else {
            return null;
        }
    }


    /**
     * 根据线路ids，获取线路信息
     * @param $iattraction_line_ids 以逗号隔开的线路id串
     * @return array|null
     */
    public static function DB_GetIattractionLineInfosByIds($iattraction_line_ids)
    {
        $iattraction_line_ids = trim($iattraction_line_ids, ",");
        if (!empty($iattraction_line_ids)) {
            $db_obj = DB_MySQLi::getInstance();
            $iattraction_line_sql = "select `ID`, `LineCode`, `Title`, `DayNum`, `Introduction`, `Detail`, `AdultBuyPrice`, `AdultSellPrice`, `ChildrenBuyPrice`, `ChildrenSellPrice`, `PriceInclude`, `PriceNoInclude`, `StartDate`, `EndDate`, `Schedule`, `Notice`, `GoOff`, `TravelAgentId`, `ThemeIds`, `MoneyType`, `Hot`, `Valid` from `travel_iline`  where ID in (" . $iattraction_line_ids . ")";
            $db_obj->query($iattraction_line_sql);
            return $db_obj->fetchRow_ASSOCS();
        } else {
            return null;
        }
    }


    /**
     * 新增线路
     * @param $iattraction_line 新增账户信息
     * @return boole 新增成功返回true，失败返回false
     */
    public static function DB_SaveIattractionLine($iattraction_line)
    {
        $iattraction_line = array_filter($iattraction_line);
        if (!empty($iattraction_line)) {
            $db_obj = DB_MySQLi::getInstance();
            $iattraction_line_val_str = "";
            foreach (array_values($iattraction_line) as $val) {
                $iattraction_line_val_str .= "'" . $val . "',";
            }
            $iattraction_line_val_str = rtrim($iattraction_line_val_str, ",");
            $iattraction_line_sql = "insert into `travel_iline`(" . implode(array_keys($iattraction_line), ",") . ") values (" . $iattraction_line_val_str . ")";
            return $db_obj->query($iattraction_line_sql);
        }
    }


    /**
     * 根据线路id,修改线路信息
     * @param $iattraction_line_id 线路id
     * @param $iattraction_line 线路信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateIattractionLineById($iattraction_line_id, $iattraction_line, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $iattraction_line = array_filter($iattraction_line);
        }
        if ((!empty($iattraction_line_id)) && (!empty($iattraction_line))) {
            $db_obj = DB_MySQLi::getInstance();
            $iattraction_line_val_str = "";
            foreach ($iattraction_line as $key => $val) {
                $iattraction_line_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $iattraction_line_val_str = rtrim($iattraction_line_val_str, ",");
            $iattraction_sql = "update `travel_iline` set $iattraction_line_val_str where ID=" . $iattraction_line_id;
            return $db_obj->query($iattraction_sql);
        }
    }


    /**
     * 分页获取所有的线路
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetIattractionLineByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $iattraction_line_sql = "select `ID`, `LineCode`, `Title`, `DayNum`, `Introduction`, `Detail`, `AdultBuyPrice`, `AdultSellPrice`, `ChildrenBuyPrice`, `ChildrenSellPrice`, `PriceInclude`, `PriceNoInclude`, `StartDate`, `EndDate`, `Schedule`, `Notice`, `GoOff`, `TravelAgentId`, `ThemeIds`, `MoneyType`, `Hot`, `Valid` from `travel_iline`  order by ID desc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($iattraction_line_sql);
    }


    /**
     * 线路图片
     * @param $iattraction_line_picture
     * @return null
     */
    public static function DB_SaveIattractionLinePicture($iattraction_line_picture)
    {
        $$iattraction_line_picture = array_filter($iattraction_line_picture);
        if ((!empty($iattraction_line_picture)) && (isset($iattraction_line_picture['TravelIattractionLineId'])) && (!empty($iattraction_line_picture['TravelIattractionLineId']))) {
            $db_obj = DB_MySQLi::getInstance();
            $iattraction_line_picture_val_str = "";
            foreach (array_values($iattraction_line_picture) as $val) {
                $iattraction_line_picture_val_str .= "'" . $val . "',";
            }
            $iattraction_line_picture_val_str = rtrim($iattraction_line_picture_val_str, ",");
            $iattraction_line_picture_sql = "insert into `travel_iline_picture`(" . implode(array_keys($iattraction_line_picture), ",") . ") values (" . $iattraction_line_picture_val_str . ")";
            return $db_obj->query($iattraction_line_picture_sql);
        }
    }

    /**
     * 根据线路id获取景点图片
     * @param $attraction_line_id
     * @return array|null
     */
    public static function DB_GetIattractionLinePictureByAid($attraction_line_id)
    {
        $attraction_line_picture = array();
        if (!empty($attraction_line_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $iattraction_line_picture_sql = "select `ID`, `TravelIattractionLineId`, `PictureName`, `PictureTitle`, `PictureDescription`, `PictureSrc` FROM `travel_iline_picture` where TravelIattractionLineId=" . $attraction_line_id . " order by ID";
            $attraction_line_picture = $db_obj->getData_ASSOCS($iattraction_line_picture_sql);
        }
        return $attraction_line_picture;
    }

    /**
     * 根据图片id删除线路图片
     * @param $pic_id
     * @return array|bool|null
     */
    public static function DB_DelIattractionLinePictureById($pic_id)
    {
        if (!empty($pic_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $del_iattraction_line_picture_sql = "delete from `travel_iline_picture` where ID=" . $pic_id;
            return $db_obj->getData_ASSOCS($del_iattraction_line_picture_sql);
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
        $count_sql = "select count(ID) as num from travel_iline " . $whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }

} 