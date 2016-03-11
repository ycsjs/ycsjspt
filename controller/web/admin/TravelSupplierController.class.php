<?php

/**
 * 旅游供应商类
 */
class TravelSupplierController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 新增旅游供应商
     */
    public function AddTravelSupplier()
    {
        $http_method = Http_Handle::getMethod();
        if (strtoupper($http_method) == "POST") { //有form表单提交，即新增旅游供应商
            $travel_supplier = array();
            $travel_supplier['Name'] = Http_Validation::getInput('Name', 255);
            $travel_supplier['Commission'] = Http_Validation::getInput('Commission', 20);
            $travel_supplier['Tel'] = Http_Validation::getInput('Tel', 50);
            $travel_supplier['Fax'] = Http_Validation::getInput('Fax', 50);
            $travel_supplier['Contact'] = Http_Validation::getInput('Contact', 50);
            $travel_supplier['Address'] = Http_Validation::getInput('Address', 255);
            $travel_supplier['StartDate'] = Http_Validation::getInput('StartDate', 255);
            $travel_supplier['EndDate'] = Http_Validation::getInput('EndDate', 255);
            $travel_supplier['BankPeople'] = Http_Validation::getInput('BankPeople', 255);
            $travel_supplier['BankAccount'] = Http_Validation::getInput('BankAccount', 255);
            $travel_supplier['BankName'] = Http_Validation::getInput('BankName', 255);
            $travel_supplier['Valid'] = Http_Validation::getInt('Valid', 1);
            $travel_supplier['Notice'] = Http_Validation::getTextArea('Notice', 10000);
            $travel_supplier = array_filter($travel_supplier); //过滤为空的元素
            if (!empty($travel_supplier['Name'])) { //旅游供应商中文名称必填
                $save_sign = TravelSupplierDao::DB_SaveTravelSupplier($travel_supplier);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "TravelSupplier/ListTravelSupplier?save_sign=true");
                    exit();
                }
            }
            $this->tpl->assign("save_error", "true");
            $this->tpl->assign("travel_supplier", $travel_supplier);
        }
        $this->tpl->display("travel_supplier/travel_supplier_add.html");
    }

    public function EditTravelSupplier()
    {
        $http_method = Http_Handle::getMethod();
        $travel_supplier_id = Http_Validation::getInt('travel_supplier_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改旅游供应商逻辑
            $travel_supplier = array();
            $travel_supplier['Name'] = Http_Validation::getInput('Name', 255);
            $travel_supplier['Commission'] = Http_Validation::getInput('Commission', 20);
            $travel_supplier['Tel'] = Http_Validation::getInput('Tel', 50);
            $travel_supplier['Fax'] = Http_Validation::getInput('Fax', 50);
            $travel_supplier['Contact'] = Http_Validation::getInput('Contact', 50);
            $travel_supplier['Address'] = Http_Validation::getInput('Address', 255);
            $travel_supplier['StartDate'] = Http_Validation::getInput('StartDate', 255);
            $travel_supplier['EndDate'] = Http_Validation::getInput('EndDate', 255);
            $travel_supplier['BankPeople'] = Http_Validation::getInput('BankPeople', 255);
            $travel_supplier['BankAccount'] = Http_Validation::getInput('BankAccount', 255);
            $travel_supplier['BankName'] = Http_Validation::getInput('BankName', 255);
            $travel_supplier['Valid'] = Http_Validation::getInt('Valid', 1);
            $travel_supplier['Notice'] = Http_Validation::getTextArea('Notice', 10000);

            if (!empty($travel_supplier['Name'])) { //旅游供应商中文名称必填
                $save_sign = TravelSupplierDao::DB_UpdateTravelSupplierById($travel_supplier_id, $travel_supplier, false);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "TravelSupplier/ListTravelSupplier?save_sign=true");
                    exit();
                }
            } else {
                $this->tpl->assign("edit_error", "true");
            }
        } else { //编辑页面
            $travel_supplier = TravelSupplierDao::DB_GetTravelSupplierInfoById($travel_supplier_id);
        }
        $this->tpl->assign('travel_supplier', $travel_supplier);
        $this->tpl->display("travel_supplier/travel_supplier_edit.html");
    }

    /**
     * 旅游供应商列表
     */
    public function ListTravelSupplier()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_travel_supplier = TravelSupplierDao::countNumByWhe();
        $travel_supplier_list = TravelSupplierDao::DB_GetTravelSupplierByPage($page, $page_size);
        $page = new Page($total_travel_supplier, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('travel_supplier_list', $travel_supplier_list);

        $this->tpl->display("travel_supplier/travel_supplier_list.html");
    }


    /**
     * 旅游供应商文件管理
     */
    public function FileTravelSupplier()
    {
        $travel_supplier_id = Http_Validation::getInt('travel_supplier_id');

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
            $file_abs_path = SECRET_CONTRACT_ABSOLUTELY_PATH . "travel_supplier/" . date("Y-m") . '/';
            $file_rela_path = SECRET_CONTRACT_RELATIVE_PATH . "travel_supplier/" . date("Y-m") . '/';
            Directory_File::dirCreate($file_abs_path);
            //图上传
            $file_abs_src = $file_abs_path . $name_noext_pinyin . $name_ext;
            $file_rela_src = $file_rela_path . $name_noext_pinyin . $name_ext;
            file_put_contents($file_abs_src, file_get_contents('php://input')); //存放

            $travel_supplier_file['SupplierId'] = $travel_supplier_id;
            $travel_supplier_file['FileName'] = $name_noext_pinyin . $name_ext;
            $travel_supplier_file['FileTitle'] = $file_title;
            $travel_supplier_file['FileDescription'] = $file_description;
            $travel_supplier_file['FileSrc'] = $file_rela_src;
            TravelSupplierDao::DB_SaveTravelSupplierFile($travel_supplier_file);
            echo $file_rela_src;
        } else {
            $travel_supplier = TravelSupplierDao::DB_GetTravelSupplierInfoById($travel_supplier_id);
            $travel_supplier_file = TravelSupplierDao::DB_GetTravelSupplierFileByAid($travel_supplier_id);
            $this->tpl->assign("travel_supplier", $travel_supplier);
            $this->tpl->assign("travel_supplier_file", $travel_supplier_file);
            $this->tpl->display("travel_supplier/travel_supplier_file.html");
        }
    }


    /**
     * 查看景点信息
     */
    public function ViewTravelSupplier()
    {
        $travel_supplier_id = Http_Validation::getInt('travel_supplier_id');
        $travel_supplier = TravelSupplierDao::DB_GetTravelSupplierInfoById($travel_supplier_id);
        $travel_supplier_file = TravelSupplierDao::DB_GetTravelSupplierFileByAid($travel_supplier_id);
        $this->tpl->assign('travel_supplier', $travel_supplier);
        $this->tpl->assign('travel_supplier_file', $travel_supplier_file);
        $this->tpl->display("travel_supplier/travel_supplier_view.html");
    }


    /**
     * 删除、恢复状态切换
     */
    public function AjaxChangeStatus()
    {
        $travel_supplier_id = Http_Validation::getInt('travel_supplier_id');
        $travel_supplier['Valid'] = Http_Validation::getInt('valid');
        echo TravelSupplierDao::DB_UpdateTravelSupplierById($travel_supplier_id, $travel_supplier, false);
    }

    /**
     * 删除旅游供应商文件
     */
    public function AjaxDelTravelSupplierFile()
    {
        $file_id = Http_Validation::getInt('file_id');
        echo TravelSupplierDao::DB_DelTravelSupplierFileById($file_id);
    }
}