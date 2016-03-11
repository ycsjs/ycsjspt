<?php

class GoodsDao extends BaseServer
{
    /**
     * 根据商品id，获取商品信息
     * @param $goods_id 商品id
     * @return array|null
     */
    public static function DB_GetGoodsInfoById($goods_id)
    {
        $goods_id = intval(trim($goods_id));
        if ((!empty($goods_id)) && (is_int($goods_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_sql = "select `ID`, `GoodsCode`, `NameCn`, `NameEn`, `NamePinYin`, `BrandId`, `Introduction`, `Detail`, `BuyPrice`, `SalePrice`, `PromotionPrice`, `MarketPrice`, `PromotionStartDate`, `PromotionEndDate`, `Notice`, `GoodsAgentId`, `CategoryId`, `GroupId`, `MoneyType`, `Hot`, `Promotion`, `Valid`, `ManagerId`, `Delivery`, `DeliveryPrice` from `goods` where ID=" . $goods_id;
            $db_obj->query($goods_sql);
            $goods_information = $db_obj->fetchRow_ASSOCS();
            return $goods_information;
        } else {
            return null;
        }
    }

    /**
     * 根据商品ids，获取商品信息
     * @param $goods_ids 以逗号隔开的商品id字符串
     * @return array|null
     */
    public static function DB_GetGoodsInfosByIds($goods_ids)
    {
        $goods_ids = trim($goods_ids, ",");
        if (!empty($goods_ids)) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_sql = "select `ID`, `GoodsCode`, `NameCn`, `NameEn`, `NamePinYin`, `BrandId`, `Introduction`, `Detail`, `BuyPrice`, `SalePrice`, `PromotionPrice`, `MarketPrice`, `PromotionStartDate`, `PromotionEndDate`, `Notice`, `GoodsAgentId`, `CategoryId`, `GroupId`, `MoneyType`, `Hot`, `Promotion`, `Valid`, `ManagerId`, `Delivery`, `DeliveryPrice` from `goods` where ID in (" . $goods_ids . ")";
            return $db_obj->getData_ASSOCS($goods_sql);
        } else {
            return null;
        }
    }

    /**
     * 新增商品
     * @param $goods 新增账户信息
     * @return boole 新增成功返回true，失败返回false
     */
    public static function DB_SaveGoods($goods)
    {
        $goods = array_filter($goods);
        if (!empty($goods)) {
            $account_login = Http_Handle::getSession('admin_account_info');
            if ((isset($account_login)) && (!empty($account_login))) {
                $goods['ManagerId'] = $account_login['ID'];
            }
            $db_obj = DB_MySQLi::getInstance();
            $goods_val_str = "";
            foreach (array_values($goods) as $val) {
                $goods_val_str .= "'" . $val . "',";
            }
            $goods_val_str = rtrim($goods_val_str, ",");
            $goods_sql = "insert into `goods`(" . implode(array_keys($goods), ",") . ") values (" . $goods_val_str . ")";
            return $db_obj->query($goods_sql);
        }
    }

    /**
     * 根据商品id,修改商品信息
     * @param $goods_id 商品id
     * @param $goods 商品信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateGoodsById($goods_id, $goods, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $goods = array_filter($goods);
        }
        if ((!empty($goods_id)) && (!empty($goods))) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_val_str = "";
            foreach ($goods as $key => $val) {
                $goods_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $goods_val_str = rtrim($goods_val_str, ",");
            $goods_sql = "update `goods` set $goods_val_str where ID=" . $goods_id;
            return $db_obj->query($goods_sql);
        }
    }


    /**
     * 分页获取所有的商品
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetGoodsByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $goods_sql = "select `ID`, `GoodsCode`, `NameCn`, `NameEn`, `NamePinYin`, `BrandId`, `Introduction`, `Detail`, `BuyPrice`, `SalePrice`, `PromotionPrice`, `MarketPrice`, `PromotionStartDate`, `PromotionEndDate`, `Notice`, `GoodsAgentId`, `CategoryId`, `GroupId`, `MoneyType`, `Hot`, `Promotion`, `Valid`, `ManagerId`, `Delivery`, `DeliveryPrice` from `goods` order by ID desc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($goods_sql);
    }


    /**
     * 商品图片
     * @param $goods_picture
     * @return null
     */
    public static function DB_SaveGoodsPicture($goods_picture)
    {
        $goods_picture = array_filter($goods_picture);
        if ((!empty($goods_picture)) && (isset($goods_picture['GoodsId'])) && (!empty($goods_picture['GoodsId']))) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_picture_val_str = "";
            foreach (array_values($goods_picture) as $val) {
                $goods_picture_val_str .= "'" . $val . "',";
            }
            $goods_picture_val_str = rtrim($goods_picture_val_str, ",");
            $goods_picture_sql = "insert into `goods_picture`(" . implode(array_keys($goods_picture), ",") . ") values (" . $goods_picture_val_str . ")";
            return $db_obj->query($goods_picture_sql);
        }
    }

    /**
     * 根据商品id获取商品图片
     * @param $goods_id
     * @return array|null
     */
    public static function DB_GetGoodsPictureByAid($goods_id)
    {
        $goods_picture = array();
        if (!empty($goods_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_picture_sql = "select `ID`, `GoodsId`, `PictureName`, `PictureTitle`, `PictureDescription`, `PictureSrc` from `goods_picture` where GoodsId=" . $goods_id . " order by ID";
            $goods_picture = $db_obj->getData_ASSOCS($goods_picture_sql);
        }
        return $goods_picture;
    }


    /**
     * 根据图片id删除商品图片
     * @param $pic_id
     * @return array|bool|null
     */
    public static function DB_DelGoodsPictureById($pic_id)
    {
        if (!empty($pic_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $del_goods_picture_sql = "delete from `goods_picture` where ID=" . $pic_id;
            return $db_obj->getData_ASSOCS($del_goods_picture_sql);
        } else {
            return false;
        }
    }


    /**
     * 根据条件统计商品记录数
     * @param string $whe 查询条件
     * @return mixed 符合条件的记录数
     */
    public static function countNumByWhe($whe = "")
    {
        $db = DB_MySQLi::getInstance();
        $count_sql = "select count(ID) as num from goods " . $whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }
}

?>