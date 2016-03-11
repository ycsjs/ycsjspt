<?php


class BaseController
{

    public $tpl = null;

    public function __construct($themes = '')
    {
        //模板
        if ($this->tpl === NULL) {
            $this->tpl = new SmartyCap();

            $this->tpl->assign('http_url', HTTP_URL);
            $this->tpl->assign('http_resource_url', HTTP_RESOURCE_URL);
            $this->tpl->assign('http_resource_css_url', HTTP_RESOURCE_URL . RESOURCE_COMMON_CSS_PATH);
            $this->tpl->assign('http_resource_js_url', HTTP_RESOURCE_URL . RESOURCE_COMMON_JS_PATH);
            $this->tpl->assign('http_resource_imgs_url', HTTP_RESOURCE_URL . RESOURCE_COMMON_IMGS_PATH);
            $this->tpl->assign('http_resource_plugs_url', HTTP_RESOURCE_URL . RESOURCE_COMMON_PLUGS_PATH);

            $this->tpl->assign('secure_url', SECURE_URL);
            $this->tpl->assign('img_server_url', IMG_SERVER_URL);
            $this->tpl->assign('cookie_domain', COOKIE_DOMAIN);

            $this->tpl->assign('app_http_url', APP_HTTP_URL);
            $this->tpl->assign('app_resource_css_url', HTTP_RESOURCE_URL . APP_RESOURCE_CSS_PATH);
            $this->tpl->assign('app_resource_imgs_url', HTTP_RESOURCE_URL . APP_RESOURCE_IMGS_PATH);
            $this->tpl->assign('app_resource_js_url', HTTP_RESOURCE_URL . APP_RESOURCE_JS_PATH);
        }

    }
}

?>
