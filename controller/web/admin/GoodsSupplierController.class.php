<?php

/**
 * 商品供应商类
 */
class GoodsSupplierController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 新增商品供应商
     */
    public function AddGoodsSupplier()
    {
        $http_method = Http_Handle::getMethod();
        if (strtoupper($http_method) == "POST") { //有form表单提交，即新增商品供应商
            $goods_supplier = array();
            $goods_supplier['Name'] = Http_Validation::getInput('Name', 255);
            $goods_supplier['Commission'] = Http_Validation::getInput('Commission', 20);
            $goods_supplier['Tel'] = Http_Validation::getInput('Tel', 50);
            $goods_supplier['Fax'] = Http_Validation::getInput('Fax', 50);
            $goods_supplier['Contact'] = Http_Validation::getInput('Contact', 50);
            $goods_supplier['Address'] = Http_Validation::getInput('Address', 255);
            $goods_supplier['StartDate'] = Http_Validation::getInput('StartDate', 255);
            $goods_supplier['EndDate'] = Http_Validation::getInput('EndDate', 255);
            $goods_supplier['BankPeople'] = Http_Validation::getInput('BankPeople', 255);
            $goods_supplier['BankAccount'] = Http_Validation::getInput('BankAccount', 255);
            $goods_supplier['BankName'] = Http_Validation::getInput('BankName', 255);
            $goods_supplier['Valid'] = Http_Validation::getInt('Valid', 1);
            $goods_supplier['Notice'] = Http_Validation::getTextArea('Notice', 10000);
            $goods_supplier = array_filter($goods_supplier); //过滤为空的元素
            if (!empty($goods_supplier['Name'])) { //商品供应商中文名称必填
                $save_sign = GoodsSupplierDao::DB_SaveGoodsSupplier($goods_supplier);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "GoodsSupplier/ListGoodsSupplier?save_sign=true");
                    exit();
                }
            }
            $this->tpl->assign("save_error", "true");
            $this->tpl->assign("goods_supplier", $goods_supplier);
        }
        $this->tpl->display("goods_supplier/goods_supplier_add.html");
    }

    public function EditGoodsSupplier()
    {
        $http_method = Http_Handle::getMethod();
        $goods_supplier_id = Http_Validation::getInt('goods_supplier_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改商品供应商逻辑
            $goods_supplier = array();
            $goods_supplier['Name'] = Http_Validation::getInput('Name', 255);
            $goods_supplier['Commission'] = Http_Validation::getInput('Commission', 20);
            $goods_supplier['Tel'] = Http_Validation::getInput('Tel', 50);
            $goods_supplier['Fax'] = Http_Validation::getInput('Fax', 50);
            $goods_supplier['Contact'] = Http_Validation::getInput('Contact', 50);
            $goods_supplier['Address'] = Http_Validation::getInput('Address', 255);
            $goods_supplier['StartDate'] = Http_Validation::getInput('StartDate', 255);
            $goods_supplier['EndDate'] = Http_Validation::getInput('EndDate', 255);
            $goods_supplier['BankPeople'] = Http_Validation::getInput('BankPeople', 255);
            $goods_supplier['BankAccount'] = Http_Validation::getInput('BankAccount', 255);
            $goods_supplier['BankName'] = Http_Validation::getInput('BankName', 255);
            $goods_supplier['Valid'] = Http_Validation::getInt('Valid', 1);
            $goods_supplier['Notice'] = Http_Validation::getTextArea('Notice', 10000);

            if (!empty($goods_supplier['Name'])) { //商品供应商中文名称必填
                $save_sign = GoodsSupplierDao::DB_UpdateGoodsSupplierById($goods_supplier_id, $goods_supplier, false);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "GoodsSupplier/ListGoodsSupplier?save_sign=true");
                    exit();
                }
            } else {
                $this->tpl->assign("edit_error", "true");
            }
        } else { //编辑页面
            $goods_supplier = GoodsSupplierDao::DB_GetGoodsSupplierInfoById($goods_supplier_id);
        }
        $this->tpl->assign('goods_supplier', $goods_supplier);
        $this->tpl->display("goods_supplier/goods_supplier_edit.html");
    }

    /**
     * 商品供应商列表
     */
    public function ListGoodsSupplier()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_goods_supplier = GoodsSupplierDao::countNumByWhe();
        $goods_supplier_list = GoodsSupplierDao::DB_GetGoodsSupplierByPage($page, $page_size);
        $page = new Page($total_goods_supplier, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('goods_supplier_list', $goods_supplier_list);

        $this->tpl->display("goods_supplier/goods_supplier_list.html");
    }


    /**
     * 商品供应商文件管理
     */
    public function FileGoodsSupplier()
    {
        $goods_supplier_id = Http_Validation::getInt('goods_supplier_id');

        $http_method = Http_Handle::getMethod();
        if (strtoupper($http_method) == "POST") {
            $file_name = Http_Validation::get('file_name');
            $file_title = Http_Validation::get('file_title');
            $file_description = Http_Validation::get('file_description');

            //解析文件名称和扩展名
            $name_noext = substr($file_name, 0, strrpos($file_name, '.')); //名称(无扩展名)
            $name_ext = strrchr($file_name, "."); //扩展名

            //将文件中文名称转换为拼音
            $name_noext_arr = Iconv_Encode::gbk2Pinyin($name_noext);
            $name_noext_pinyin = implode("", $name_noext_arr);

            //获取文件类型
            $file_abs_path = SECRET_CONTRACT_ABSOLUTELY_PATH . "goods_supplier/" . date("Y-m") . '/';
            $file_rela_path = SECRET_CONTRACT_RELATIVE_PATH . "goods_supplier/" . date("Y-m") . '/';
            Directory_File::dirCreate($file_abs_path);
            //图上传
            $file_abs_src = $file_abs_path . $name_noext_pinyin . $name_ext;
            $file_rela_src = $file_rela_path . $name_noext_pinyin . $name_ext;
            file_put_contents($file_abs_src, file_get_contents('php://input')); //存放

            $goods_supplier_file['SupplierId'] = $goods_supplier_id;
            $goods_supplier_file['FileName'] = $name_noext_pinyin . $name_ext;
            $goods_supplier_file['FileTitle'] = $file_title;
            $goods_supplier_file['FileDescription'] = $file_description;
            $goods_supplier_file['FileSrc'] = $file_rela_src;
            GoodsSupplierDao::DB_SaveGoodsSupplierFile($goods_supplier_file);
            echo $file_rela_src;
        } else {
            $goods_supplier = GoodsSupplierDao::DB_GetGoodsSupplierInfoById($goods_supplier_id);
            $goods_supplier_file = GoodsSupplierDao::DB_GetGoodsSupplierFileByAid($goods_supplier_id);
            $this->tpl->assign("goods_supplier", $goods_supplier);
            $this->tpl->assign("goods_supplier_file", $goods_supplier_file);
            $this->tpl->display("goods_supplier/goods_supplier_file.html");
        }
    }


    /**
     * 查看景点信息
     */
    public function ViewGoodsSupplier()
    {
        $goods_supplier_id = Http_Validation::getInt('goods_supplier_id');
        $goods_supplier = GoodsSupplierDao::DB_GetGoodsSupplierInfoById($goods_supplier_id);
        $goods_supplier_file = GoodsSupplierDao::DB_GetGoodsSupplierFileByAid($goods_supplier_id);
        $this->tpl->assign('goods_supplier', $goods_supplier);
        $this->tpl->assign('goods_supplier_file', $goods_supplier_file);
        $this->tpl->display("goods_supplier/goods_supplier_view.html");
    }


    /**
     * 删除、恢复状态切换
     */
    public function AjaxChangeStatus()
    {
        $goods_supplier_id = Http_Validation::getInt('goods_supplier_id');
        $goods_supplier['Valid'] = Http_Validation::getInt('valid');
        echo GoodsSupplierDao::DB_UpdateGoodsSupplierById($goods_supplier_id, $goods_supplier, false);
    }

    /**
     * 删除商品供应商文件
     */
    public function AjaxDelGoodsSupplierFile()
    {
        $file_id = Http_Validation::getInt('file_id');
        echo GoodsSupplierDao::DB_DelGoodsSupplierFileById($file_id);
    }
}