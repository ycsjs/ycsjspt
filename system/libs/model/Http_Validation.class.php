<?php

/**
 *Http参数处理类
 */

/**
 * 整理节点
 * @param $node
 * @param $s
 */

function dumpNode($node, &$s)
{
    //查看节点名，如果是<script> 和<style>就直接清除
    switch ($node->name) {
        case 'script':
        case 'style':
        case 'textarea':
        case 'input':
        case 'iframe':
        case 'form':
            return;
            break;
        default:
    }
    if ($node->type == TIDY_NODETYPE_TEXT) {
        $s .= $node->value;
        return;
    }
    //不是文字节点，那么处理标签和它的属性
    $s .= '<' . $node->name;
    //检查每个属性
    if ($node->attribute) {
        foreach ($node->attribute as $name => $value) {
            /*
            清理一些DOM事件，通常是on开头的，
            比如onclick onmouseover等....
            或者属性值有javascript:字样的，
            比如href="javascript:"的也被清除.
            */
            if (strpos($name, 'on') === 0 || stripos(trim($value), 'javascript:') === 0) {
                continue;
            }
            //保留安全的属性
            $s .= ' ' . $name . '="' . $value . '"';
        }
    }

    //递归检查该节点下的子节点
    if ($node->child) {
        $s .= '>';
        foreach ($node->child as $child) {
            dumpNode($child, $s);
        }
        //子节点处理完毕，闭合标签
        $s .= '</' . $node->name . '>';
    } else {
        /*
        已经没有子节点了，将标签闭合
        (事实上也可以考虑直接删除掉空的节点)
        */
        if ($node->type == TIDY_NODETYPE_START) $s .= '></' . $node->name . '>';
        /*
        对非配对标签，比如<hr/> <br/> <img/>等
        直接以 />闭合之
        */
        else $s .= '/>';

    }
}

class Http_Validation
{

    /**
     * 获取原始参数
     * @param $param 参数名称
     * @return string 参数的值
     */
    public static function get($param)
    {
        global $_POST;
        global $_GET;
        if (array_key_exists($param, $_POST)) return iyouwu_replace($_POST[$param]);
        if (array_key_exists($param, $_GET)) return iyouwu_replace($_GET[$param]);
        return "";
    }

    /**
     * 以int类型的方式获取HTTP参数
     * @param $param 参数名称
     * @return int 整数，如果为空则返回0
     */
    public static function getInt($param)
    {
        global $_POST;
        global $_GET;
        if (array_key_exists($param, $_POST)) return intval($_POST[$param]);
        if (array_key_exists($param, $_GET)) return intval($_GET[$param]);
        return 0;
    }

    /**
     * 获取enum类型(<select>，<input type='radio'>)的HTML参数
     * @param $param 参数名称
     * @param $enum 可选值的数组，长度至少为1
     * @param $default  缺省的参数的值（如果传入的参数不在$enum中，则缺省值为$default）
     * @return mixed 参数的值
     */
    public static function getEnum($param, $enum, $default)
    {
        global $_POST;
        global $_GET;
        if (array_key_exists($param, $_POST)) {
            if (in_array($_POST[$param], $enum))
                return $_POST[$param];
        }
        if (array_key_exists($param, $_GET)) {
            if (in_array($_GET[$param], $enum))
                return $_GET[$param];
        }
        return $default;
    }

    /**
     * 取出数组类型的参数，(<input type='checkbox'>)
     * @param $param 参数名称
     * @param $enum 范围数组
     * @return array 参数值
     */
    public static function getArray($param, $enum)
    {
        global $_POST;
        global $_GET;
        if (array_key_exists($param, $_POST)) {
            if (is_array($_POST[$param])) {
                return array_intersect($enum, $_POST[$param]);
            } else if (in_array($_POST[$param], $enum)) {
                return array($_POST[$param]);
            } else return array();
        } else if (array_key_exists($param, $_GET)) {
            if (is_array($_GET[$param])) {
                return array_intersect($enum, $_GET[$param]);
            } else if (in_array($_GET[$param], $enum)) {
                return array($_GET[$param]);
            } else return array();
        }
        return array();
    }

    /**
     * 获取<input type="text">传入的值
     * @param $param 参数的名称
     * @param $length 最大长度（汉字）
     * @return string 参数的值
     */
    public static function getInput($param, $length)
    {
        global $_POST;
        global $_GET;
        if (array_key_exists($param, $_POST)) return Http_Validation::zhcut(Http_Validation::trim(iyouwu_replace($_POST[$param])), $length);
        if (array_key_exists($param, $_GET)) return Http_Validation::zhcut(Http_Validation::trim(iyouwu_replace($_GET[$param])), $length);
        return "";
    }

    /**
     * 在<input type=text>中显示value的值
     * @param $field 要在input type=text中设置的value
     * @return string 可显示的值
     */
    public static function editInput($field)
    {
        return htmlspecialchars($field);
    }

    /**
     * 在HTML中显示input值
     * @param $field  原来的内容
     * @param int $length 参数长度
     * @return string 显示的内容
     */
    public static function showInput($field, $length = 0)
    {
        $field = Http_Validation::zhcut($field, $length);
        return htmlspecialchars($field);
    }

    /**
     * 取得输入textarea的内容
     * @param $param 参数的名称
     * @param $length 参数长度
     * @return string 参数值
     */
    public static function getTextArea($param, $length)
    {
        global $_POST;
        global $_GET;
        $ori = "";
        if (array_key_exists($param, $_POST)) {
            $ori = iyouwu_replace($_POST[$param]);
        } elseif (array_key_exists($param, $_GET)) {
            $ori = iyouwu_replace($_GET[$param]);

        } else {
            return "";
        }
        $ori = preg_replace('/\r\n/', "\r", $ori);
        $ori = preg_replace('/\n/', "\r", $ori);
        return Http_Validation::zhcut($ori, $length);
    }

    /**
     * 编辑显示textarea的内容
     * @param $field 原来的内容
     * @return string 返回内容
     */
    public static function editTextArea($field)
    {
        return htmlspecialchars(preg_replace('/\r/', "\r\n", $field));
    }

    /**
     * 在HTML页面显示textarea的内容
     * @param $field 原来的内容
     * @param int $length 要截取的长度（汉字长度，0为全部显示）
     * @return string 要显示的HTML内容
     */
    public static function showTextArea($field, $length = 0)
    {
        $field = Http_Validation::zhcut($field, $length);
        $field = htmlspecialchars($field);
        $field = preg_replace('/\r/', '</p><p>', $field);
        $field = preg_replace('/<p><\/p>/', '<p>&nbsp;</p>', $field);
        $field = preg_replace('/\s/', '&nbsp;', $field);
        return "<p>" . $field . "</p>";
    }

    /**
     * 获取HTML编辑器的内容
     * @param $param 参数的名称
     * @return string 参数值
     */
    public static function getHtml($param)
    {
        global $_POST;
        global $_GET;
        $ori = "";
        if (array_key_exists($param, $_POST)) {
            $ori = $_POST[$param];
        } elseif (array_key_exists($param, $_GET)) {
            $ori = $_POST[$param];
        } else {
            return "";
        }

        return Http_Validation::tidyHtml($ori);
    }

    /**
     * 整理html内容
     * @param $html
     * @return string
     */
    public static function tidyHtml($html)
    {

        $conf = array(
            'output-xhtml' => true,
            'drop-empty-paras' => FALSE,
            'join-classes' => TRUE,
            'show-body-only' => TRUE
        );

        //repair
        $str = tidy_repair_string($html, $conf, 'utf8');
        //生成解析树
        $str = tidy_parse_string($str, $conf, 'utf8');
        $s = '';
        //得到body节点
        $body = @tidy_get_body($str);
        //函数 dumpNode，检查每个节点，过滤后输出


        //函数定义end
        //通过上面的函数 对 body节点开始过滤。
        if ($body->child) {
            foreach ($body->child as $child) dumpNode($child, $s);
        } else return '';
        return $s;
    }

    /**
     * 取出HTML字符文件并显示
     * @param $string html内容
     * @param int $length 要截取的长度，缺省为不截取
     * @return string 返回html内容
     */
    public static function showHtml($string, $length = 0)
    {
        if ($length == 0) return $string;
        $cut = Http_Validation::zhcut($string, $length);

        $cuts = explode("<", $cut);
        $knum = count($cuts);
        if ($knum > 1) {
            if (!strpos($cuts[$knum - 1], ">")) {
                unset($cuts[$knum - 1]);
                $cut = implode("<", $cuts);
            }
        }

        $cuts = explode("&", $cut);
        $knum = count($cuts);
        if ($knum > 1) {
            if (strlen($cuts[$knum - 1]) < 8) {
                unset($cuts[$knum - 1]);
                $cut = implode("&", $cuts);
            }
        }
        return $cut;
    }

    /**
     * 去掉所有空白字符（去掉前后的空白，去掉回车制表符，去掉全角空白）
     * @param $string 要去掉空白的字符
     * @return mixed 去掉空白后的字符
     */
    public static function trim($string)
    {
        $string = preg_replace('/\s(?=\s)/', '', trim($string));
        $string = preg_replace('/[\n\r\t]/', '', $string);
        $string = preg_replace('/\xe3\x80\x80/', '', $string);
        return $string;
    }

    /**
     * 截取前$length个中文字符（2*$length个英文字母）
     * @param $str 原有字符串
     * @param $len 长度
     * @param string $dot
     * @return string 截取后字符串
     */
    public static function zhcut($str, $len, $dot = "")
    {
        if ($len == 0) return $str . $dot;
        $count = 0;
        $olen = strlen($str);
        $len *= 2;
        for ($i = 0; $i < $olen; $i++) {
            $value = ord($str[$i]);
            if ($value > 127) {
                if ($value >= 192 && $value <= 223) $i++;
                if ($value >= 224 && $value <= 239) $i += 2;
                $count++;
            }
            $count++;
            if ($count >= $len) break;
        }
        $bk = substr($str, 0, $i + 1);
        return $bk == $str ? $bk : $bk . $dot;
    }

    /**
     * 获取文件大小
     * @param $size 以byte为单位的大小
     * @return string 大小描述字符串
     */
    public static function getFileSize($size)
    {
        if ($size <= 1024) {
            return "1K";
        }

        if ($size < 1024 * 1024) {
            return number_format($size / 1024, 1) . "K";
        }

        return number_format($size / (1024 * 1024), 1) . "M";
    }
}

?>