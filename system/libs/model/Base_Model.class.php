<?php

/**
 * 系统组件
 */
class Base_Model
{

    protected $_msg;

    /**
     * 设置信息
     * @param type $msg
     */
    public function _set_msg($msg)
    {
        $this->_msg = $msg;
    }

    /**
     * 获取信息
     * @return type
     */
    public function _get_msg()
    {
        return $this->_msg;
    }

}

?>