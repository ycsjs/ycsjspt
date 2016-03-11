<?php

/**
 * 礼品卡
 */
class ActivityController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 礼品卡激活
     */
    public function CardActivation()
    {
//        $temp=array(
//'016666',
//'018888',
//'026666',
//'028888',
//'036666',
//'038888',
//'056666',
//'058888',
//'066666',
//'068888',
//'076666',
//'078888',
//'086666',
//'088888',
//'096666',
//'098888',
//'666666',
//'668888',
//'686666',
//'688888',
//'866666',
//'868888',
//'886666',
//'888888',
//'686868',
//'688686',
//'866868',
//'868686',
//'666868',
//'668686',
//'886868',
//'888686',
//
//        );






        $card_arr=array();
        $one="0001";
        $one_mo=1;
        $two="1100";
        $two_mo=1;
        $three_mo=1;


        for($i=1;$i<=10000;$i++){
            $card_num="0001 8888";
            $four=rand(100000,999999);
            $sj_mo=substr($four,-1);
            $jy_two=substr($one_mo+$two_mo+$three_mo+$sj_mo+$one_mo+8,-1);
            $jy_one=substr($one_mo*$two_mo*$three_mo*$sj_mo+$two_mo+8,-1);

            $four_o=substr($four,0,2);
            $four_t=substr($four,2,4);
            $card_num=$card_num." ".$jy_one.$jy_two.$four_o." ".$four_t;

            $pos=strpos($card_num,"4");
            if($pos === false){
                $card_arr[] =$card_num;
            }

        }

//        foreach($temp as $key=> $val){
//            $card_num="0001 1888";
//            $four=$val;
//            $sj_mo=substr($four,-1);
//            $jy_two=substr($one_mo+$two_mo+$three_mo+$sj_mo+$one_mo+8,-1);
//            $jy_one=substr($one_mo*$two_mo*$three_mo*$sj_mo+$two_mo+8,-1);
//
//            $four_o=substr($four,0,2);
//            $four_t=substr($four,2,4);
//            $card_num=$card_num." ".$jy_one.$jy_two.$four_o." ".$four_t;
//
//            $pos=strpos($card_num,"4");
//            if($pos === false){
//                $card_arr[] =$card_num;
//            }
//
//        }


        $yes_card=array_unique($card_arr);

        foreach($yes_card as $key=>$val){
            echo $val;
            echo "</br>";
        }













//        $this->tpl->display("activity/activation.html");
    }

    /**
     * 登录、注册
     */
    public function PassPort()
    {
        $this->tpl->display("activity/passport.html");
    }

    /**
     * 绑定页面
     */
    public function CardBind()
    {
        $ppt_cid=Http_Handle::getCookie('_jm_ppt_id');
        $opts = array(
            'http'=>array(
                'method'=>"GET",
                'header'=>"Accept-language: en\r\n" .
                           "Cookie: _jm_ppt_id=$ppt_cid\r\n"
            )
        );
        $context = stream_context_create($opts);
        $check_url="http://passport.jm.lan/api/islogin.json";
        $check_msg = file_get_contents($check_url, false, $context);
        $check_msg=json_decode($check_msg,true);
        $uid=$check_msg['result']['uid'];
        if(!empty($uid)){
            $user_info_url="http://passport.jm.lan/api/info.json?uid=".$uid;
            $user_info = file_get_contents($user_info_url);
            $user_info=json_decode($user_info,true);
            $card_information=Http_Handle::getSession('card_information');
            $this->tpl->assign("card_information",$card_information);
            $this->tpl->assign("user_info",$user_info);
        }
        $this->tpl->display("activity/card_band.html");
    }
}

?>