<?php

/**
 * 礼品卡校验
 */
class CheckCardController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 礼品卡首页
     */
    public function AjaxCheckValid()
    {
        $data = array();
        $card_sign = Http_Validation::getInput('card_sign', 25);
        $card_information = CardDao::DB_GetCardInfoByCardSignCipher($card_sign);
        if (!empty($card_information)) {
            if ($card_information['Valid'] == 0) {
                $data['state'] = false;
                $data['msg'] = "礼品卡是失效的卡。";
            } elseif ($card_information['State'] == 1) {
                $data['state'] = false;
                $data['msg'] = "礼品卡曾被激活过。";
            } elseif (strtotime("now") < $card_information['StartTime']) {
                $data['state'] = false;
                $data['msg'] = "礼品卡不在有效期范围。";
            } elseif (strtotime("now") > $card_information['EndTime']) {
                $data['state'] = false;
                $data['msg'] = "礼品卡超出有效期范围。";
            } else {
                $card['State'] = 1;
                $set_sign = CardDao::DB_UpdateCardBySign($card_sign, $card);
                if ($set_sign) {
                    $data['state'] = true;
                    $data['msg'] = "礼品卡激活成功";
                    Http_Handle::setSession('card_information', $card_information);
                } else {
                    $data['state'] = false;
                    $data['msg'] = "礼品卡激活失败。";
                }
            }
        } else {
            $data['state'] = false;
            $data['msg'] = "礼品卡账户信息有误，请重新确认。";
        }
        echo json_encode($data);
    }


    /**
     * 礼品卡首页
     */
    public function AjaxBindCard()
    {
        $ppt_cid = Http_Handle::getCookie('_jm_ppt_id');
        $opts = array(
            'http' => array(
                'method' => "GET",
                'header' => "Accept-language: en\r\n" .
                    "Cookie: _jm_ppt_id=$ppt_cid\r\n"
            )
        );
        $context = stream_context_create($opts);
        $check_url = "http://passport.jm.lan/api/islogin.json";
        $check_msg = file_get_contents($check_url, false, $context);
        $check_msg = json_decode($check_msg, true);
        $card['MemberID'] = $check_msg['result']['uid'];

        $card_information = Http_Handle::getSession('card_information');
        $card_sign = $card_information['CardSign'];
        if (!empty($card_sign)) {
            echo json_encode(CardDao::DB_UpdateCardBySign($card_sign, $card));
        }

    }

}

?>