<?php
/**
 * 只适用于simpleXML
 */
class SimpleXML
{

    /**
     * 解析xml
     * @param string $xml
     * @return array|string
     */
    public static function xml2array($xml = '')
    {

        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $dom_root = $dom->documentElement;
        $arr = array();
        foreach ($dom_root->childNodes as $items) {
            if ($items->hasChildNodes()) {
                $array = array();
                foreach ($items->childNodes as $item) {
                    if ($item->tagName) {
                        $array[$item->tagName] = $item->nodeValue;
                    }
                }
                $arr[] = $array;
            }
        }

        if (!empty($arr)) {
            return $arr;
        } else {
            return '';
        }
    }


    /**
     * 解析xml,并以属性名，做为数据key
     * @param string $xml xml字符串  如：<PickUpLocationListRS>
     *                                         <LocationList>
     *                                              <Location id="3806">Manchester Airport</Location>
     *                                              <Location id="402593">Manchester - Cheadle Hulme</Location>
     *                                         </LocationList>
     *                                  </PickUpLocationListRS>
     * @param array $arrAtributeName  数据的键名key 如：id
     * @return array|@arr  返回的数组  如：Array ( [1124991] => 北京国际机场 [1142956] => 北京 - SOHO [1142926] => 北京 - 三元桥地铁站）
     */
    public static function xml2AttributeArray($xml = '',$arrAtributeName=array('id'))
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $dom_root = $dom->documentElement;
        $arr = array();
        foreach ($dom_root->childNodes as $items) {
            if ($items->hasChildNodes()) {
                $array = array();
                foreach ($items->childNodes as $key=>$item) {
                    if( $item->tagName){
                        foreach($arrAtributeName as $attributeName){
                            $array[$key][$attributeName]=$item->getAttribute($attributeName);

                        }
                        $array[$key]['value'] = $item->nodeValue;
                    }
                }
                $arr[] = $array;
            }
        }
        return $arr;
    }



    /**
     * 完整解析xml
     * @param type $xmlString
     * @return type
     */
    public static function xml2arrayFull($xmlString)
    {
        $targetArray = array();
        $xmlObject = simplexml_load_string($xmlString);
        $mixArray = (array)$xmlObject;
        foreach ($mixArray as $key => $value) {
            if (is_string($value)) {
                $targetArray[$key] = $value;
            }
            if (is_object($value)) {
                $targetArray[$key] = self::xml2arrayFull($value->asXML());
            }
            if (is_array($value)) {
                foreach ($value as $zkey => $zvalue) {
                    if (strpos($value[0], 'xml') !== FALSE || strpos($value[0], '<') !== FALSE || strpos($value[0], '&lt;') !== FALSE) {
                        $targetArray[] = $zvalue;
                    } else {
                        if(is_string($zvalue)){
                            if (is_numeric($zkey)) {
                                $targetArray[$key][] =$zvalue;
                            }
                            if (is_string($zkey)) {
                                $targetArray[$key][$zkey] =$zvalue;
                            }
                        }else{
                            if (is_numeric($zkey)) {
                                $targetArray[$key][] = self::xml2arrayFull($zvalue->asXML());
                            }
                            if (is_string($zkey)) {
                                $targetArray[$key][$zkey] = self::xml2arrayFull($zvalue->asXML());
                            }
                        }
                    }
                }
            }
        }
        return $targetArray;
    }

    /**
     * @param $data
     * @param string $tag
     * @return string
     */
    public static function array2xml($data, $tag = '')
    {
        $xml = '';
        foreach ($data as $key => $value) {
            if (is_numeric($key)) {
                if (is_array($value)) {
                    $xml .= '<' . $tag . '>';
                    $xml .= self::array2xml($value);
                    $xml .= '</' . $tag . '>';
                } else {
                    $xml .= '<' . $tag . '>' . $value . '</' . $tag . '>';
                }
            } else {
                if (is_array($value)) {
                    $keys = array_keys($value);
                    if (is_numeric($keys[0])) {
                        $xml .= self::array2xml($value, $key);
                    } else {
                        $xml .= '<' . $key . '>';
                        $xml .= self::array2xml($value);
                        $xml .= '</' . $key . '>';
                    }
                } else {
                    $xml .= '<' . $key . '>' . $value . '</' . $key . '>';
                }
            }
        }
        return $xml;
    }

}

?>
