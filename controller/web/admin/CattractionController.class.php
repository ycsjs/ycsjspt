<?php

/**
 * 境内游景点类
 */
class CattractionController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 增加境内景点
     */
    public function AddCattraction()
    {
        $http_method = Http_Handle::getMethod();
        if (strtoupper($http_method) == "POST") { //有form表单提交，即新增景点
            $cattraction = array();
            $cattraction['NameCn'] = Http_Validation::getInput('NameCn', 200);
            $cattraction['NameCnShort'] = Http_Validation::getInput('NameCnShort', 100);
            $cattraction['NameEn'] = Http_Validation::getInput('NameEn', 200);
            $cattraction['NamePinYin'] = Http_Validation::getInput('NamePinYin', 200);
            $cattraction['NamePinYinShort'] = Http_Validation::getInput('NamePinYinShort', 50);
            $cattraction['CityID'] = Http_Validation::getInt('CityID', 8);
            if ((!isset($cattraction['CityID'])) || (empty($cattraction['CityID']))) {
                $cattraction['CityID'] = Http_Validation::getInt('HaveCityID', 8);
            }
            $cattraction['Level'] = Http_Validation::getInt('Level', 1);
            $cattraction['Tel'] = Http_Validation::getInput('Tel', 50);
            $cattraction['Fax'] = Http_Validation::getInput('Fax', 50);
            $cattraction['WebSite'] = Http_Validation::getInput('WebSite', 200);
            $cattraction['MoneyType'] = Http_Validation::getInt('MoneyType', 5);
            $cattraction['Address'] = Http_Validation::getInput('Address', 255);
            $cattraction['Lng'] = Http_Validation::getInput('Lng', 20);
            $cattraction['Lat'] = Http_Validation::getInput('Lat', 20);
            $cattraction['Hot'] = Http_Validation::getInt('Hot', 1);
            $cattraction['ParkService'] = Http_Validation::getInt('ParkService', 1);
            $cattraction['BusinessHours'] = Http_Validation::getTextArea('BusinessHours', 3000);
            $cattraction['TicketPrice'] = Http_Validation::getTextArea('TicketPrice', 3000);
            $cattraction['Traffic'] = Http_Validation::getTextArea('Traffic', 3000);
            $cattraction['Description'] = Http_Validation::getTextArea('Description', 10000);
            $cattraction['Raiders'] = Http_Validation::getTextArea('Raiders', 8000);
            $cattraction['Note'] = Http_Validation::getTextArea('Note', 3000);
            $theme = Http_Validation::get('Theme');

            if ((isset($theme)) && (!empty($theme))) {
                $cattraction['ThemeIds'] = implode(",", $theme);
                $this->tpl->assign("theme", $theme);
            }
            $cattraction = array_filter($cattraction); //过滤为空的元素
            if (!empty($cattraction['NameCn'])) { //景点中文名称必填
                $save_sign = CattractionDao::DB_SaveCattraction($cattraction);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "Cattraction/ListCattraction?save_sign=true");
                    exit();
                }
            }
            $this->tpl->assign("save_error", "true");
            $this->tpl->assign("cattraction", $cattraction);
        }
        $this->tpl->display("cattraction/cattraction_add.html");
    }

    public function EditCattraction()
    {
        $http_method = Http_Handle::getMethod();
        $cattraction_id = Http_Validation::getInt('cattraction_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改景点逻辑
            $cattraction = array();
            $cattraction['NameCn'] = Http_Validation::getInput('NameCn', 200);
            $cattraction['NameCnShort'] = Http_Validation::getInput('NameCnShort', 100);
            $cattraction['NameEn'] = Http_Validation::getInput('NameEn', 200);
            $cattraction['NamePinYin'] = Http_Validation::getInput('NamePinYin', 200);
            $cattraction['NamePinYinShort'] = Http_Validation::getInput('NamePinYinShort', 50);
            $cattraction['CityID'] = Http_Validation::getInt('CityID', 8);
            if ((!isset($cattraction['CityID'])) || (empty($cattraction['CityID']))) {
                $cattraction['CityID'] = Http_Validation::getInt('HaveCityID', 8);
            }
            $cattraction['Level'] = Http_Validation::getInt('Level', 1);
            $cattraction['Tel'] = Http_Validation::getInput('Tel', 50);
            $cattraction['Fax'] = Http_Validation::getInput('Fax', 50);
            $cattraction['WebSite'] = Http_Validation::getInput('WebSite', 200);
            $cattraction['MoneyType'] = Http_Validation::getInt('MoneyType', 5);
            $cattraction['Address'] = Http_Validation::getInput('Address', 255);
            $cattraction['Lng'] = Http_Validation::getInput('Lng', 20);
            $cattraction['Lat'] = Http_Validation::getInput('Lat', 20);
            $cattraction['Hot'] = Http_Validation::getInt('Hot', 1);
            $cattraction['ParkService'] = Http_Validation::getInt('ParkService', 1);
            $cattraction['BusinessHours'] = Http_Validation::getTextArea('BusinessHours', 3000);
            $cattraction['TicketPrice'] = Http_Validation::getTextArea('TicketPrice', 3000);
            $cattraction['Traffic'] = Http_Validation::getTextArea('Traffic', 3000);
            $cattraction['Description'] = Http_Validation::getTextArea('Description', 10000);
            $cattraction['Raiders'] = Http_Validation::getTextArea('Raiders', 8000);
            $cattraction['Note'] = Http_Validation::getTextArea('Note', 3000);
            $theme = Http_Validation::get('Theme');

            if ((isset($theme)) && (!empty($theme))) {
                $cattraction['ThemeIds'] = implode(",", $theme);
                $this->tpl->assign("theme", $theme);
            }
            if (!empty($cattraction['NameCn'])) { //景点中文名称必填
                $save_sign = CattractionDao::DB_UpdateCattractionById($cattraction_id, $cattraction, false);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "Cattraction/ListCattraction?save_sign=true");
                    exit();
                }
            } else {
                $this->tpl->assign("edit_error", "true");
            }
        } else { //编辑页面
            $cattraction = CattractionDao::DB_GetCattractionInfoById($cattraction_id);
            if (!empty($cattraction['ThemeIds'])) {
                $theme = explode(",", $cattraction['ThemeIds']);
                $this->tpl->assign("theme", $theme);
            }
        }
        $this->tpl->assign('cattraction', $cattraction);
        $this->tpl->display("cattraction/cattraction_edit.html");
    }

    /**
     * 景点列表
     */
    public function ListCattraction()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_cattraction = CattractionDao::countNumByWhe();
        $cattraction_list = CattractionDao::DB_GetCattractionByPage($page, $page_size);
        $page = new Page($total_cattraction, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('cattraction_list', $cattraction_list);

        $this->tpl->display("cattraction/cattraction_list.html");
    }

    /**
     * 查看景点信息
     */
    public function ViewCattraction()
    {
        $cattraction_id = Http_Validation::getInt('cattraction_id');
        $cattraction = CattractionDao::DB_GetCattractionInfoById($cattraction_id);
        $cattraction_picture = CattractionDao::DB_GetCattractionPictureByAid($cattraction_id);
        if (!empty($cattraction['ThemeIds'])) {
            $theme = explode(",", $cattraction['ThemeIds']);
            $this->tpl->assign("theme", $theme);
        }
        $city = CityDao::DB_GetCityInfoByCityId($cattraction['CityID']);
        $this->tpl->assign('city', $city);
        $this->tpl->assign('cattraction', $cattraction);
        $this->tpl->assign('cattraction_picture', $cattraction_picture);

        $this->tpl->display("cattraction/cattraction_view.html");
    }

    /**
     * 景点图片管理
     */
    public function PictureCattraction()
    {
        $cattraction_id = Http_Validation::getInt('cattraction_id');

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
            $pic_abs_path = UPLOAD_ABSOLUTELY_PATH . "web/ctravel/cattraction" . '/' . date("Y-m") . '/';
            $pic_rela_path = UPLOAD_RELATIVE_PATH . "web/ctravel/cattraction" . '/' . date("Y-m") . '/';
            Directory_File::dirCreate($pic_abs_path);
            //图上传
            $pic_abs_src = $pic_abs_path . $name_noext_pinyin . $name_ext;
            $pic_rela_src = $pic_rela_path . $name_noext_pinyin . $name_ext;
            file_put_contents($pic_abs_src, file_get_contents('php://input')); //存放

            $cattraction_picture['TravelCattractionId'] = $cattraction_id;
            $cattraction_picture['PictureName'] = $name_noext_pinyin . $name_ext;
            $cattraction_picture['PictureTitle'] = $picture_title;
            $cattraction_picture['PictureDescription'] = $picture_description;
            $cattraction_picture['PictureSrc'] = $pic_rela_src;
            CattractionDao::DB_SaveCattractionPicture($cattraction_picture);
            echo $pic_rela_src;
        } else {
            $cattraction = CattractionDao::DB_GetCattractionInfoById($cattraction_id);
            $cattraction_picture = CattractionDao::DB_GetCattractionPictureByAid($cattraction_id);
            $this->tpl->assign("cattraction", $cattraction);
            $this->tpl->assign("cattraction_picture", $cattraction_picture);

            $this->tpl->display("cattraction/cattraction_picture.html");
        }
    }


    /**
     * 根据大洲获取国家列表
     */
    public function AjaxGetCountryByContinentId()
    {
        $continent_id = Http_Validation::getInt('continent_id');
        echo json_encode(CityDao::DB_GetCountryByContinentId($continent_id));
    }

    /**
     * 根据国家获取城市列表
     */
    public function AjaxGetCityByCountryId()
    {
        $country_id = Http_Validation::getInt('country_id');
        echo json_encode(CityDao::DB_GetCityByCountryId($country_id));
    }

    /**
     * 删除、恢复状态切换
     */
    public function AjaxChangeStatus()
    {
        $cattraction_id = Http_Validation::getInt('cattraction_id');
        $cattraction['Valid'] = Http_Validation::getInt('valid');
        echo CattractionDao::DB_UpdateCattractionById($cattraction_id, $cattraction, false);
    }

    /**
     * 删除景点图片
     */
    public function AjaxDelCattractionPic()
    {
        $pic_id = Http_Validation::getInt('pic_id');
        echo CattractionDao::DB_DelCattractionPictureById($pic_id);
    }
}

?>