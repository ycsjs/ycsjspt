<?php

/**
 * 商品基础数据
 */
class GoodsBaseDao extends BaseServer
{

    //商品类型部分[S]
    /**
     * 根据商品类型id，获取商品类型信息
     * @param $category_id 商品类型id
     * @return null|对应的数据
     */
    public static function DB_GetGoodsCategoryInfoById($category_id)
    {
        $category_id = intval(trim($category_id));
        if ((!empty($category_id)) && (is_int($category_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $category_sql = "select `ID`, `CategoryName`, `Valid`, `ParentId` from goods_category where ID=" . $category_id;
            $db_obj->query($category_sql);
            $category_information = $db_obj->fetchRow_ASSOCS();
            return $category_information;
        } else {
            return null;
        }
    }

    /**
     * 根据账户id,修改账户信息
     * @param $category_id 商品类型id
     * @param $category 类型信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateGoodsCategoryById($category_id, $category, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $category = array_filter($category);
        }
        if ((!empty($category_id)) && (!empty($category))) {
            $db_obj = DB_MySQLi::getInstance();
            $category_val_str = "";
            foreach ($category as $key => $val) {
                $category_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $category_val_str = rtrim($category_val_str, ",");
            $category_sql = "update `goods_category` set $category_val_str where ID=" . $category_id;
            return $db_obj->query($category_sql);
        }
    }


    /**
     * 根据商品类型名称，获取商品类型信息
     * @param $category_name 商品类型名称
     * @return array|null
     */
    public static function DB_GetGoodsCategoryInfoByCategoryName($category_name)
    {
        if (!empty($category_name)) {
            $db_obj = DB_MySQLi::getInstance();
            $category_sql = "select `ID`, `CategoryName`, `Valid`, `ParentId` from goods_category where CategoryName='" . $category_name . "'";
            $db_obj->query($category_sql);
            $category_information = $db_obj->fetchRow_ASSOCS();
            return $category_information;
        } else {
            return null;
        }
    }

    /**
     * 新增商品类型
     * @param $category 新增商品类型信息
     * @return bool|null 新增成功返回true，失败返回false
     */
    public static function DB_SaveGoodsCategory($category)
    {
        $category = array_filter($category);
        if (!empty($category)) {
            $db_obj = DB_MySQLi::getInstance();
            $category_info = array();
            if ((isset($category['CategoryName'])) && (!empty($category['CategoryName']))) { //判断商品类型是否存在
                $category_info = self::DB_GetGoodsCategoryInfoByCategoryName($category['CategoryName']);
            }
            if (empty($category_info)) {
                $category_val_str = "";
                foreach (array_values($category) as $val) {
                    $category_val_str .= "'" . $val . "',";
                }
                $category_val_str = rtrim($category_val_str, ",");
                $category_sql = "insert into `goods_category`(" . implode(array_keys($category), ",") . ") values (" . $category_val_str . ")";
                return $db_obj->query($category_sql);
            } else {
                return false;
            }
        }
    }


    /**
     * 获取所有的一级商品类型
     * @return array|null
     */
    public static function DB_GetFirstGoodsCategory()
    {
        $db_obj = DB_MySQLi::getInstance();
        $goods_category_sql = "select `ID`, `CategoryName`, `Valid`, `ParentId` from goods_category where ParentId=0 order by ID asc";
        return $db_obj->getData_ASSOCS($goods_category_sql);
    }

    /**
     * 分页获取所有的商品类型
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetGoodsCategoryByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $goods_category_sql = "select `ID`, `CategoryName`, `Valid`, `ParentId` from goods_category order by ID asc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($goods_category_sql);
    }

    //商品类型部分[E]


    //商品类型部分[S]
    /**
     * 根据目标群体id，获取目标群体信息
     * @param $group_id 目标群体id
     * @return null|对应的数据
     */
    public static function DB_GetGoodsGroupInfoById($group_id)
    {
        $group_id = intval(trim($group_id));
        if ((!empty($group_id)) && (is_int($group_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $group_sql = "select `ID`, `GroupName`, `Valid`, `ParentId` from goods_group where ID=" . $group_id;
            $db_obj->query($group_sql);
            $group_information = $db_obj->fetchRow_ASSOCS();
            return $group_information;
        } else {
            return null;
        }
    }

    /**
     * 根据账户id,修改账户信息
     * @param $group_id 目标群体id
     * @param $group 类型信息
     * @param bool $filter 过滤空元素标志
     * @return null 修改成功返回true，失败返回false
     */
    public static function DB_UpdateGoodsGroupById($group_id, $group, $filter = true)
    {
        if ($filter) { //过滤为空的元素
            $group = array_filter($group);
        }
        if ((!empty($group_id)) && (!empty($group))) {
            $db_obj = DB_MySQLi::getInstance();
            $group_val_str = "";
            foreach ($group as $key => $val) {
                $group_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $group_val_str = rtrim($group_val_str, ",");
            $group_sql = "update `goods_group` set $group_val_str where ID=" . $group_id;
            return $db_obj->query($group_sql);
        }
    }


    /**
     * 根据目标群体名称，获取目标群体信息
     * @param $group_name 目标群体名称
     * @return array|null
     */
    public static function DB_GetGoodsGroupInfoByGroupName($group_name)
    {
        if (!empty($group_name)) {
            $db_obj = DB_MySQLi::getInstance();
            $group_sql = "select `ID`, `GroupName`, `Valid`, `ParentId` from goods_group where GroupName='" . $group_name . "'";
            $db_obj->query($group_sql);
            $group_information = $db_obj->fetchRow_ASSOCS();
            return $group_information;
        } else {
            return null;
        }
    }

    /**
     * 新增目标群体
     * @param $group 新增目标群体信息
     * @return bool|null 新增成功返回true，失败返回false
     */
    public static function DB_SaveGoodsGroup($group)
    {
        $group = array_filter($group);
        if (!empty($group)) {
            $db_obj = DB_MySQLi::getInstance();
            $group_info = array();
            if ((isset($group['GroupName'])) && (!empty($group['GroupName']))) { //判断目标群体是否存在
                $group_info = self::DB_GetGoodsGroupInfoByGroupName($group['GroupName']);
            }
            if (empty($group_info)) {
                $group_val_str = "";
                foreach (array_values($group) as $val) {
                    $group_val_str .= "'" . $val . "',";
                }
                $group_val_str = rtrim($group_val_str, ",");
                $group_sql = "insert into `goods_group`(" . implode(array_keys($group), ",") . ") values (" . $group_val_str . ")";
                return $db_obj->query($group_sql);
            } else {
                return false;
            }
        }
    }


    /**
     * 获取所有的一级目标群体
     * @return array|null
     */
    public static function DB_GetFirstGoodsGroup()
    {
        $db_obj = DB_MySQLi::getInstance();
        $goods_group_sql = "select `ID`, `GroupName`, `Valid`, `ParentId` from goods_group where ParentId=0 order by ID asc";
        return $db_obj->getData_ASSOCS($goods_group_sql);
    }

    /**
     * 分页获取所有的目标群体
     * @param int $page 页码
     * @param int $page_size 分页大小
     * @return array|null
     */
    public static function DB_GetGoodsGroupByPage($page = 1, $page_size = 20)
    {
        $page = empty($page) ? 1 : $page;
        $db_obj = DB_MySQLi::getInstance();
        $row = ($page - 1) * $page_size;
        $offset = $page_size;
        $goods_group_sql = "select `ID`, `GroupName`, `Valid`, `ParentId` from goods_group order by ID asc  limit $row,$offset";
        return $db_obj->getData_ASSOCS($goods_group_sql);
    }
    //商品类型部分[E]

    /**
     * 根据条件统计记录数
     * @param string $whe 查询条件
     * @param string $table 查询的表
     * @return mixed 符合条件的记录数
     */
    public static function countNumByWhe($table, $whe = "")
    {
        $db = DB_MySQLi::getInstance();
        $count_sql = "select count(ID) as num from " . $table . $whe;
        $db->query($count_sql);
        $count_return = $db->fetchRow_ASSOCS();
        return $count_return['num'];
    }
} 