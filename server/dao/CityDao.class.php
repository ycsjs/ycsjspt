<?php

/**
 * 大洲、国家、城市类
 */
class CityDao extends BaseServer {

    /**
     * 根据大洲获取国家列表
     * @param $continent_id
     * @return array|null
     */
    public static function DB_GetCountryByContinentId($continent_id){
        $db_obj = DB_MySQLi::getInstance();
        $country_sql = "select `ID`, `ContinentID`, `NameCn`, `NameEn`, `PinYin`, `FirstLetter`, `Flag`, `Status`, `IsHot`, `GuoQi` from `cms_country` where `ContinentID`=".$continent_id." order by ID desc";
        return $db_obj->getData_ASSOCS($country_sql);
    }


    /**
     * 根据国家Id获取城市列表
     * @param $country_id
     * @return array|null
     */
    public static function DB_GetCityByCountryId($country_id){
        $db_obj = DB_MySQLi::getInstance();
        $city_sql = "select `ID`, `CountryID`, `NameCn`, `NameEn`, `PinYin`, `FirstLetter`, `ForShort`, `Status`, `Lat`, `Lng` FROM `cms_city_world` where `CountryID`=".$country_id." order by ID desc";
        return $db_obj->getData_ASSOCS($city_sql);
    }

    /**
     * 根据城市id获取城市信息
     * @param $city_id
     * @return array|null
     */
    public static function DB_GetCityInfoByCityId($city_id){
        $db_obj = DB_MySQLi::getInstance();
        $city_sql = "select `ID`, `CountryID`, `NameCn`, `NameEn`, `PinYin`, `FirstLetter`, `ForShort`, `Status`, `Lat`, `Lng` FROM `cms_city_world` where `ID`=".$city_id;
        $db_obj->query($city_sql);
        return $db_obj->fetchRow_ASSOCS();
    }
}