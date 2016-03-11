<?php


class GoodsBaseController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    //商品类型部分[S]
    /**
     * 编辑商品类型
     */
    public function EditGoodsCategory()
    {

        $http_method = Http_Handle::getMethod();
        $category_id = Http_Validation::getInt('category_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改商品类型逻辑
            $category = array();
            $category['CategoryName'] = Http_Validation::getInput('CategoryName', 20);
            $category['ParentId'] = Http_Validation::getInt('ParentId');
            $category['Valid'] = Http_Validation::getInt('Valid');

            if ((!empty($category['CategoryName']))) { //商品类型不可以为空
                $save_sign = GoodsBaseDao::DB_UpdateGoodsCategoryById($category_id, $category, false);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "GoodsBase/ListGoodsCategory?save_sign=true");
                    exit();
                }
            } else {
                $this->tpl->assign("edit_error", "true");
            }
        } else { //编辑页面
            $category = GoodsBaseDao::DB_GetGoodsCategoryInfoById($category_id);
        }

        $first_category = GoodsBaseDao::DB_GetFirstGoodsCategory();

        $this->tpl->assign("first_category", $first_category);
        $this->tpl->assign('category', $category);
        $this->tpl->display("goods_base/category_edit.html");
    }

    /**
     * 商品类型列表
     */
    public function ListGoodsCategory()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_category = GoodsBaseDao::countNumByWhe("goods_category");
        $category_list = GoodsBaseDao::DB_GetGoodsCategoryByPage($page, $page_size);


        $page = new Page($total_category, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('category_list', $category_list);

        $this->tpl->display("goods_base/category_list.html");
    }

    /**
     * 新增商品类型
     */
    public function AddGoodsCategory()
    {
        $http_method = Http_Handle::getMethod();
        if ($http_method == "POST") { //有form表单提交，即新增商品类型逻辑
            $category = array();
            $category['CategoryName'] = Http_Validation::getInput('CategoryName', 20);
            $category['ParentId'] = Http_Validation::getInt('ParentId');
            $category['Valid'] = Http_Validation::getInt('Valid');

            $category = array_filter($category); //过滤为空的元素

            $save_sign = GoodsBaseDao::DB_SaveGoodsCategory($category);
            if ($save_sign) { //保存成功返回列表页
                header("Location:" . APP_HTTP_URL . "GoodsBase/ListGoodsCategory");
                exit();
            }
            $this->tpl->assign("save_error", "true");
            $this->tpl->assign("category", $category);
        }
        $first_category = GoodsBaseDao::DB_GetFirstGoodsCategory();
        $this->tpl->assign("first_category", $first_category);
        $this->tpl->display("goods_base/category_add.html");
    }


    /**
     * 异步修改商品类型有效性
     */
    public function AjaxChangeCategoryStatus()
    {
        $category_id = Http_Validation::getInt('category_id');
        $account['Valid'] = Http_Validation::getInt('valid');
        echo GoodsBaseDao::DB_UpdateGoodsCategoryById($category_id, $account, false);
    }

    //商品类型部分[E]


    //目标群体部分[S]

    /**
     * 编辑目标群体
     */
    public function EditGoodsGroup()
    {

        $http_method = Http_Handle::getMethod();
        $group_id = Http_Validation::getInt('group_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改目标群体逻辑
            $group = array();
            $group['GroupName'] = Http_Validation::getInput('GroupName', 20);
            $group['ParentId'] = Http_Validation::getInt('ParentId');
            $group['Valid'] = Http_Validation::getInt('Valid');

            if ((!empty($group['GroupName']))) { //目标群体不可以为空
                $save_sign = GoodsBaseDao::DB_UpdateGoodsGroupById($group_id, $group, false);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "GoodsBase/ListGoodsGroup?save_sign=true");
                    exit();
                }
            } else {
                $this->tpl->assign("edit_error", "true");
            }
        } else { //编辑页面
            $group = GoodsBaseDao::DB_GetGoodsGroupInfoById($group_id);
        }

        $first_group = GoodsBaseDao::DB_GetFirstGoodsGroup();

        $this->tpl->assign("first_group", $first_group);
        $this->tpl->assign('group', $group);
        $this->tpl->display("goods_base/group_edit.html");
    }

    /**
     * 目标群体列表
     */
    public function ListGoodsGroup()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_group = GoodsBaseDao::countNumByWhe("goods_group");
        $group_list = GoodsBaseDao::DB_GetGoodsGroupByPage($page, $page_size);


        $page = new Page($total_group, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('group_list', $group_list);

        $this->tpl->display("goods_base/group_list.html");
    }

    /**
     * 新增目标群体
     */
    public function AddGoodsGroup()
    {
        $http_method = Http_Handle::getMethod();
        if ($http_method == "POST") { //有form表单提交，即新增目标群体逻辑
            $group = array();
            $group['GroupName'] = Http_Validation::getInput('GroupName', 20);
            $group['ParentId'] = Http_Validation::getInt('ParentId');
            $group['Valid'] = Http_Validation::getInt('Valid');

            $group = array_filter($group); //过滤为空的元素

            $save_sign = GoodsBaseDao::DB_SaveGoodsGroup($group);
            if ($save_sign) { //保存成功返回列表页
                header("Location:" . APP_HTTP_URL . "GoodsBase/ListGoodsGroup");
                exit();
            }
            $this->tpl->assign("save_error", "true");
            $this->tpl->assign("group", $group);
        }
        $first_group = GoodsBaseDao::DB_GetFirstGoodsGroup();
        $this->tpl->assign("first_group", $first_group);
        $this->tpl->display("goods_base/group_add.html");
    }


    /**
     * 异步修改目标群体有效性
     */
    public function AjaxChangeGroupStatus()
    {
        $group_id = Http_Validation::getInt('group_id');
        $account['Valid'] = Http_Validation::getInt('valid');
        echo GoodsBaseDao::DB_UpdateGoodsGroupById($group_id, $account, false);
    }

    //目标群体部分[E]
}