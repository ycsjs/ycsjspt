<?php
/**
 * Http相关处理类
 */
class Http_Handle
{

    /**
     * 获取cookie值
     * @param $key
     * @return bool|string
     */
    public static function getCookie($key)
    {
        if (empty($key)) {
            return $_COOKIE;
        } else {
            return isset($_COOKIE[$key]) ? trim($_COOKIE[$key]) : false;
        }
    }

    /**
     * 设置cookie
     * @param $name cookie名
     * @param $value cookie值
     * @param int $expire 过期时效，以秒为单位
     * @param string $path 路径，默认根目录
     * @param string $domain 域名，默认根域名
     * @param bool $secure 是否只在https协议下有效
     * @param bool $httponly 是否只在http协议下有效，js将无法访问
     * @return bool 设置成功返回true，否则返回false
     */
    public static function setCookie($name, $value, $expire = 0, $path = '/', $domain = '', $secure = false, $httponly = false)
    {
        if (empty($name)) {
            return false;
        }
        $path = empty($path) ? '/' : $path;
        $domain = empty($domain) ? COOKIE_DOMAIN : $domain;
        return setcookie($name, $value, (int)$expire, $path, $domain, $secure, $httponly);
    }

    /**
     * 设置只有php可以读取的cookie
     * @param $name cookie名
     * @param $value cookie值
     * @param int $expire 过期时效，以秒为单位
     * @return bool 设置成功返回true，否则返回false
     */
    public static function setPhpCookie($name, $value, $expire = 0)
    {
        return self::setCookie($name, $value, $expire, '/', '', FALSE, TRUE);
    }

    /**
     * 删除cookie
     * @param $name 要删除的cookie的名字
     * @return bool
     */
    public static function delCookie($name)
    {
        return self::setCookie($name, "", time() - 3600);
    }

    /**
     * 获取session值
     * @param $key
     * @return bool|string
     */
    public static function getSession($key)
    {
        if (empty($key)) {
            return false;
        } else {
            return isset($_SESSION[$key]) ? $_SESSION[$key] : false;
        }
    }

    /**
     * 设置session值
     * @param $key session键
     * @param $value session值
     * @return bool 设置成功true 否则false
     */
    public static function setSession($key, $value)
    {
        if (empty($key)) {
            return false;
        } else {
            $_SESSION[$key] = $value;
        }
        return true;
    }

    /**
     * 删除session
     * @param $key 要删除的session的key
     * @return bool 删除成功返回true，否则返回false
     */
    public static function delSession($key)
    {
        return self::setSession($key, null);
    }

    /**
     * 获取当前请求的method，如POST，GET
     * @return string 所有值均大写，有GET, HEAD, POST, PUT
     */
    public static function getMethod()
    {
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }

    /**
     * 设置页面无缓存
     */
    public static function setNoCache()
    {
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        header("Pragma: no-cache");
        header("Referer: http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    }

    /**
     * 获取客户端IP地址
     * 在CDN下，$_SERVER ["REMOTE_ADDR"]所取的数据会有误
     * @return string 客户端的IP地址
     */
    public static function getIP()
    {
        if( isset($_SERVER["HTTP_CDN_SRC_IP"]) ) {
            return $_SERVER["HTTP_CDN_SRC_IP"];
        }
        if ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) && preg_match( '/^[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}$/', $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {           return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $_SERVER["REMOTE_ADDR"];
    }

    /**
     * 获取客户端浏览器信息，含浏览器名称和版本
     * @param bool $return_as_str 返回值是否采用字符串形式，默认返回数组类型，下标分别为agent和version
     * @return array|null|string 客户端浏览器信息,如果未找到对应值，则返回null
     */
    public static function getBrowserInfo($return_as_str = false)
    {
        //浏览器信息定义
        $browser_info = null;
        //定义浏览器
        $browsers = array("firefox", "msie", "chrome", "safari", "opera", "mozilla", "seamonkey", "konqueror", "netscape",
            "gecko", "navigator", "mosaic", "lynx", "amaya", "omniweb", "avant", "camino", "flock");
        //从$_SERVER中取UserAgent信息
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        $match = null;
        //从useragent中查找相应的浏览器信息
        foreach ($browsers as $browser) {
            if (preg_match("#($browser)[/ ]?([0-9.]*)#", $agent, $match)) {
                $browser_info = array();
                $browser_info["agent"] = $match[1];
                $browser_info["version"] = $match[2];
                break;
            }
        }
        //根据参数返回不同类型的值
        return is_null($browser_info) ? null : ($return_as_str ? implode(' ', $browser_info) : $browser_info);
    }


    /**
     * 页面301跳转
     * @param $url 跳转的url路径
     * @return bool
     */
    public static function url301Redirect($url) {
        if (empty($url)) {
            return false;
        } else {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: $url");
            exit();
        }
    }


}