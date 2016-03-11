<?php

class BookController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->tpl->display("book.html");
    }
}