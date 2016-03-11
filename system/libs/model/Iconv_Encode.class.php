<?php

/**
 * 编码格式转换类
 */

class Iconv_Encode
{

    /**
     * utf8转gbk
     * @param $utfstr
     * @return string
     */
    public static function utf82Gbk($utfstr)
    {
        global $UC2GBTABLE;
        $okstr = '';
        if (empty($UC2GBTABLE)) {
            $filename = ENCODE_PATH . 'gb-unicode.table';
            $fp = fopen($filename, 'rb');
            while ($l = fgets($fp, 15)) {
                $UC2GBTABLE[hexdec(substr($l, 7, 6))] = hexdec(substr($l, 0, 6));
            }
            fclose($fp);
        }
        $okstr = '';
        $ulen = strlen($utfstr);
        for ($i = 0; $i < $ulen; $i++) {
            $c = $utfstr[$i];
            $cb = decbin(ord($utfstr[$i]));
            if (strlen($cb) == 8) {
                $csize = strpos(decbin(ord($cb)), '0');
                for ($j = 0; $j < $csize; $j++) {
                    $i++;
                    $c .= $utfstr[$i];
                }
                $c = self::utf82Unicode($c);
                if (isset($UC2GBTABLE[$c])) {
                    $c = dechex($UC2GBTABLE[$c] + 0x8080);
                    $okstr .= chr(hexdec($c[0] . $c[1])) . chr(hexdec($c[2] . $c[3]));
                } else {
                    $okstr .= '&#' . $c . ';';
                }
            } else {
                $okstr .= $c;
            }
        }
        $okstr = trim($okstr);
        return $okstr;
    }

    /**
     * gbk转utf8
     * @param $gbstr
     * @return string
     */
    public static function gbk2Utf8($gbstr)
    {
        global $CODETABLE;
        if (empty($CODETABLE)) {
            $filename = ENCODE_PATH . 'gb-unicode.table';
            $fp = fopen($filename, 'rb');
            while ($l = fgets($fp, 15)) {
                $CODETABLE[hexdec(substr($l, 0, 6))] = substr($l, 7, 6);
            }
            fclose($fp);
        }
        $ret = '';
        $utf8 = '';
        while ($gbstr) {
            if (ord(substr($gbstr, 0, 1)) > 0x80) {
                $thisW = substr($gbstr, 0, 2);
                $gbstr = substr($gbstr, 2, strlen($gbstr));
                $utf8 = '';
                @$utf8 = self::unicode2Utf8(hexdec($CODETABLE[hexdec(bin2hex($thisW)) - 0x8080]));
                if ($utf8 != '') {
                    for ($i = 0; $i < strlen($utf8); $i += 3) $ret .= chr(substr($utf8, $i, 3));
                }
            } else {
                $ret .= substr($gbstr, 0, 1);
                $gbstr = substr($gbstr, 1, strlen($gbstr));
            }
        }
        return $ret;
    }

    /**
     * 繁体转简体
     * @param $Text
     * @return mixed
     */
    public static function big52Gbk($Text)
    {
        global $BIG5_DATA;
        if (empty($BIG5_DATA)) {
            $filename = ENCODE_PATH . 'big5-gb.table';
            $fp = fopen($filename, 'rb');
            $BIG5_DATA = fread($fp, filesize($filename));
            fclose($fp);
        }
        $max = strlen($Text) - 1;
        for ($i = 0; $i < $max; $i++) {
            $h = ord($Text[$i]);
            if ($h >= 0x80) {
                $l = ord($Text[$i + 1]);
                if ($h == 161 && $l == 64) {
                    $gbstr = '　';
                } else {
                    $p = ($h - 160) * 510 + ($l - 1) * 2;
                    $gbstr = $BIG5_DATA[$p] . $BIG5_DATA[$p + 1];
                }
                $Text[$i] = $gbstr[0];
                $Text[$i + 1] = $gbstr[1];
                $i++;
            }
        }
        return $Text;
    }

    /**
     * 简体转繁体
     * @param $Text
     * @return mixed
     */
    public static function gbk2Big5($Text)
    {
        global $GB_DATA;
        if (empty($GB_DATA)) {
            $filename = ENCODE_PATH . 'gb-big5.table';
            $fp = fopen($filename, 'rb');
            $gb = fread($fp, filesize($filename));
            fclose($fp);
        }
        $max = strlen($Text) - 1;
        for ($i = 0; $i < $max; $i++) {
            $h = ord($Text[$i]);
            if ($h >= 0x80) {
                $l = ord($Text[$i + 1]);
                if ($h == 161 && $l == 64) {
                    $big = '　';
                } else {
                    $p = ($h - 160) * 510 + ($l - 1) * 2;
                    $big = $GB_DATA[$p] . $GB_DATA[$p + 1];
                }
                $Text[$i] = $big[0];
                $Text[$i + 1] = $big[1];
                $i++;
            }
        }
        return $Text;
    }

    /**
     * unicode转utf8
     * @param $c
     * @return string
     */
    public static function unicode2Utf8($c)
    {
        $str = '';
        if ($c < 0x80) {
            $str .= $c;
        } elseif ($c < 0x800) {
            $str .= (0xC0 | $c >> 6);
            $str .= (0x80 | $c & 0x3F);
        } elseif ($c < 0x10000) {
            $str .= (0xE0 | $c >> 12);
            $str .= (0x80 | $c >> 6 & 0x3F);
            $str .= (0x80 | $c & 0x3F);
        } elseif ($c < 0x200000) {
            $str .= (0xF0 | $c >> 18);
            $str .= (0x80 | $c >> 12 & 0x3F);
            $str .= (0x80 | $c >> 6 & 0x3F);
            $str .= (0x80 | $c & 0x3F);
        }
        return $str;
    }

    /**
     * utf8转unicode
     * @param $c
     * @return int
     */
    public static function utf82Unicode($c)
    {
        switch (strlen($c)) {
            case 1:
                return ord($c);
            case 2:
                $n = (ord($c[0]) & 0x3f) << 6;
                $n += ord($c[1]) & 0x3f;
                return $n;
            case 3:
                $n = (ord($c[0]) & 0x1f) << 12;
                $n += (ord($c[1]) & 0x3f) << 6;
                $n += ord($c[2]) & 0x3f;
                return $n;
            case 4:
                $n = (ord($c[0]) & 0x0f) << 18;
                $n += (ord($c[1]) & 0x3f) << 12;
                $n += (ord($c[2]) & 0x3f) << 6;
                $n += ord($c[3]) & 0x3f;
                return $n;
        }
    }

    /**
     * Ascii转拼音
     * @param $asc
     * @param $pyarr
     * @return string
     */
    public static function asc2Pinyin($asc, &$pyarr)
    {
        if ($asc < 128) return chr($asc);
        elseif (isset($pyarr[$asc])) return $pyarr[$asc]; else {
            foreach ($pyarr as $id => $p) {
                if ($id >= $asc) return $p;
            }
        }
    }

    /**
     * gbk转拼音
     * @param $txt
     * @return array
     */
    public static function gbk2Pinyin($txt)
    {
        if (CHARSET != 'gbk') {
            $txt = iconv(CHARSET, 'GBK', $txt);
        }
        $l = strlen($txt);
        $i = 0;
        $pyarr = array();
        $py = array();
        $filename = ENCODE_PATH . 'gb-pinyin.table';
        $fp = fopen($filename, 'r');
        while (!feof($fp)) {
            $p = explode("-", fgets($fp, 32));
            $pyarr[intval($p[1])] = trim($p[0]);
        }
        fclose($fp);
        ksort($pyarr);
        while ($i < $l) {
            $tmp = ord($txt[$i]);
            if ($tmp >= 128) {
                $asc = abs($tmp * 256 + ord($txt[$i + 1]) - 65536);
                $i = $i + 1;
            } else $asc = $tmp;
            $py[] = self::asc2Pinyin($asc, $pyarr);
            $i++;
        }
        return $py;
    }


} 