<?php

class TravelSupplierDao extends BaseServer
{
    /**
     * 根据旅游供应商id，获取旅游供应商信息
     * @param $travel_supplier_id 旅游供应商id
     * @return array|null
     */
    public static function DB_GetTravelSupplierInfoById($travel_supplier_id)
    {
        $travel_supplier_id = intval(trim($travel_supplier_id));
        if ((!empty($travel_supplier_id)) && (is_int($travel_supplier_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $travel_supplier_sql = "select `ID`, `Name`, `Commission`, `StartDate`, `EndDate`, `Tel`, `Fax`, `Contact`, `BankAccount`, `BankName`, `BankPeople`, `Address`, `Notice`, `Valid` from travel_supplier where ID=" . $travel_supplier_id;
            $db_obj->query($travel_supplier_sql);
            $travel_supplier_information = $db_obj->fetchRow_ASSOCS();
            return $travel_supplier_information;
        } else {
            return null;
        }
    }


    /**
     * 新增旅游供应商
     * @param $travel_supplier 新增供应商信息
     * @return boole 新增成功返回true，失败返回false
     */
    public static function DB_SaveTravelSupplier($travel_supplier)
    {
        $travel_supplier = array_filter($travel_supplier);
        if (!empty($travel_supplier)) {
            $db_obj = DB_MySQLi::getInstance();
            $travel_supplier_val_str = "";
            foreach (array_values($travel_supplier) as $val) {
                $travel_supplier_val_str .= "'" . $val . "',";
            }
            $travel_supplier_val_str = rtrim($travel_supplier_val_str, ",");
            $travel_supplier_sql = "insert into `travel_supplier`(" . implode(array_keys($travel_supplier), ",") . ") values (" . $travel_supplier_val_str . ")";
            return $db_obj->query($travel_supplier_sql);
        }
    }

    /**
     * 根据旅游供应商id,修改旅游供应商信息
     * @param $travel_supplier_id 旅游供应商id
     * @param $travel_supplier 旅游供应商信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateTravelSupplierById($travel_supplier_id, $travel_supplier, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $travel_supplier = array_filter($travel_supplier);
        }
        if ((!empty($travel_supplier_id)) && (!empty($travel_supplier))) {
            $db_obj = DB_MySQLi::getInstance();
            $travel_supplier_val_str = "";
            foreach ($travel_supplier as $key => $val) {
                $travel_supplier_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $travel_supplier_val_str = rtrim($travel_supplier_val_str, ",");
            $travel_supplier_sql = "update `travel_supplier` set $travel_supplier_val_str where ID=" . $travel_supplier_id;
            return $db_obj->query($travel_supplier_sql);
        }
    }


    /**
     * 分页获取所有的旅游供应商
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetTravelSupplierByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $travel_supplier_sql = "select `ID`, `Name`, `Commission`, `StartDate`, `EndDate`, `Tel`, `Fax`, `Contact`, `BankAccount`, `BankName`, `BankPeople`, `Address`, `Notice`, `Valid` from `travel_supplier` order by ID desc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($travel_supplier_sql);
    }


    /**
     * 旅游供应商文件
     * @param $travel_supplier_file
     * @return null
     */
    public static function DB_SaveTravelSupplierFile($travel_supplier_file)
    {
        $travel_supplier_file = array_filter($travel_supplier_file);
        if ((!empty($travel_supplier_file)) && (isset($travel_supplier_file['SupplierId'])) && (!empty($travel_supplier_file['SupplierId']))) {
            $db_obj = DB_MySQLi::getInstance();
            $travel_supplier_file_val_str = "";
            foreach (array_values($travel_supplier_file) as $val) {
                $travel_supplier_file_val_str .= "'" . $val . "',";
            }
            $travel_supplier_file_val_str = rtrim($travel_supplier_file_val_str, ",");
            $travel_supplier_file_sql = "insert into `travel_supplier_file`(" . implode(array_keys($travel_supplier_file), ",") . ") values (" . $travel_supplier_file_val_str . ")";
            return $db_obj->query($travel_supplier_file_sql);
        }
    }

    /**
     * 根据旅游供应商id获取旅游供应商文件
     * @param $travel_supplier_id
     * @return array|null
     */
    public static function DB_GetTravelSupplierFileByAid($travel_supplier_id)
    {
        $travel_supplier_file = array();
        if (!empty($travel_supplier_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $travel_supplier_file_sql = "select `ID`, `SupplierId`, `FileName`, `FileTitle`, `FileDescription`, `FileSrc` from `travel_supplier_file` where SupplierId=" . $travel_supplier_id . " order by ID";
            $travel_supplier_file = $db_obj->getData_ASSOCS($travel_supplier_file_sql);
        }
        return $travel_supplier_file;
    }


    /**
     * 根据图片id删除旅游供应商文件
     * @param $file_id
     * @return array|bool|null
     */
    public static function DB_DelTravelSupplierFileById($file_id)
    {
        if (!empty($file_id)) {
            $db_obj = DB_MySQLi::getInstance();
            $del_travel_supplier_file_sql = "delete from `travel_supplier_file` where ID=" . $file_id;
            return $db_obj->getData_ASSOCS($del_travel_supplier_file_sql);
        } else {
            return false;
        }
    }


    /**
     * 根据条件统计旅游供应商记录数
     * @param string $whe 查询条件
     * @return mixed 符合条件的记录数
     */
    public static function countNumByWhe($whe = "")
    {
        $db = DB_MySQLi::getInstance();
        $count_sql = "select count(ID) as num from travel_supplier " . $whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }


}

?>