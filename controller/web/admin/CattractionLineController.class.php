<?php

/**
 * 境内游线路类
 */
class CattractionLineController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 增加国内线路
     */
    public function AddCattractionLine()
    {
        $http_method = Http_Handle::getMethod();
        if (strtoupper($http_method) == "POST") { //有form表单提交，即新增线路

            $cattraction_line = array();
            $cattraction_line['LineCode'] = Http_Validation::getInput('LineCode', 50);
            $cattraction_line['Title'] = Http_Validation::getInput('Title', 255);
            $cattraction_line['TravelAgentId'] = Http_Validation::getInt('TravelAgentId', 11);
            $cattraction_line['Hot'] = Http_Validation::getInt('Hot', 1);
            $cattraction_line['ChildrenBuyPrice'] = Http_Validation::getInt('ChildrenBuyPrice', 11);
            $cattraction_line['ChildrenSellPrice'] = Http_Validation::getInt('ChildrenSellPrice', 11);
            $cattraction_line['AdultBuyPrice'] = Http_Validation::getInt('AdultBuyPrice', 11);
            $cattraction_line['AdultSellPrice'] = Http_Validation::getInt('AdultSellPrice', 11);
            $cattraction_line['DayNum'] = Http_Validation::getInt('DayNum', 3);
            $cattraction_line['MoneyType'] = Http_Validation::getInt('MoneyType', 5);
            $cattraction_line['StartDate'] = Http_Validation::get('StartDate');
            $cattraction_line['EndDate'] = Http_Validation::get('EndDate');
            $cattraction_line['GoOff'] = Http_Validation::get('GoOff');
            $cattraction_line['PriceInclude'] = Http_Validation::getTextArea('PriceInclude', 3000);
            $cattraction_line['PriceNoInclude'] = Http_Validation::getTextArea('PriceNoInclude', 3000);
            $cattraction_line['Introduction'] = Http_Validation::getTextArea('Introduction', 5000);
            $cattraction_line['Detail'] = Http_Validation::getTextArea('Detail', 10000);
            $cattraction_line['Notice'] = Http_Validation::getTextArea('Notice', 3000);
            $theme = Http_Validation::get('Theme');
            if ((isset($theme)) && (!empty($theme))) {
                $cattraction_line['ThemeIds'] = implode(",", $theme);
                $this->tpl->assign("theme", $theme);
            }
            $schedule = Http_Validation::get('Schedule');
            if ((isset($schedule)) && (!empty($schedule))) {
                $cattraction_line['Schedule'] = implode(",", $schedule);
                $this->tpl->assign("schedule", $schedule);
            }
            $cattraction_line = array_filter($cattraction_line); //过滤为空的元素

            if (!empty($cattraction_line['LineCode'])) { //线路中文名称必填
                $save_sign = CattractionLineDao::DB_SaveCattractionLine($cattraction_line);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "CattractionLine/ListCattractionLine?save_sign=true");
                    exit();
                }
            }
            $this->tpl->assign("save_error", "true");
            $this->tpl->assign("cattraction_line", $cattraction_line);
        }
        $this->tpl->display("cattraction_line/cattraction_line_add.html");
    }


    /**
     * 线路列表
     */
    public function ListCattractionLine()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_cattraction_line = CattractionLineDao::countNumByWhe();
        $cattraction_line_list = CattractionLineDao::DB_GetCattractionLineByPage($page, $page_size);
        $page = new Page($total_cattraction_line, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('cattraction_line_list', $cattraction_line_list);

        $this->tpl->display("cattraction_line/cattraction_line_list.html");
    }


    public function EditCattractionLine()
    {
        $http_method = Http_Handle::getMethod();
        $cattraction_line_id = Http_Validation::getInt('cattraction_line_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改线路逻辑
            $cattraction_line = array();
            $cattraction_line['LineCode'] = Http_Validation::getInput('LineCode', 50);
            $cattraction_line['Title'] = Http_Validation::getInput('Title', 255);
            $cattraction_line['TravelAgentId'] = Http_Validation::getInt('TravelAgentId', 11);
            $cattraction_line['Hot'] = Http_Validation::getInt('Hot', 1);
            $cattraction_line['ChildrenBuyPrice'] = Http_Validation::getInt('ChildrenBuyPrice', 11);
            $cattraction_line['ChildrenSellPrice'] = Http_Validation::getInt('ChildrenSellPrice', 11);
            $cattraction_line['AdultBuyPrice'] = Http_Validation::getInt('AdultBuyPrice', 11);
            $cattraction_line['AdultSellPrice'] = Http_Validation::getInt('AdultSellPrice', 11);
            $cattraction_line['DayNum'] = Http_Validation::getInt('DayNum', 3);
            $cattraction_line['MoneyType'] = Http_Validation::getInt('MoneyType', 5);
            $cattraction_line['StartDate'] = Http_Validation::get('StartDate');
            $cattraction_line['EndDate'] = Http_Validation::get('EndDate');
            $cattraction_line['GoOff'] = Http_Validation::get('GoOff');
            $cattraction_line['PriceInclude'] = Http_Validation::getTextArea('PriceInclude', 3000);
            $cattraction_line['PriceNoInclude'] = Http_Validation::getTextArea('PriceNoInclude', 3000);
            $cattraction_line['Introduction'] = Http_Validation::getTextArea('Introduction', 5000);
            $cattraction_line['Detail'] = Http_Validation::getTextArea('Detail', 10000);
            $cattraction_line['Notice'] = Http_Validation::getTextArea('Notice', 3000);
            $theme = Http_Validation::get('Theme');
            if ((isset($theme)) && (!empty($theme))) {
                $cattraction_line['ThemeIds'] = implode(",", $theme);
                $this->tpl->assign("theme", $theme);
            }
            $schedule = Http_Validation::get('Schedule');
            if ((isset($schedule)) && (!empty($schedule))) {
                $cattraction_line['Schedule'] = implode(",", $schedule);
                $this->tpl->assign("schedule", $schedule);
            }

            if (!empty($cattraction_line['LineCode'])) { //线路中文名称必填
                $save_sign = CattractionLineDao::DB_UpdateCattractionLineById($cattraction_line_id, $cattraction_line, false);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "CattractionLine/ListCattractionLine?save_sign=true");
                    exit();
                }
            } else {
                $this->tpl->assign("edit_error", "true");
            }
        } else { //编辑页面
            $cattraction_line = CattractionLineDao::DB_GetCattractionLineInfoById($cattraction_line_id);
            if (!empty($cattraction_line['ThemeIds'])) {
                $theme = explode(",", $cattraction_line['ThemeIds']);
                $this->tpl->assign("theme", $theme);
            }
            if (!empty($cattraction_line['Schedule'])) {
                $schedule = explode(",", $cattraction_line['Schedule']);
                $this->tpl->assign("schedule", $schedule);
            }
        }
        $this->tpl->assign('cattraction_line', $cattraction_line);
        $this->tpl->display("cattraction_line/cattraction_line_edit.html");
    }

    /**
     * 查看线路信息
     */
    public function ViewCattractionLine()
    {
        $cattraction_line_id = Http_Validation::getInt('cattraction_line_id');
        $cattraction_line = CattractionLineDao::DB_GetCattractionLineInfoById($cattraction_line_id);
        $cattraction_line_picture=CattractionLineDao::DB_GetCattractionLinePictureByAid($cattraction_line_id);

        if (!empty($cattraction_line['ThemeIds'])) {
            $theme = explode(",", $cattraction_line['ThemeIds']);
            $this->tpl->assign("theme", $theme);
        }
        if (!empty($cattraction_line['Schedule'])) {
            $schedule = explode(",", $cattraction_line['Schedule']);
            $this->tpl->assign("schedule", $schedule);
        }
        $this->tpl->assign('cattraction_line', $cattraction_line);
        $this->tpl->assign('cattraction_line_picture', $cattraction_line_picture);
        $this->tpl->display("cattraction_line/cattraction_line_view.html");
    }


    /**
     * 线路图片管理
     */
    public function PictureCattractionLine()
    {
        $cattraction_line_id = Http_Validation::getInt('cattraction_line_id');

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
            $pic_abs_path = UPLOAD_ABSOLUTELY_PATH . "web/ctravel/cattraction_line" . '/' . date("Y-m") . '/';
            $pic_rela_path = UPLOAD_RELATIVE_PATH . "web/ctravel/cattraction_line" . '/' . date("Y-m") . '/';
            Directory_File::dirCreate($pic_abs_path);
            //图上传
            $pic_abs_src = $pic_abs_path . $name_noext_pinyin . $name_ext;
            $pic_rela_src = $pic_rela_path . $name_noext_pinyin . $name_ext;
            file_put_contents($pic_abs_src, file_get_contents('php://input')); //存放

            $cattraction_line_picture['TravelCattractionLineId'] = $cattraction_line_id;
            $cattraction_line_picture['PictureName'] = $name_noext_pinyin . $name_ext;
            $cattraction_line_picture['PictureTitle'] = $picture_title;
            $cattraction_line_picture['PictureDescription'] = $picture_description;
            $cattraction_line_picture['PictureSrc'] = $pic_rela_src;
            CattractionLineDao::DB_SaveCattractionLinePicture($cattraction_line_picture);
            echo $pic_rela_src;
        } else {
            $cattraction_line=CattractionLineDao::DB_GetCattractionLineInfoById($cattraction_line_id);
            $cattraction_line_picture=CattractionLineDao::DB_GetCattractionLinePictureByAid($cattraction_line_id);

            $this->tpl->assign("cattraction_line", $cattraction_line);
            $this->tpl->assign('cattraction_line_picture', $cattraction_line_picture);

            $this->tpl->display("cattraction_line/cattraction_line_picture.html");
        }
    }



    /**
     * 删除、恢复状态切换
     */
    public function AjaxChangeStatus()
    {
        $cattraction_line_id = Http_Validation::getInt('cattraction_line_id');
        $cattraction_line['Valid'] = Http_Validation::getInt('valid');
        echo CattractionLineDao::DB_UpdateCattractionLineById($cattraction_line_id, $cattraction_line, false);
    }

    /**
     * 删除线路图片
     */
    public function AjaxDelCattractionLinePic()
    {
        $pic_id = Http_Validation::getInt('pic_id');
        echo CattractionLineDao::DB_DelCattractionLinePictureById($pic_id);
    }

}

?>