<?php

class GoodsOrderController extends BaseController
{
    private $order_source = array(0 => 'Web主站');

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 商品订单列表
     */
    public function ListGoodsOrder()
    {
        $page = Http_Validation::getInt('p');
        $page_size = 20;
        $total_goods_order = GoodsOrderDao::countNumByWhe();
        $goods_order_list = GoodsOrderDao::DB_GetGoodsOrderByPage($page, $page_size);
        foreach ($goods_order_list as $key => $val) {
            $goods_order_list[$key]['OrderSource'] = $this->order_source[$val['OrderSource']];
        }
        $page = new Page($total_goods_order, $page_size);
        $total_page = $page->get_totalPages();

        if (Http_Validation::get('save_sign')) {
            $this->tpl->assign('save_sign', Http_Validation::get('save_sign'));
        }
        $this->tpl->assign('total_page', $total_page);
        $this->tpl->assign('page', $page->show(1));
        $this->tpl->assign('goods_order_list', $goods_order_list);

        $this->tpl->display("goods_order/goods_order_list.html");
    }

    public function EditGoodsOrder()
    {
        $http_method = Http_Handle::getMethod();
        $goods_order_id = Http_Validation::getInt('goods_order_id');
        if (strtoupper($http_method) == "POST") { //有form表单提交，即修改商品逻辑
            $goods_order = array();
            $goods_order['PayState'] = Http_Validation::getInt('PayState', 5);
            $goods_order['ConfirmState'] = Http_Validation::getInt('ConfirmState', 5);
            $goods_order['ExpressState'] = Http_Validation::getInt('ExpressState', 5);
            $goods_order['InternalNotes'] = Http_Validation::getTextArea('InternalNotes', 10000);

            if (!empty($goods_order_id)) { //商品中文名称必填
                $save_sign = GoodsOrderDao::DB_UpdateGoodsOrderById($goods_order_id, $goods_order, false);
                if ($save_sign) { //保存成功返回列表页
                    header("Location:" . APP_HTTP_URL . "GoodsOrder/ListGoodsOrder?save_sign=true");
                    exit();
                }
            } else {
                $this->tpl->assign("edit_error", "true");
            }
        } else { //编辑页面
            $goods_order = GoodsOrderDao::DB_GetGoodsOrderInfoById($goods_order_id);
            $giupbn = $goods_order['GiUpBn'];
            $order_goods = $this->GetOrderGoodsByGiUpBn($giupbn);
            $goods_order['OrderSource'] = $this->order_source[$goods_order['OrderSource']];
        }
        $this->tpl->assign('goods_order', $goods_order);
        $this->tpl->assign('order_goods', $order_goods);
        $this->tpl->display("goods_order/goods_order_edit.html");
    }

    /**
     * 查看订单信息
     */
    public function ViewGoodsOrder()
    {
        $goods_order_id = Http_Validation::getInt('goods_order_id');
        //订单基本信息
        $goods_order = GoodsOrderDao::DB_GetGoodsOrderInfoById($goods_order_id);

        //订单商品信息
        $goods_order = GoodsOrderDao::DB_GetGoodsOrderInfoById($goods_order_id);
        $giupbn = $goods_order['GiUpBn'];
        $order_goods = $this->GetOrderGoodsByGiUpBn($giupbn);
        $goods_order['OrderSource'] = $this->order_source[$goods_order['OrderSource']];

        //订单日志信息
        $goods_order_logs = GoodsOrderDao::DB_GetGoodsOrderLogByOrderId($goods_order_id);

        //获取日志中的业务员
        $admin_arr = "";
        foreach ($goods_order_logs as $key => $val) {
            $admin_arr[] = $val['AdminAccountId'];
        }
        $admin_arr = array_unique($admin_arr);
        if (!empty($admin_arr)) {
            $account_ids = implode($admin_arr, ",");
            $accounts = AdminAccountDao::DB_GetAdminAccountInfosByIds($account_ids);
            foreach ($accounts as $k => $v) {
                $admin_account[$v['ID']] = $v['RealName'];
            }
        }
        $this->tpl->assign('goods_order', $goods_order);
        $this->tpl->assign('order_goods', $order_goods);
        $this->tpl->assign('goods_order_logs', $goods_order_logs);
        $this->tpl->assign('admin_account', $admin_account);

        $this->tpl->display("goods_order/goods_order_view.html");
    }

    /**
     * 根据订单id，异步获取订单日志
     */
    public function AjaxGetGoodsOrderLog()
    {
        $order_id = Http_Validation::getInput('order_id', 11);
        $goods_order_logs = GoodsOrderDao::DB_GetGoodsOrderLogByOrderId($order_id);
        echo json_encode($goods_order_logs);
    }


    /**
     * 获取订单中商品的详细信息
     * @param $giupbn
     * @return bool
     */
    private function GetOrderGoodsByGiUpBn($giupbn)
    {
        $giupbn = trim($giupbn, ",");
        $goods_str = "";
        if (!empty($giupbn)) {
            $gssp = strpos($giupbn, ",");
            if ($gssp !== false) { //判断是否为多个商品订单
                $giupbn_arr = explode(",", $giupbn);
                foreach ($giupbn_arr as $key => $val) {
                    $gub_arr = explode(":", $val);
                    $goods_str .= $gub_arr[0] . ",";
                    $goods['UnionPrice'] = $gub_arr[1];
                    $goods['Num'] = $gub_arr[2];
                    $order_goods[$gub_arr[0]] = $goods;
                }
                $goods_str = trim($goods_str, ",");
                $order_goods_info = GoodsDao::DB_GetGoodsInfosByIds($goods_str);
                foreach ($order_goods_info as $i => $j) {
                    $order_goods[$j['ID']]['Detail'] = $j;
                }
            } else { //单商品订单
                $gsp = strpos($giupbn, ":");
                if ($gsp !== false) {
                    $gub_arr = explode(":", $giupbn);
                    $goods['UnionPrice'] = $gub_arr[1];
                    $goods['Num'] = $gub_arr[2];
                    $goods['Detail'] = GoodsDao::DB_GetGoodsInfoById($gub_arr[0]);
                    $order_goods[$gub_arr[0]] = $goods;
                }
            }
            return $order_goods;
        } else {
            return false;
        }
    }

}