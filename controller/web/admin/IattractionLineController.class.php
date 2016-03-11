<?php

/**
 * 出境游线路类
 */
class IattractionLineController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 增加海外线路
     */
    public function AddIattractionLine()
    {
        $http_method = Http_Handle::getMethod();
        if (strtoupper($http_method) == "POST") { //有form表单提交，即新增线路

            $iattraction_line = array();
            $iattraction_line['LineCode'] = Http_Validation::getInput('LineCode', 50);
            $iattraction_line['Title'] = Http_Validation::getInput('Title', 255);
            $iattraction_line['TravelAgentId'] = Http_Validation::getInt('TravelAgentId', 11);
            $iattraction_line['Hot'] = Http_Validation::getInt('Hot', 1);
            $iattraction_line['ChildrenBuyPrice'] = Http_Validation::getInt('ChildrenBuyPrice', 11);
            $iattraction_line['ChildrenSellPrice'] = Http_Validation::getInt('ChildrenSellPrice', 11);
            $iattraction_line['AdultBuyPrice'] = Http_Validation::getInt('AdultBuyPrice', 11);
            $iattraction_line['AdultSellPrice'] = Http_Validation::getInt('AdultSellPrice', 11);
            $iattraction_line['DayNum'] = Http_Validation::getInt('DayNum', 3);
            $iattraction_line['MoneyType'] = Http_Validation::getInt('MoneyType', 5);
            $iattraction_line['StartDate'] = Http_Validation::get('StartDate');
            $iattraction_line['EndDate'] = Http_Validation::get('EndDate');
            $iattraction_line['GoOff'] = Http_Validation::get('GoOff');
            $iattraction_line['PriceInclude'] = Http_Validation::getTextArea('PriceInclude', 3000);
            $iattraction_line['PriceNoInclude'] = Http_Validation::getTextArea('PriceNoInclude', 3000);
            $iattraction_line['Introduction'] = Http_Validation::getTextArea('Introduction', 5000);
            $iattraction_line['Detail'] = Http_Validation::getTextArea('Detail', 10000);
            $iattraction_line['Notice'] = Http_Validation::getTextArea('Notice', 3000);
            $theme = Http_Validation::get('Theme');
            if ((isset($theme)) && (!empty($theme))) {
                $iattraction_line['ThemeIds'] = implode(",", $theme);
                $this->tpl->assign("theme", $theme);
            }
            $schedule = Http_Validation::get('Schedule');
            if ((isset($schedule)) && (!empty($schedule))) {
                $iattraction_line['Schedule'] = implode(",", $schedule);
                $this->tpl->assign("schedule", $schedule);
            }
            $iattraction_line = array_filter($iattraction_line); //过滤为空的元素

            if (!empty($iattraction_line['LineCode'])) { //线路中文名称必填
                $save_sign = IattractionLineDao::DB_SaveIattractionLine($iattraction_line);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "IattractionLine/ListIattractionLine?save_sign=true");
                    exit();
                }
            }
            $this->tpl->assign("save_error", "true");
            $this->tpl->assign("iattraction_line", $iattraction_line);
        }
        $this->tpl->display("iattraction_line/iattraction_line_add.html");
    }


    /**
     * 线路列表
     */
    public function ListIattractionLine()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_iattraction_line = IattractionLineDao::countNumByWhe();
        $iattraction_line_list = IattractionLineDao::DB_GetIattractionLineByPage($page, $page_size);
        $page = new Page($total_iattraction_line, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('iattraction_line_list', $iattraction_line_list);

        $this->tpl->display("iattraction_line/iattraction_line_list.html");
    }


    public function EditIattractionLine()
    {
        $http_method = Http_Handle::getMethod();
        $iattraction_line_id = Http_Validation::getInt('iattraction_line_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改线路逻辑
            $iattraction_line = array();
            $iattraction_line['LineCode'] = Http_Validation::getInput('LineCode', 50);
            $iattraction_line['Title'] = Http_Validation::getInput('Title', 255);
            $iattraction_line['TravelAgentId'] = Http_Validation::getInt('TravelAgentId', 11);
            $iattraction_line['Hot'] = Http_Validation::getInt('Hot', 1);
            $iattraction_line['ChildrenBuyPrice'] = Http_Validation::getInt('ChildrenBuyPrice', 11);
            $iattraction_line['ChildrenSellPrice'] = Http_Validation::getInt('ChildrenSellPrice', 11);
            $iattraction_line['AdultBuyPrice'] = Http_Validation::getInt('AdultBuyPrice', 11);
            $iattraction_line['AdultSellPrice'] = Http_Validation::getInt('AdultSellPrice', 11);
            $iattraction_line['DayNum'] = Http_Validation::getInt('DayNum', 3);
            $iattraction_line['MoneyType'] = Http_Validation::getInt('MoneyType', 5);
            $iattraction_line['StartDate'] = Http_Validation::get('StartDate');
            $iattraction_line['EndDate'] = Http_Validation::get('EndDate');
            $iattraction_line['GoOff'] = Http_Validation::get('GoOff');
            $iattraction_line['PriceInclude'] = Http_Validation::getTextArea('PriceInclude', 3000);
            $iattraction_line['PriceNoInclude'] = Http_Validation::getTextArea('PriceNoInclude', 3000);
            $iattraction_line['Introduction'] = Http_Validation::getTextArea('Introduction', 5000);
            $iattraction_line['Detail'] = Http_Validation::getTextArea('Detail', 10000);
            $iattraction_line['Notice'] = Http_Validation::getTextArea('Notice', 3000);
            $theme = Http_Validation::get('Theme');
            if ((isset($theme)) && (!empty($theme))) {
                $iattraction_line['ThemeIds'] = implode(",", $theme);
                $this->tpl->assign("theme", $theme);
            }
            $schedule = Http_Validation::get('Schedule');
            if ((isset($schedule)) && (!empty($schedule))) {
                $iattraction_line['Schedule'] = implode(",", $schedule);
                $this->tpl->assign("schedule", $schedule);
            }

            if (!empty($iattraction_line['LineCode'])) { //线路中文名称必填
                $save_sign = IattractionLineDao::DB_UpdateIattractionLineById($iattraction_line_id, $iattraction_line, false);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "IattractionLine/ListIattractionLine?save_sign=true");
                    exit();
                }
            } else {
                $this->tpl->assign("edit_error", "true");
            }
        } else { //编辑页面
            $iattraction_line = IattractionLineDao::DB_GetIattractionLineInfoById($iattraction_line_id);
            if (!empty($iattraction_line['ThemeIds'])) {
                $theme = explode(",", $iattraction_line['ThemeIds']);
                $this->tpl->assign("theme", $theme);
            }
            if (!empty($iattraction_line['Schedule'])) {
                $schedule = explode(",", $iattraction_line['Schedule']);
                $this->tpl->assign("schedule", $schedule);
            }
        }
        $this->tpl->assign('iattraction_line', $iattraction_line);
        $this->tpl->display("iattraction_line/iattraction_line_edit.html");
    }

    /**
     * 查看线路信息
     */
    public function ViewIattractionLine()
    {
        $iattraction_line_id = Http_Validation::getInt('iattraction_line_id');
        $iattraction_line = IattractionLineDao::DB_GetIattractionLineInfoById($iattraction_line_id);
        $iattraction_line_picture=IattractionLineDao::DB_GetIattractionLinePictureByAid($iattraction_line_id);

        if (!empty($iattraction_line['ThemeIds'])) {
            $theme = explode(",", $iattraction_line['ThemeIds']);
            $this->tpl->assign("theme", $theme);
        }
        if (!empty($iattraction_line['Schedule'])) {
            $schedule = explode(",", $iattraction_line['Schedule']);
            $this->tpl->assign("schedule", $schedule);
        }
        $this->tpl->assign('iattraction_line', $iattraction_line);
        $this->tpl->assign('iattraction_line_picture', $iattraction_line_picture);
        $this->tpl->display("iattraction_line/iattraction_line_view.html");
    }


    /**
     * 线路图片管理
     */
    public function PictureIattractionLine()
    {
        $iattraction_line_id = Http_Validation::getInt('iattraction_line_id');

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
            $pic_abs_path = UPLOAD_ABSOLUTELY_PATH . "web/itravel/iattraction_line" . '/' . date("Y-m") . '/';
            $pic_rela_path = UPLOAD_RELATIVE_PATH . "web/itravel/iattraction_line" . '/' . date("Y-m") . '/';
            Directory_File::dirCreate($pic_abs_path);
            //图上传
            $pic_abs_src = $pic_abs_path . $name_noext_pinyin . $name_ext;
            $pic_rela_src = $pic_rela_path . $name_noext_pinyin . $name_ext;
            file_put_contents($pic_abs_src, file_get_contents('php://input')); //存放

            $iattraction_line_picture['TravelIattractionLineId'] = $iattraction_line_id;
            $iattraction_line_picture['PictureName'] = $name_noext_pinyin . $name_ext;
            $iattraction_line_picture['PictureTitle'] = $picture_title;
            $iattraction_line_picture['PictureDescription'] = $picture_description;
            $iattraction_line_picture['PictureSrc'] = $pic_rela_src;
            IattractionLineDao::DB_SaveIattractionLinePicture($iattraction_line_picture);
            echo $pic_rela_src;
        } else {
            $iattraction_line=IattractionLineDao::DB_GetIattractionLineInfoById($iattraction_line_id);
            $iattraction_line_picture=IattractionLineDao::DB_GetIattractionLinePictureByAid($iattraction_line_id);

            $this->tpl->assign("iattraction_line", $iattraction_line);
            $this->tpl->assign('iattraction_line_picture', $iattraction_line_picture);

            $this->tpl->display("iattraction_line/iattraction_line_picture.html");
        }
    }



    /**
     * 删除、恢复状态切换
     */
    public function AjaxChangeStatus()
    {
        $iattraction_line_id = Http_Validation::getInt('iattraction_line_id');
        $iattraction_line['Valid'] = Http_Validation::getInt('valid');
        echo IattractionLineDao::DB_UpdateIattractionLineById($iattraction_line_id, $iattraction_line, false);
    }

    /**
     * 删除线路图片
     */
    public function AjaxDelIattractionLinePic()
    {
        $pic_id = Http_Validation::getInt('pic_id');
        echo IattractionLineDao::DB_DelIattractionLinePictureById($pic_id);
    }

}

?>