<?php

/**
 * 商品类
 */
class GoodsController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 新增商品
     */
    public function AddGoods()
    {
        $http_method = Http_Handle::getMethod();
        if (strtoupper($http_method) == "POST") { //有form表单提交，即新增商品
            $goods = array();
            $goods['GoodsCode'] = Http_Validation::getInput('GoodsCode', 200);
            $goods['NameCn'] = Http_Validation::getInput('NameCn', 200);
            $goods['NameEn'] = Http_Validation::getInput('NameEn', 200);
            $goods['NamePinYin'] = Http_Validation::getInput('NamePinYin', 200);
            $goods['BrandId'] = Http_Validation::getInt('BrandId', 6);
            $goods['CategoryId'] = Http_Validation::getInt('CategoryId', 11);
            $goods['GroupId'] = Http_Validation::getInt('GroupId', 11);
            $goods['GoodsAgentId'] = Http_Validation::getInt('GoodsAgentId', 11);
            $goods['BuyPrice'] = Http_Validation::getInput('BuyPrice', 25);
            $goods['SalePrice'] = Http_Validation::getInput('SalePrice', 25);
            $goods['MarketPrice'] = Http_Validation::getInput('MarketPrice', 25);
            $goods['DeliveryPrice'] = Http_Validation::getInput('DeliveryPrice', 25);
            $goods['PromotionPrice'] = Http_Validation::getInput('PromotionPrice', 25);
            $goods['MoneyType'] = Http_Validation::getInt('MoneyType', 5);
            $goods['PromotionStartDate'] = Http_Validation::getInput('PromotionStartDate', 255);
            $goods['PromotionEndDate'] = Http_Validation::getInput('PromotionEndDate', 255);
            $goods['Hot'] = Http_Validation::getInt('Hot', 1);
            $goods['Promotion'] = Http_Validation::getInt('Promotion', 1);
            $goods['Valid'] = Http_Validation::getInt('Valid', 1);
            $goods['Delivery'] = Http_Validation::getInt('Delivery', 1);
            $goods['Introduction'] = Http_Validation::getTextArea('Introduction', 10000);
            $goods['Detail'] = Http_Validation::getTextArea('Detail', 10000);
            $goods['Notice'] = Http_Validation::getTextArea('Notice', 10000);

            $goods = array_filter($goods); //过滤为空的元素
            if (!empty($goods['GoodsCode'])) { //商品中文名称必填
                $save_sign = GoodsDao::DB_SaveGoods($goods);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "Goods/ListGoods?save_sign=true");
                    exit();
                }
            }
            $this->tpl->assign("save_error", "true");
            $this->tpl->assign("goods", $goods);
        }
        $this->tpl->display("goods/goods_add.html");
    }

    public function EditGoods()
    {
        $http_method = Http_Handle::getMethod();
        $goods_id = Http_Validation::getInt('goods_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改商品逻辑
            $goods = array();
            $goods['GoodsCode'] = Http_Validation::getInput('GoodsCode', 200);
            $goods['NameCn'] = Http_Validation::getInput('NameCn', 200);
            $goods['NameEn'] = Http_Validation::getInput('NameEn', 200);
            $goods['NamePinYin'] = Http_Validation::getInput('NamePinYin', 200);
            $goods['BrandId'] = Http_Validation::getInt('BrandId', 6);
            $goods['CategoryId'] = Http_Validation::getInt('CategoryId', 11);
            $goods['GroupId'] = Http_Validation::getInt('GroupId', 11);
            $goods['GoodsAgentId'] = Http_Validation::getInt('GoodsAgentId', 11);
            $goods['BuyPrice'] = Http_Validation::getInput('BuyPrice', 25);
            $goods['SalePrice'] = Http_Validation::getInput('SalePrice', 25);
            $goods['MarketPrice'] = Http_Validation::getInput('MarketPrice', 25);
            $goods['DeliveryPrice'] = Http_Validation::getInput('DeliveryPrice', 25);
            $goods['PromotionPrice'] = Http_Validation::getInput('PromotionPrice', 25);
            $goods['MoneyType'] = Http_Validation::getInt('MoneyType', 5);
            $goods['PromotionStartDate'] = Http_Validation::getInput('PromotionStartDate', 255);
            $goods['PromotionEndDate'] = Http_Validation::getInput('PromotionEndDate', 255);
            $goods['Hot'] = Http_Validation::getInt('Hot', 1);
            $goods['Promotion'] = Http_Validation::getInt('Promotion', 1);
            $goods['Valid'] = Http_Validation::getInt('Valid', 1);
            $goods['Delivery'] = Http_Validation::getInt('Delivery', 1);
            $goods['Introduction'] = Http_Validation::getTextArea('Introduction', 10000);
            $goods['Detail'] = Http_Validation::getTextArea('Detail', 10000);
            $goods['Notice'] = Http_Validation::getTextArea('Notice', 10000);

            if (!empty($goods['GoodsCode'])) { //商品中文名称必填
                $save_sign = GoodsDao::DB_UpdateGoodsById($goods_id, $goods, false);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "Goods/ListGoods?save_sign=true");
                    exit();
                }
            } else {
                $this->tpl->assign("edit_error", "true");
            }
        } else { //编辑页面
            $goods = GoodsDao::DB_GetGoodsInfoById($goods_id);
        }
        $this->tpl->assign('goods', $goods);
        $this->tpl->display("goods/goods_edit.html");
    }

    /**
     * 商品列表
     */
    public function ListGoods()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_goods = GoodsDao::countNumByWhe();
        $goods_list = GoodsDao::DB_GetGoodsByPage($page, $page_size);
        $page = new Page($total_goods, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('goods_list', $goods_list);

        $this->tpl->display("goods/goods_list.html");
    }


    /**
     * 商品图片管理
     */
    public function PictureGoods()
    {
        $goods_id = Http_Validation::getInt('goods_id');

        $http_method = Http_Handle::getMethod();
        if (strtoupper($http_method) == "POST") {
            $picture_name = Http_Validation::get('picture_name');
            $picture_title = Http_Validation::get('picture_title');
            $picture_description = Http_Validation::get('picture_description');

            //解析图片名称和扩展名
            $name_noext = substr($picture_name, 0, strrpos($picture_name, '.')); //名称(无扩展名)
            $name_ext = strrchr($picture_name, "."); //扩展名

            //将图片中文名称转换为拼音
            $name_noext_arr = Iconv_Encode::gbk2Pinyin($name_noext);
            $name_noext_pinyin = implode("", $name_noext_arr);

            //获取图片类型
            $pic_abs_path = UPLOAD_ABSOLUTELY_PATH . "web/goods" . '/' . date("Y-m") . '/';
            $pic_rela_path = UPLOAD_RELATIVE_PATH . "web/goods" . '/' . date("Y-m") . '/';
            Directory_File::dirCreate($pic_abs_path);
            //图上传
            $pic_abs_src = $pic_abs_path . $name_noext_pinyin . $name_ext;
            $pic_rela_src = $pic_rela_path . $name_noext_pinyin . $name_ext;
            file_put_contents($pic_abs_src, file_get_contents('php://input')); //存放

            $goods_picture['GoodsId'] = $goods_id;
            $goods_picture['PictureName'] = $name_noext_pinyin . $name_ext;
            $goods_picture['PictureTitle'] = $picture_title;
            $goods_picture['PictureDescription'] = $picture_description;
            $goods_picture['PictureSrc'] = $pic_rela_src;
            GoodsDao::DB_SaveGoodsPicture($goods_picture);
            echo $pic_rela_src;
        } else {
            $goods = GoodsDao::DB_GetGoodsInfoById($goods_id);
            $goods_picture = GoodsDao::DB_GetGoodsPictureByAid($goods_id);
            $this->tpl->assign("goods", $goods);
            $this->tpl->assign("goods_picture", $goods_picture);

            $this->tpl->display("goods/goods_picture.html");
        }
    }


    /**
     * 查看景点信息
     */
    public function ViewGoods()
    {
        $goods_id = Http_Validation::getInt('goods_id');
        $goods = GoodsDao::DB_GetGoodsInfoById($goods_id);
        $goods_picture = GoodsDao::DB_GetGoodsPictureByAid($goods_id);
        $this->tpl->assign('goods', $goods);
        $this->tpl->assign('goods_picture', $goods_picture);
        $this->tpl->display("goods/goods_view.html");
    }


    /**
     * 删除、恢复状态切换
     */
    public function AjaxChangeStatus()
    {
        $goods_id = Http_Validation::getInt('goods_id');
        $goods['Valid'] = Http_Validation::getInt('valid');
        echo GoodsDao::DB_UpdateGoodsById($goods_id, $goods, false);
    }

    /**
     * 删除商品图片
     */
    public function AjaxDelGoodsPic()
    {
        $pic_id = Http_Validation::getInt('pic_id');
        echo GoodsDao::DB_DelGoodsPictureById($pic_id);
    }
}