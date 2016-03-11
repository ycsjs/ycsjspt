<?php

/**
 * 礼品卡
 */
class IndexController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 礼品卡首页
     */
    public function Index()
    {
        echo "礼品卡首页";
        die();
        $this->tpl->display("index.html");
    }
}

?>