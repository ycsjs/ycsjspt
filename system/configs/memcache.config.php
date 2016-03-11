<?php
/**
 * Memcache缓存配置
 **/
class MemcacheConfig
{
    /*Memcache服务器配置，可添加多个服务器。
       数组中各元素的顺序为host, port, persistent, weight
     * 如果使用多台Memcahced服务器的话，需要在config/cache_config.php中做如下配置
     * <code>
     * // host, port, persistent, weight
     * $config['MemcacheServers'] = array(
     *                       array('192.168.1.31', '11211', true, 40),
     *                       array('192.168.1.23', '11211', true, 80)
     *                     );
     * </code>
     */
    public static $MemcacheServers = array(
        array('127.0.0.1', '11211', 40)
    );
}

?>