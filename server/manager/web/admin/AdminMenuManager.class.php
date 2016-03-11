<?php


class AdminMenuManager
{

    /**
     * 目录菜单
     */

    public static $menus = array(
        '0' => array(
            'menu_adpter' => 'System',
            'menu_name' => '系统管理',
            'menu_list' => array(
                '0' => array(
                    'menu_controller' => 'Account',
                    'menu_name' => '管理员',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => 'ListAccount',
                            'menu_name' => '管理员列表',
                        )
                    ),
                ),
                '1' => array(
                    'menu_controller' => 'AccountLog',
                    'menu_name' => '日志',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => 'AccountLogList',
                            'menu_name' => '查看日志',
                        )
                    ),
                ),
            )
        ),
        '1' => array(
            'menu_adpter' => 'Travel',
            'menu_name' => '旅游管理',
            'menu_list' => array(
                '0' => array(
                    'menu_controller' => 'Iattraction',
                    'menu_name' => '境外景点',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => 'AddIattraction',
                            'menu_name' => '添加境外景点',
                        ),
                        '1' => array(
                            'menu_action' => 'ListIattraction',
                            'menu_name' => '境外景点管理',
                        )
                    ),
                ),
                '1' => array(
                    'menu_controller' => 'IattractionLine',
                    'menu_name' => '境外线路',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => 'AddIattractionLine',
                            'menu_name' => '添加境外线路',
                        ),
                        '1' => array(
                            'menu_action' => 'ListIattractionLine',
                            'menu_name' => '境外线路管理',
                        )
                    ),
                ),

                '2' => array(
                    'menu_controller' => 'Cattraction',
                    'menu_name' => '国内景点',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => 'AddCattraction',
                            'menu_name' => '添加国内景点',
                        ),
                        '1' => array(
                            'menu_action' => 'ListCattraction',
                            'menu_name' => '国内景点管理',
                        )
                    ),
                ),
                '3' => array(
                    'menu_controller' => 'CattractionLine',
                    'menu_name' => '国内线路',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => 'AddCattractionLine',
                            'menu_name' => '添加国内线路',
                        ),
                        '1' => array(
                            'menu_action' => 'ListCattractionLine',
                            'menu_name' => '国内线路管理',
                        )
                    ),
                ),
                '4' => array(
                    'menu_controller' => 'TravelSupplier',
                    'menu_name' => '旅游供应商',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => 'AddTravelSupplier',
                            'menu_name' => '添加供应商',
                        ),
                        '1' => array(
                            'menu_action' => 'ListTravelSupplier',
                            'menu_name' => '供应商管理',
                        )
                    ),
                ),
            )
        ),


        '2' => array(
            'menu_adpter' => 'Goods',
            'menu_name' => '商品管理',
            'menu_list' => array(
                '0' => array(
                    'menu_controller' => 'GoodsBase',
                    'menu_name' => '商品基础数据',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => 'ListGoodsCategory',
                            'menu_name' => '商品类型列表',
                        ),
                        '1' => array(
                            'menu_action' => 'ListGoodsGroup',
                            'menu_name' => '目标人群列表',
                        ),
                        '2' => array(
                            'menu_controller' => 'GoodsBrand',
                            'menu_action' => 'ListGoodsBrand',
                            'menu_name' => '商品品牌列表',
                        )
                    ),
                ),
                '1' => array(
                    'menu_controller' => 'Goods',
                    'menu_name' => '商品管理',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => 'AddGoods',
                            'menu_name' => '添加商品',
                        ),
                        '1' => array(
                            'menu_action' => 'ListGoods',
                            'menu_name' => '商品管理',
                        )
                    ),
                ),
                '2' => array(
                    'menu_controller' => 'GoodsSupplier',
                    'menu_name' => '商品供应商',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => 'AddGoodsSupplier',
                            'menu_name' => '添加供应商',
                        ),
                        '1' => array(
                            'menu_action' => 'ListGoodsSupplier',
                            'menu_name' => '供应商管理',
                        )
                    ),
                ),
            )
        ),
        '3' => array(
            'menu_adpter' => 'Order',
            'menu_name' => '订单管理',
            'menu_list' => array(
                '0' => array(
                    'menu_controller' => 'Order',
                    'menu_name' => '订单管理',
                    'menu_list' => array(
                        '0' => array(
                            'menu_controller' => 'ItravelOrder',
                            'menu_action' => 'ListItravelOrder',
                            'menu_name' => '境外旅游订单',
                        ),
                        '1' => array(
                            'menu_controller' => 'CtravelOrder',
                            'menu_action' => 'ListCtravelOrder',
                            'menu_name' => '境内旅游订单',
                        ),
                        '2' => array(
                            'menu_controller' => 'GoodsOrder',
                            'menu_action' => 'ListGoodsOrder',
                            'menu_name' => '普通商品订单',
                        ),
                    ),
                ),
            )
        ),
        '4' => array(
            'menu_adpter' => 'Financial',
            'menu_name' => '财务管理',
            'menu_list' => array(
                '0' => array(
                    'menu_controller' => '##',
                    'menu_name' => '##',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => '#',
                            'menu_name' => '#',
                        ),
                        '1' => array(
                            'menu_action' => '#',
                            'menu_name' => '#',
                        ),
                        '2' => array(
                            'menu_action' => '#',
                            'menu_name' => '#',
                        ),
                    ),
                ),
            )
        ),
        '5' => array(
            'menu_adpter' => 'Card',
            'menu_name' => '礼品卡',
            'menu_list' => array(
                '0' => array(
                    'menu_controller' => 'Card',
                    'menu_name' => '礼品卡管理',
                    'menu_list' => array(
                        '0' => array(
                            'menu_action' => 'AddCard',
                            'menu_name' => '增加礼品卡',
                        ),
                        '1' => array(
                            'menu_action' => 'ListCard',
                            'menu_name' => '礼品卡列表',
                        ),
                    ),
                ),
            )
        ),

    );


    /**
     * 根据用户权限数组，获取对应的权限
     * @param $menu_num_arr
     * $menu_num_arr = array(
     *  '0' => array('0' => array('0'=>1,'1'=>1),'1' =>  array('0'=>1,'1'=>1)),
     *  '1' => array('0' => array('0'=>1,'1'=>1),'1'  => array('0'=>1,'1'=>1),),
     *  '2' => array('0' => array('0'=>1,'1'=>1)),
     * );
     * @return array|bool
     */

    public static function getMenuListByMenuNumStr($menu_num_arr)
    {
        if (!empty($menu_num_arr)) {
            $menus = self::$menus;
            foreach ($menus as $key => $val) {
                if (!key_exists($key, $menu_num_arr)) {
                    unset($menus[$key]);
                    continue;
                } else {
                    foreach ($val['menu_list'] as $k => $v) {
                        if (!key_exists($k, $menu_num_arr[$key])) {
                            unset($menus[$key]['menu_list'][$k]);
                            continue;
                        } else {
                            foreach ($v['menu_list'] as $j => $i) {
                                if (!key_exists($j, $menu_num_arr[$key][$k])) {
                                    unset($menus[$key]['menu_list'][$k]['menu_list'][$j]);
                                    continue;
                                }
                            }
                        }
                    }
                }
            }
            return $menus;
        } else {
            return false;
        }
    }
}

?>