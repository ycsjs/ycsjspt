<?php

class ListController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->tpl->display("list.html");
    }
}