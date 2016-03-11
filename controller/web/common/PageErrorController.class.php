<?php


class PageErrorController extends BaseController {

    public function page_error(){
        header("HTTP/1.1 404 Not Found");
        $this->tpl->display(APP_TYPE_COMMON_THEME_PATH."page_404.html");
    }
}

?>