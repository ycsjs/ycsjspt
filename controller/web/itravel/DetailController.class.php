<?php

class DetailController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->tpl->display("detail.html");
    }
}