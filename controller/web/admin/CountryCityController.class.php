<?php

class CountryCityController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

//    public function country()
//    {
//        $xml = file_get_contents("E:/wamp/www/iyouwu/branches/data/country_city.xml");
//        $arr = SimpleXML::xml2arrayFull($xml);
//        $country_arr = array();
//        foreach ($arr['CountryRegion'] as $key => $val) {
//            if ((isset($val['@attributes'])) && (isset($val['@attributes']['Name'])) && (!empty($val['@attributes']['Name']))) {
//                $country_arr[] = "('" . $val['@attributes']['Name'] . "')";
//            }
//        }
//
//        $country_str = implode(",", $country_arr);
//        $db_obj = DB_MySQLi::getInstance();
//        $sql = "INSERT INTO `iyouwu`.`country` (`CountryCnName`) VALUES " . $country_str;
//        $db_obj->query($sql);
//    }



    public function city()
    {
        $xml = file_get_contents("E:/wamp/www/iyouwu/branches/data/country_city.xml");
        $arr = SimpleXML::xml2arrayFull($xml);

        $city_arr=array();

        foreach ($arr['CountryRegion'] as $key => $val) {
            if ((isset($val['@attributes'])) && (isset($val['@attributes']['Name'])) && (!empty($val['@attributes']['Name']))) {
                $country =$val['@attributes']['Name'];
            }

            if(isset($val['State']['city'])){
                foreach($val['State']['city'] as $j=>$i){
                    if(!empty($v['@attributes']['Name'])){
                        $city_arr[]="('".$country."','" . $v['@attributes']['Name'] . "')";
                    }

                }
            }else{
                foreach($val['State'] as $k=>$v){
                    if(!empty($v['@attributes']['Name'])){
                        $city_arr[]="('".$country."','" . $v['@attributes']['Name'] . "')";
                    }

                }
            }
        }

        $city_str = implode(",", $city_arr);
        $db_obj = DB_MySQLi::getInstance();
        $sql = "INSERT INTO `iyouwu`.`city` (`CityCnName`, `CountryCnName`) VALUES " . $city_str;
        $db_obj->query($sql);
    }
} 