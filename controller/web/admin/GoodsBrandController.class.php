<?php

/**
 * 商品品牌类
 */
class GoodsBrandController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 新增商品品牌
     */
    public function AddGoodsBrand()
    {
        $http_method = Http_Handle::getMethod();
        if (strtoupper($http_method) == "POST") { //有form表单提交，即新增商品品牌
            $goods_brand = array();
            $goods_brand['NameCn'] = Http_Validation::getInput('NameCn', 255);
            $goods_brand['NameEn'] = Http_Validation::getInput('NameEn', 255);
            $goods_brand['Valid'] = Http_Validation::getInt('Valid', 1);
            $goods_brand['Introduction'] = Http_Validation::getTextArea('Introduction', 10000);
            $brand_logo_name = Upload_File::uploadFile("Logo", UPLOAD_ABSOLUTELY_PATH . "web/goods_brand/", array("jpeg", "png", "jpg"), 100000000, true);
            if (!empty($brand_logo_name)) {
                $goods_brand['Logo'] = UPLOAD_RELATIVE_PATH . "web/goods_brand/" . $brand_logo_name;
            }
            $goods_brand = array_filter($goods_brand); //过滤为空的元素
            if (!empty($goods_brand['NameCn'])) { //商品品牌中文名称必填
                $save_sign = GoodsBrandDao::DB_SaveGoodsBrand($goods_brand);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "GoodsBrand/ListGoodsBrand?save_sign=true");
                    exit();
                }
            }
            $this->tpl->assign("save_error", "true");
            $this->tpl->assign("goods_brand", $goods_brand);
        }
        $this->tpl->display("goods_brand/goods_brand_add.html");
    }

    /**
     * 编辑商品品牌
     */
    public function EditGoodsBrand()
    {
        $http_method = Http_Handle::getMethod();
        $goods_brand_id = Http_Validation::getInt('goods_brand_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改商品品牌逻辑
            $goods_brand = array();
            $goods_brand['NameCn'] = Http_Validation::getInput('NameCn', 255);
            $goods_brand['NameEn'] = Http_Validation::getInput('NameEn', 255);
            $goods_brand['Valid'] = Http_Validation::getInt('Valid', 1);
            $goods_brand['Introduction'] = Http_Validation::getTextArea('Introduction', 10000);

            if ($_FILES['Logo_new']['size'] != 0) {
                $brand_logo_name = Upload_File::uploadFile("Logo_new", UPLOAD_ABSOLUTELY_PATH . "web/goods_brand/", array("jpeg", "png", "jpg"), 100000000, true);
                if (!empty($brand_logo_name)) {
                    $goods_brand['Logo'] = UPLOAD_RELATIVE_PATH . "web/goods_brand/" . $brand_logo_name;
                }
            } else {
                $goods_brand['Logo'] = Http_Validation::getInput('Logo', 255);
            }
            if (!empty($goods_brand['NameCn'])) { //商品品牌中文名称必填
                $save_sign = GoodsBrandDao::DB_UpdateGoodsBrandById($goods_brand_id, $goods_brand, false);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "GoodsBrand/ListGoodsBrand?save_sign=true");
                    exit();
                }
            } else {
                $this->tpl->assign("edit_error", "true");
            }
        } else { //编辑页面
            $goods_brand = GoodsBrandDao::DB_GetGoodsBrandInfoById($goods_brand_id);
        }
        $this->tpl->assign('goods_brand', $goods_brand);
        $this->tpl->display("goods_brand/goods_brand_edit.html");
    }

    /**
     * 商品品牌列表
     */
    public function ListGoodsBrand()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_goods_brand = GoodsBrandDao::countNumByWhe();
        $goods_brand_list = GoodsBrandDao::DB_GetGoodsBrandByPage($page, $page_size);
        $page = new Page($total_goods_brand, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('goods_brand_list', $goods_brand_list);

        $this->tpl->display("goods_brand/goods_brand_list.html");
    }

    /**
     * 查看景点信息
     */
    public function ViewGoodsBrand()
    {
        $goods_brand_id = Http_Validation::getInt('goods_brand_id');
        $goods_brand = GoodsBrandDao::DB_GetGoodsBrandInfoById($goods_brand_id);
        $this->tpl->assign('goods_brand', $goods_brand);
        $this->tpl->display("goods_brand/goods_brand_view.html");
    }

    /**
     * 删除、恢复状态切换
     */
    public function AjaxChangeBrandStatus()
    {
        $goods_brand_id = Http_Validation::getInt('goods_brand_id');
        $goods_brand['Valid'] = Http_Validation::getInt('valid');
        echo GoodsBrandDao::DB_UpdateGoodsBrandById($goods_brand_id, $goods_brand, false);
    }

}