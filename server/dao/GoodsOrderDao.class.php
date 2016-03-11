<?php

class GoodsOrderDao extends BaseServer
{
    /**
     * 根据商品订单id，获取商品订单信息
     * @param $goods_order_id 商品订单id
     * @return array|null
     */
    public static function DB_GetGoodsOrderInfoById($goods_order_id)
    {
        $goods_order_id = intval(trim($goods_order_id));
        if ((!empty($goods_order_id)) && (is_int($goods_order_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_order_sql = "select `ID`, `OrderSign`, `Contact`, `Address`, `Phone`, `Email`, `GiUpBn`, `ExpressPrice`, `TaxationPrice`, `OtherPrice`, `TotalPrice`, `TotalPriceInclude`, `TotalPriceNotInclude`, `OrderSource`, `OtherRequest`, `Valid`, `InternalNotes`, `CreateDate`, `ClientOrderIp`, `PayState`, `ConfirmState`, `ExpressState` from `goods_order` where ID=" . $goods_order_id;
            $db_obj->query($goods_order_sql);
            $goods_order_information = $db_obj->fetchRow_ASSOCS();
            return $goods_order_information;
        } else {
            return null;
        }
    }


    /**
     * 新增商品订单
     * @param $goods_order 新增商品订单信息
     * @return boole 新增成功返回true，失败返回false
     */
    public static function DB_SaveGoodsOrder($goods_order)
    {
        $goods_order = array_filter($goods_order);
        if (!empty($goods_order)) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_order_val_str = "";
            foreach (array_values($goods_order) as $val) {
                $goods_order_val_str .= "'" . $val . "',";
            }
            $goods_order_val_str = rtrim($goods_order_val_str, ",");
            $goods_order_sql = "insert into `goods_order`(" . implode(array_keys($goods_order), ",") . ") values (" . $goods_order_val_str . ")";
            return $db_obj->query($goods_order_sql);
        }
    }

    /**
     * 根据商品订单id,修改商品订单信息
     * @param $goods_order_id 商品订单id
     * @param $goods_order 商品订单信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateGoodsOrderById($goods_order_id, $goods_order, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $goods_order = array_filter($goods_order);
        }
        if ((!empty($goods_order_id)) && (!empty($goods_order))) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_order_val_str = "";
            foreach ($goods_order as $key => $val) {
                $goods_order_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $goods_order_val_str = rtrim($goods_order_val_str, ",");
            $goods_order_sql = "update `goods_order` set $goods_order_val_str where ID=" . $goods_order_id;
            return $db_obj->query($goods_order_sql);
        }
    }


    /**
     * 分页获取所有的商品订单
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetGoodsOrderByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $goods_order_sql = "select `ID`, `OrderSign`, `Contact`, `Address`, `Phone`, `Email`, `GiUpBn`, `ExpressPrice`, `TaxationPrice`, `OtherPrice`, `TotalPrice`, `TotalPriceInclude`, `TotalPriceNotInclude`, `OrderSource`, `OtherRequest`, `Valid`, `InternalNotes`, `CreateDate`, `ClientOrderIp`, `PayState`, `ConfirmState`, `ExpressState` from `goods_order` order by ID desc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($goods_order_sql);
    }

    /**
     * 根据条件统计商品订单记录数
     * @param string $whe 查询条件
     * @return mixed 符合条件的记录数
     */
    public static function countNumByWhe($whe = "")
    {
        $db = DB_MySQLi::getInstance();
        $count_sql = "select count(ID) as num from goods_order " . $whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }

    /**
     * 获取商品订单操作日志
     * @param $order_id 订单id
     * @return array|null
     */
    public static function DB_GetGoodsOrderLogByOrderId($order_id)
    {
        $db_obj = DB_MySQLi::getInstance();
        $goods_order_log_sql = "select `ID`, `OrderId`, `AdminAccountId`, `OperationContent`, `OrderNotice`, `CreateDateTime` from `goods_order_logs` where OrderId=" . $order_id . " order by ID desc";
        return $db_obj->getData_ASSOCS($goods_order_log_sql);
    }

}

?>