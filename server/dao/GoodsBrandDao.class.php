<?php

class GoodsBrandDao extends BaseServer
{
    /**
     * 根据商品品牌id，获取商品品牌信息
     * @param $goods_brand_id 商品品牌id
     * @return array|null
     */
    public static function DB_GetGoodsBrandInfoById($goods_brand_id)
    {
        $goods_brand_id = intval(trim($goods_brand_id));
        if ((!empty($goods_brand_id)) && (is_int($goods_brand_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_brand_sql = "select `ID`, `NameCn`, `NameEn`, `Introduction`, `Logo`, `Valid` from goods_brand where ID=" . $goods_brand_id;
            $db_obj->query($goods_brand_sql);
            $goods_brand_information = $db_obj->fetchRow_ASSOCS();
            return $goods_brand_information;
        } else {
            return null;
        }
    }


    /**
     * 新增商品品牌
     * @param $goods_brand 新增账户信息
     * @return boole 新增成功返回true，失败返回false
     */
    public static function DB_SaveGoodsBrand($goods_brand)
    {
        $goods_brand = array_filter($goods_brand);
        if (!empty($goods_brand)) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_brand_val_str = "";
            foreach (array_values($goods_brand) as $val) {
                $goods_brand_val_str .= "'" . $val . "',";
            }
            $goods_brand_val_str = rtrim($goods_brand_val_str, ",");
            $goods_brand_sql = "insert into `goods_brand`(" . implode(array_keys($goods_brand), ",") . ") values (" . $goods_brand_val_str . ")";
            return $db_obj->query($goods_brand_sql);
        }
    }

    /**
     * 根据商品品牌id,修改商品品牌信息
     * @param $goods_brand_id 商品品牌id
     * @param $goods_brand 商品品牌信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateGoodsBrandById($goods_brand_id, $goods_brand, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $goods_brand = array_filter($goods_brand);
        }
        if ((!empty($goods_brand_id)) && (!empty($goods_brand))) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_brand_val_str = "";
            foreach ($goods_brand as $key => $val) {
                $goods_brand_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $goods_brand_val_str = rtrim($goods_brand_val_str, ",");
            $goods_brand_sql = "update `goods_brand` set $goods_brand_val_str where ID=" . $goods_brand_id;
            return $db_obj->query($goods_brand_sql);
        }
    }


    /**
     * 分页获取所有的商品品牌
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetGoodsBrandByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $goods_brand_sql = "select `ID`, `NameCn`, `NameEn`, `Introduction`, `Logo`, `Valid` from `goods_brand` order by ID desc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($goods_brand_sql);
    }

    /**
     * 根据条件统计商品品牌记录数
     * @param string $whe 查询条件
     * @return mixed 符合条件的记录数
     */
    public static function countNumByWhe($whe = "")
    {
        $db = DB_MySQLi::getInstance();
        $count_sql = "select count(ID) as num from goods_brand " . $whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }


}

?>