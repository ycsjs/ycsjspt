<?php

class GoodsSupplierDao extends BaseServer
{
    /**
     * 根据商品供应商id，获取商品供应商信息
     * @param $goods_supplier_id 商品供应商id
     * @return array|null
     */
    public static function DB_GetGoodsSupplierInfoById($goods_supplier_id)
    {
        $goods_supplier_id = intval(trim($goods_supplier_id));
        if ((!empty($goods_supplier_id)) && (is_int($goods_supplier_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_supplier_sql = "select `ID`, `Name`, `Commission`, `StartDate`, `EndDate`, `Tel`, `Fax`, `Contact`, `BankAccount`, `BankName`, `BankPeople`, `Address`, `Notice`, `Valid` from goods_supplier where ID=" . $goods_supplier_id;
            $db_obj->query($goods_supplier_sql);
            $goods_supplier_information = $db_obj->fetchRow_ASSOCS();
            return $goods_supplier_information;
        } else {
            return null;
        }
    }


    /**
     * 新增商品供应商
     * @param $goods_supplier 新增账户信息
     * @return boole 新增成功返回true，失败返回false
     */
    public static function DB_SaveGoodsSupplier($goods_supplier)
    {
        $goods_supplier = array_filter($goods_supplier);
        if (!empty($goods_supplier)) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_supplier_val_str = "";
            foreach (array_values($goods_supplier) as $val) {
                $goods_supplier_val_str .= "'" . $val . "',";
            }
            $goods_supplier_val_str = rtrim($goods_supplier_val_str, ",");
            $goods_supplier_sql = "insert into `goods_supplier`(" . implode(array_keys($goods_supplier), ",") . ") values (" . $goods_supplier_val_str . ")";
            return $db_obj->query($goods_supplier_sql);
        }
    }

    /**
     * 根据商品供应商id,修改商品供应商信息
     * @param $goods_supplier_id 商品供应商id
     * @param $goods_supplier 商品供应商信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateGoodsSupplierById($goods_supplier_id, $goods_supplier, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $goods_supplier = array_filter($goods_supplier);
        }
        if ((!empty($goods_supplier_id)) && (!empty($goods_supplier))) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_supplier_val_str = "";
            foreach ($goods_supplier as $key => $val) {
                $goods_supplier_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $goods_supplier_val_str = rtrim($goods_supplier_val_str, ",");
            $goods_supplier_sql = "update `goods_supplier` set $goods_supplier_val_str where ID=" . $goods_supplier_id;
            return $db_obj->query($goods_supplier_sql);
        }
    }


    /**
     * 分页获取所有的商品供应商
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetGoodsSupplierByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $goods_supplier_sql = "select `ID`, `Name`, `Commission`, `StartDate`, `EndDate`, `Tel`, `Fax`, `Contact`, `BankAccount`, `BankName`, `BankPeople`, `Address`, `Notice`, `Valid` from `goods_supplier` order by ID desc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($goods_supplier_sql);
    }


    /**
     * 商品供应商文件
     * @param $goods_supplier_file
     * @return null
     */
    public static function DB_SaveGoodsSupplierFile($goods_supplier_file)
    {
        $goods_supplier_file = array_filter($goods_supplier_file);
        if ((!empty($goods_supplier_file)) && (isset($goods_supplier_file['SupplierId'])) && (!empty($goods_supplier_file['SupplierId']))) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_supplier_file_val_str = "";
            foreach (array_values($goods_supplier_file) as $val) {
                $goods_supplier_file_val_str .= "'" . $val . "',";
            }
            $goods_supplier_file_val_str = rtrim($goods_supplier_file_val_str, ",");
            $goods_supplier_file_sql = "insert into `goods_supplier_file`(" . implode(array_keys($goods_supplier_file), ",") . ") values (" . $goods_supplier_file_val_str . ")";
            return $db_obj->query($goods_supplier_file_sql);
        }
    }

    /**
     * 根据商品供应商id获取商品供应商文件
     * @param $goods_supplier_id
     * @return array|null
     */
    public static function DB_GetGoodsSupplierFileByAid($goods_supplier_id)
    {
        $goods_supplier_file = array();
        if (!empty($goods_supplier_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $goods_supplier_file_sql = "select `ID`, `SupplierId`, `FileName`, `FileTitle`, `FileDescription`, `FileSrc` from `goods_supplier_file` where SupplierId=" . $goods_supplier_id . " order by ID";
            $goods_supplier_file = $db_obj->getData_ASSOCS($goods_supplier_file_sql);
        }
        return $goods_supplier_file;
    }


    /**
     * 根据图片id删除商品供应商文件
     * @param $file_id
     * @return array|bool|null
     */
    public static function DB_DelGoodsSupplierFileById($file_id)
    {
        if (!empty($file_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $del_goods_supplier_file_sql = "delete from `goods_supplier_file` where ID=" . $file_id;
            return $db_obj->getData_ASSOCS($del_goods_supplier_file_sql);
        } else {
            return false;
        }
    }


    /**
     * 根据条件统计商品供应商记录数
     * @param string $whe 查询条件
     * @return mixed 符合条件的记录数
     */
    public static function countNumByWhe($whe = "")
    {
        $db = DB_MySQLi::getInstance();
        $count_sql = "select count(ID) as num from goods_supplier " . $whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }


}

?>