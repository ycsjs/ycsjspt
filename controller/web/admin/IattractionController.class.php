<?php

/**
 * 出境游景点类
 */
class IattractionController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 增加海外景点
     */
    public function AddIattraction()
    {
        $http_method = Http_Handle::getMethod();
        if (strtoupper($http_method) == "POST") { //有form表单提交，即新增景点
            $iattraction = array();
            $iattraction['NameCn'] = Http_Validation::getInput('NameCn', 200);
            $iattraction['NameCnShort'] = Http_Validation::getInput('NameCnShort', 100);
            $iattraction['NameEn'] = Http_Validation::getInput('NameEn', 200);
            $iattraction['NamePinYin'] = Http_Validation::getInput('NamePinYin', 200);
            $iattraction['NamePinYinShort'] = Http_Validation::getInput('NamePinYinShort', 50);
            $iattraction['CityID'] = Http_Validation::getInt('CityID', 8);
            if ((!isset($iattraction['CityID'])) || (empty($iattraction['CityID']))) {
                $iattraction['CityID'] = Http_Validation::getInt('HaveCityID', 8);
            }
            $iattraction['Level'] = Http_Validation::getInt('Level', 1);
            $iattraction['Tel'] = Http_Validation::getInput('Tel', 50);
            $iattraction['Fax'] = Http_Validation::getInput('Fax', 50);
            $iattraction['WebSite'] = Http_Validation::getInput('WebSite', 200);
            $iattraction['MoneyType'] = Http_Validation::getInt('MoneyType', 5);
            $iattraction['Address'] = Http_Validation::getInput('Address', 255);
            $iattraction['Lng'] = Http_Validation::getInput('Lng', 20);
            $iattraction['Lat'] = Http_Validation::getInput('Lat', 20);
            $iattraction['Hot'] = Http_Validation::getInt('Hot', 1);
            $iattraction['ParkService'] = Http_Validation::getInt('ParkService', 1);
            $iattraction['BusinessHours'] = Http_Validation::getTextArea('BusinessHours', 3000);
            $iattraction['TicketPrice'] = Http_Validation::getTextArea('TicketPrice', 3000);
            $iattraction['Traffic'] = Http_Validation::getTextArea('Traffic', 3000);
            $iattraction['Description'] = Http_Validation::getTextArea('Description', 10000);
            $iattraction['Raiders'] = Http_Validation::getTextArea('Raiders', 8000);
            $iattraction['Note'] = Http_Validation::getTextArea('Note', 3000);
            $theme = Http_Validation::get('Theme');

            if ((isset($theme)) && (!empty($theme))) {
                $iattraction['ThemeIds'] = implode(",", $theme);
                $this->tpl->assign("theme", $theme);
            }
            $iattraction = array_filter($iattraction); //过滤为空的元素
            if (!empty($iattraction['NameCn'])) { //景点中文名称必填
                $save_sign = IattractionDao::DB_SaveIattraction($iattraction);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "Iattraction/ListIattraction?save_sign=true");
                    exit();
                }
            }
            $this->tpl->assign("save_error", "true");
            $this->tpl->assign("iattraction", $iattraction);
        }
        $this->tpl->display("iattraction/iattraction_add.html");
    }

    public function EditIattraction()
    {
        $http_method = Http_Handle::getMethod();
        $iattraction_id = Http_Validation::getInt('iattraction_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改景点逻辑
            $iattraction = array();
            $iattraction['NameCn'] = Http_Validation::getInput('NameCn', 200);
            $iattraction['NameCnShort'] = Http_Validation::getInput('NameCnShort', 100);
            $iattraction['NameEn'] = Http_Validation::getInput('NameEn', 200);
            $iattraction['NamePinYin'] = Http_Validation::getInput('NamePinYin', 200);
            $iattraction['NamePinYinShort'] = Http_Validation::getInput('NamePinYinShort', 50);
            $iattraction['CityID'] = Http_Validation::getInt('CityID', 8);
            if ((!isset($iattraction['CityID'])) || (empty($iattraction['CityID']))) {
                $iattraction['CityID'] = Http_Validation::getInt('HaveCityID', 8);
            }
            $iattraction['Level'] = Http_Validation::getInt('Level', 1);
            $iattraction['Tel'] = Http_Validation::getInput('Tel', 50);
            $iattraction['Fax'] = Http_Validation::getInput('Fax', 50);
            $iattraction['WebSite'] = Http_Validation::getInput('WebSite', 200);
            $iattraction['MoneyType'] = Http_Validation::getInt('MoneyType', 5);
            $iattraction['Address'] = Http_Validation::getInput('Address', 255);
            $iattraction['Lng'] = Http_Validation::getInput('Lng', 20);
            $iattraction['Lat'] = Http_Validation::getInput('Lat', 20);
            $iattraction['Hot'] = Http_Validation::getInt('Hot', 1);
            $iattraction['ParkService'] = Http_Validation::getInt('ParkService', 1);
            $iattraction['BusinessHours'] = Http_Validation::getTextArea('BusinessHours', 3000);
            $iattraction['TicketPrice'] = Http_Validation::getTextArea('TicketPrice', 3000);
            $iattraction['Traffic'] = Http_Validation::getTextArea('Traffic', 3000);
            $iattraction['Description'] = Http_Validation::getTextArea('Description', 10000);
            $iattraction['Raiders'] = Http_Validation::getTextArea('Raiders', 8000);
            $iattraction['Note'] = Http_Validation::getTextArea('Note', 3000);
            $theme = Http_Validation::get('Theme');

            if ((isset($theme)) && (!empty($theme))) {
                $iattraction['ThemeIds'] = implode(",", $theme);
                $this->tpl->assign("theme", $theme);
            }
            if (!empty($iattraction['NameCn'])) { //景点中文名称必填
                $save_sign = IattractionDao::DB_UpdateIattractionById($iattraction_id, $iattraction, false);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "Iattraction/ListIattraction?save_sign=true");
                    exit();
                }
            } else {
                $this->tpl->assign("edit_error", "true");
            }
        } else { //编辑页面
            $iattraction = IattractionDao::DB_GetIattractionInfoById($iattraction_id);
            if (!empty($iattraction['ThemeIds'])) {
                $theme = explode(",", $iattraction['ThemeIds']);
                $this->tpl->assign("theme", $theme);
            }
        }
        $this->tpl->assign('iattraction', $iattraction);
        $this->tpl->display("iattraction/iattraction_edit.html");
    }

    /**
     * 景点列表
     */
    public function ListIattraction()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_iattraction = IattractionDao::countNumByWhe();
        $iattraction_list = IattractionDao::DB_GetIattractionByPage($page, $page_size);
        $page = new Page($total_iattraction, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('iattraction_list', $iattraction_list);

        $this->tpl->display("iattraction/iattraction_list.html");
    }

    /**
     * 查看景点信息
     */
    public function ViewIattraction()
    {
        $iattraction_id = Http_Validation::getInt('iattraction_id');
        $iattraction = IattractionDao::DB_GetIattractionInfoById($iattraction_id);
        $iattraction_picture = IattractionDao::DB_GetIattractionPictureByAid($iattraction_id);
        if (!empty($iattraction['ThemeIds'])) {
            $theme = explode(",", $iattraction['ThemeIds']);
            $this->tpl->assign("theme", $theme);
        }
        $city = CityDao::DB_GetCityInfoByCityId($iattraction['CityID']);
        $this->tpl->assign('city', $city);
        $this->tpl->assign('iattraction', $iattraction);
        $this->tpl->assign('iattraction_picture', $iattraction_picture);

        $this->tpl->display("iattraction/iattraction_view.html");
    }

    /**
     * 景点图片管理
     */
    public function PictureIattraction()
    {
        $iattraction_id = Http_Validation::getInt('iattraction_id');

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
            $pic_abs_path = UPLOAD_ABSOLUTELY_PATH . "web/itravel/iattraction" . '/' . date("Y-m") . '/';
            $pic_rela_path = UPLOAD_RELATIVE_PATH . "web/itravel/iattraction" . '/' . date("Y-m") . '/';
            Directory_File::dirCreate($pic_abs_path);
            //图上传
            $pic_abs_src = $pic_abs_path . $name_noext_pinyin . $name_ext;
            $pic_rela_src = $pic_rela_path . $name_noext_pinyin . $name_ext;
            file_put_contents($pic_abs_src, file_get_contents('php://input')); //存放

            $iattraction_picture['TravelIattractionId'] = $iattraction_id;
            $iattraction_picture['PictureName'] = $name_noext_pinyin . $name_ext;
            $iattraction_picture['PictureTitle'] = $picture_title;
            $iattraction_picture['PictureDescription'] = $picture_description;
            $iattraction_picture['PictureSrc'] = $pic_rela_src;
            IattractionDao::DB_SaveIattractionPicture($iattraction_picture);
            echo $pic_rela_src;
        } else {
            $iattraction = IattractionDao::DB_GetIattractionInfoById($iattraction_id);
            $iattraction_picture = IattractionDao::DB_GetIattractionPictureByAid($iattraction_id);
            $this->tpl->assign("iattraction", $iattraction);
            $this->tpl->assign("iattraction_picture", $iattraction_picture);

            $this->tpl->display("iattraction/iattraction_picture.html");
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
        $iattraction_id = Http_Validation::getInt('iattraction_id');
        $iattraction['Valid'] = Http_Validation::getInt('valid');
        echo IattractionDao::DB_UpdateIattractionById($iattraction_id, $iattraction, false);
    }

    /**
     * 删除景点图片
     */
    public function AjaxDelIattractionPic()
    {
        $pic_id = Http_Validation::getInt('pic_id');
        echo IattractionDao::DB_DelIattractionPictureById($pic_id);
    }
}

?>