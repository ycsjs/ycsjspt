<?php
/**
 * 分页类
 */

class Page
{
    public $firstRow; //起始行数
    public $listRows; //列表每页显示行数
    public $parameter; //页数跳转时要带的参数
    protected $totalPages; //分页总页面数
    protected $totalRows; //总行数
    protected $nowPage; //当前页数
    protected $coolPages; //分页的栏的总页数
    protected $rollPage; //分页栏每页显示的页数
    protected $config = array('header' => '条记录', 'prev' => '上一页', 'next' => '下一页', 'first' => '第一页', 'last' => '最后一页');
    protected $var_page;
    protected $var_page_has_other_info = false;
    protected $url_rewrite;
    const DEFAULT_NUM = 10;
    const PRE_NUM = 5;

    /**
     * 构造函数
     * @param $totalRows
     * @param $listRows
     * @param string $rollPage
     * @param string $var_page
     * @param string $parameter
     * @param bool $url_rewrite
     */
    public function __construct($totalRows, $listRows, $rollPage = '', $var_page = '', $parameter = '', $url_rewrite = false)
    {
        $this->totalRows = $totalRows;
        $this->parameter = $parameter;
        $this->url_rewrite = $url_rewrite;
        $this->rollPage = !empty($rollPage) ? $rollPage : 5;
        $this->listRows = !empty($listRows) ? $listRows : 10;
        $this->totalPages = ceil($this->totalRows / $this->listRows); //总页数
        $this->coolPages = ceil($this->totalPages / $this->rollPage);

        if ($this->url_rewrite) {
            $this->var_page = $this->nowPage = $var_page; //当前页
        } else {
            $this->var_page = !empty($var_page) ? $var_page : 'p';
            if (strpos($_GET[$this->var_page], '_') !== false) {
                $this->var_page_has_other_info = true;
                $p_sort_order = explode('_', $_GET[$this->var_page]);
                $this->nowPage = !empty($p_sort_order[0]) ? $p_sort_order[0] : 1; //当前页
            } else {
                $this->nowPage = !empty($_GET[$this->var_page]) ? $_GET[$this->var_page] : 1; //当前页
            }
        }
        if (!empty($this->totalPages) && $this->nowPage > $this->totalPages) {
            $this->nowPage = $this->totalPages;
        }
        $this->firstRow = $this->listRows * ($this->nowPage - 1);
    }

    public function setConfig($name, $value)
    {
        if (isset($this->config[$name])) {
            $this->config[$name] = $value;
        }
    }

    public function get_nowPage()
    {
        return $this->nowPage;
    }

    public function get_totalPages()
    {
        return $this->totalPages;
    }

    public function get_url()
    {
        $url = safe_replace($_SERVER['REQUEST_URI']) . (strpos(safe_replace($_SERVER['REQUEST_URI']), '?') ? '' : "?") . $this->parameter;
        $parse = parse_url($url);
        if (isset($parse['query'])) {
            parse_str($parse['query'], $params);
            $url = $parse['path'] . '?' . http_build_query($params);
        }
        return $url;
    }

    public function get_url_str($page = 1)
    {
        if ($this->parameter) {
            $url = safe_replace($_SERVER['REQUEST_URI']) . (strpos(safe_replace($_SERVER['REQUEST_URI']), '?') ? '' : "?") . $this->parameter;
        } else {
            $url = safe_replace($_SERVER['REQUEST_URI']);
        }
        $parse = parse_url($url);
        $pathinfo = pathinfo($url);
        $path = explode('?', $pathinfo['extension']);
        if ($this->url_rewrite) {
            if ($page == 1) {
                $_p_str = "";
            } else {
                $_p_str = "p" . $page;
            }
            $url = preg_replace("/(p[0-9]*)?\.html/", $_p_str . ".html", $_SERVER['REQUEST_URI']);
        } elseif ($path[0] == 'html') { //重写
            if (!$this->var_page_has_other_info) {
                $url = preg_replace('/-[0-9]*\.html/', '-' . $page . '.html', $url);
            }
        } else {
            if (isset($parse['query']) && !empty($parse['query'])) {
                parse_str($parse['query'], $params);
                $p = $this->var_page;
                unset($params[$p]);
                $url = $parse['path'] . '?' . http_build_query($params);
                if (empty($params)) {
                    $url .= '' . $this->var_page . '=' . $page;
                } else {
                    $url .= '&' . $this->var_page . '=' . $page;
                }
            } else {
                $url .= '?' . $this->var_page . '=' . $page;
            }
        }
        return $url;
    }

    /**
     * 分页显示输出
     * @param bool $isSimple
     * @return string
     */
    public function show($isSimple = false)
    {
        if (0 == $this->totalRows) return '';
        $nowCoolPage = ceil($this->nowPage / $this->rollPage);
        //上下翻页字符串
        $upRow = $this->nowPage - 1;
        $downRow = $this->nowPage + 1;
        $upPage = $downPage = '';
        if ($upRow > 0) {
            $upPage = "<li class='pageback_button_select'><a href='" . $this->get_url_str($upRow) . "'>" . $this->config['prev'] . "</a></li>";
        } else {
            if ($this->totalPages > 1) {
                $upPage = "<li class='pageback_button'><a href='javascript:void(0);'>" . $this->config['prev'] . "</a></li>"; //没有上一页置灰
            }
        }
        if ($downRow <= $this->totalPages) {
            $downPage = "<li class='nextpage_select'><a href='" . $this->get_url_str($downRow) . "' class='nextpage'>" . $this->config['next'] . "</a></li>";
        } else {
            if ($this->totalPages > 1) {
                $downPage = "<li class='nextpage'><a href='javascript:void(0);'>" . $this->config['next'] . "</a></li>"; //没有下一页置灰
            }
        }
        // 第一页 和 最后页 
        $offset = ceil($this->rollPage / 2); // 如果 rollpage 是奇数则当前页前后的元素数是一样的，否则前面会比后面少一个。
        $offset_pre = $offset - 1; // 当前页 在分页栏里 前面的元素数
        $offset_suff = $this->rollPage - $offset; //当前页 在分页栏里 后面的元素数。

        $off_pre = $this->nowPage - $offset_pre; //分页栏的第一个元素
        $off_suff = $this->nowPage + $offset_suff; //分页栏的最后一个元素

        $theFirst = ""; // 前n页
        $prePage = ""; // 分页栏前省略号
        $nextPage = ""; // 分页栏后省略号
        $theEnd = ""; //最后一页

        if ($off_pre <= 0) {
            $off_pre = 1;
        }
        if ($isSimple) {
            if ($off_pre > 2) {
                $prePage = "<li>...</li>";
            }
            if ($off_pre > 1) {
                $theFirst = "<li><a href='" . $this->get_url_str(1) . "'>1</a></li>"; //第一页
            }

        } else {
            if ($this->totalPages <= self::DEFAULT_NUM || ($this->totalPages > self::DEFAULT_NUM && $this->nowPage < self::DEFAULT_NUM)) {
                for ($k = 1; $k < $off_pre; $k++) {
                    $theFirst .= "<li><a href='" . $this->get_url_str($k) . "'>" . $k . "</a></li>"; //前n页
                }
                if ($off_pre >= 1 && $off_pre < self::DEFAULT_NUM - $offset_pre) {
                    $off_suff = 10;
                }
            } else {
                for ($k = 1; $k <= self::PRE_NUM; $k++) {
                    $theFirst .= "<li><a href='" . $this->get_url_str($k) . "'>" . $k . "</a></li>"; //前5页
                }
                $prePage = "<li>...</li>"; // 分页栏前省略号
            }
        }

        if ($off_suff > $this->totalPages) {
            $off_suff = $this->totalPages;
        }
        if ($off_suff <= $this->totalPages - 2) {
            $nextPage = "<li>...</li>";
        }
        if ($off_suff <= $this->totalPages - 1) {
            $theEnd = "<li><a href='" . $this->get_url_str($this->totalPages) . "' >" . $this->totalPages . "</a></li>"; //最后一页
        }

        // 1 2 3 4  生成分页栏
        $linkPage = "";
        for ($k = $off_pre; $k <= $off_suff; $k++) {
            if ($k != $this->nowPage) {
                if ($k <= $this->totalPages) {
                    $linkPage .= "<li><a href='" . $this->get_url_str($k) . "'>" . $k . "</a></li>";
                } else {
                    break;
                }
            } else {
                if ($this->totalPages != 1) {
                    $linkPage .= "<li><a href='javascript:void(0);'  class='select_pagelist'>" . $k . "</a></li>";
                }
            }
        }

        $pageStr = $upPage . ' ' . $theFirst . ' ' . $prePage . ' ' . $linkPage . ' ' . $nextPage . ' ' . $theEnd . ' ' . $downPage;
        return $pageStr;
    }

}

?>