<?php

/**
 * 礼品卡
 */
class CardDao extends BaseServer
{

    /**
     * 根据礼品卡ID获取礼品卡详细信息
     * @param $card_id 礼品卡id
     * @return null|对应的数据
     */
    public static function DB_GetCardInfoById($card_id)
    {
        $card_id = intval(trim($card_id));
        if ((!empty($card_id)) && (is_int($card_id))) {
            $db_obj = DB_MySQLi::getInstance();
            $card_sql = "select `ID`, `CardSign`, `CardCipher`, `Cost`, `Valid`, `State`, `Special`, `MemberID`, `Remark`, `StartTime`, `EndTime`, `CreateTime` FROM `card_account` where ID=" . $card_id;
            $db_obj->query($card_sql);
            $card_information = $db_obj->fetchRow_ASSOCS();
            return $card_information;
        } else {
            return null;
        }
    }

    /**
     * 据礼品卡唯一标识、密码，获取礼品卡详细信息
     * @param $card_sign 礼品卡唯一标识
     * @param string $car_cipher 礼品卡密码
     * @param bool $cipher_sign 是否校验密码
     * @param bool $special 是否是特殊卡
     * @return null|对应的数据
     */
    public static function DB_GetCardInfoByCardSignCipher($card_sign, $car_cipher = "", $cipher_sign = false, $special = false)
    {
        if (!empty($card_sign)) {
            if ($cipher_sign && (!empty($car_cipher))) {
                $sql_str = "where CardSign='" . $card_sign . "' and CardCipher='" . $car_cipher . "'";
            } else {
                $sql_str = "where CardSign='" . $card_sign . "'";
            }
            if ($special) {
                $sql_str .= " and Special=1";
            }
            $db_obj = DB_MySQLi::getInstance();
            $card_sql = "select `ID`, `CardSign`, `CardCipher`, `Cost`, `Valid`, `State`, `Special`, `MemberID`, `Remark`, `StartTime`, `EndTime`, `CreateTime` FROM `card_account` " . $sql_str;
            $db_obj->query($card_sql);
            $card_information = $db_obj->fetchRow_ASSOCS();
            return $card_information;
        } else {
            return null;
        }
    }

    /**
     * 更新礼品卡信息
     * @param $card_sign 礼品卡唯一标识
     * @param $card 礼品卡信息
     * @return null
     */
    public static function DB_UpdateCardBySign($card_sign, $card)
    {
        if ((!empty($card_sign)) && (!empty($card))) {
            $db_obj = DB_MySQLi::getInstance();
            $card_val_str = "";
            foreach ($card as $key => $val) {
                $card_val_str .= "`" . $key . "`=" . "'" . $val . "',";
            }
            $card_val_str = rtrim($card_val_str, ",");
            $account_sql = "update `card_account` set $card_val_str where CardSign=" . $card_sign;
            return $db_obj->query($account_sql);
        }else{
            return false;
        }
    }

}