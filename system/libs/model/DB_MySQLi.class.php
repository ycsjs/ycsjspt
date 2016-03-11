<?php

/**
 * MySQLi数据访问类
 */

require_iyouwu(CONFIGS_PATH . 'mysql.config.php');

class DB_MySQLi
{

    /**
     * 静态变量，指向唯一的数据库实例
     * @var null
     */
    private static $instance = null;

    /**
     * 当前数据库连接
     * @var null
     */
    private $connection = null;

    /**
     * 内部结果集 外部不允许直接进行操作
     * @var null
     */
    protected $res = null;

    /**
     * 记录对象最后一次执行的sql语句
     * @var null
     */
    protected $sql = null;


    /**
     * 构造函数
     */
    private function __construct()
    {
        //判断mysqli扩展是否已加载
        if (!extension_loaded('mysqli')) {
            throw new DB_Exception('mysqli is not supported!');
        }

        $this->initDB();
    }


    /**
     * 静态方法，返回数据库类 初始化设定是否抛出异常
     * @return DB_MySQLi|null
     */
    public static function getInstance()
    {
        if (self :: $instance == null) {
            self :: $instance = new DB_MySQLi();
        }
        return self :: $instance;
    }

    /**
     * 创建数据库连接
     * @param $config 数据库配置，数组类型
     * @return mysqli 数据库连接对象
     * @throws DB_Exception
     */
    private function initConn($config)
    {
        if (!empty($config)) {
            $con = new mysqli($config['host'], $config['username'], $config['password'], $config['dbname']); //如果连接失败，抛出异常
            if (mysqli_connect_error()) {
                throw new DB_Exception('Connect Error (' . mysqli_connect_errno() . ') : ' . mysqli_connect_error());
            }
            return $con;
        }
        throw new DB_Exception('Connect to DB with empty config.');
    }


    /**
     * 初始化数据库
     */
    private function initDB()
    {
        $this->connection = $this->initConn(MysqlConfig::$mysql_info);
        $this->connection->set_charset('utf8');
    }

    /**
     * 查询
     * @param $query SQL语句
     * @return null 失败时返回FALSE。成功时 SELECT, SHOW, DESCRIBE 和 EXPLAIN 语句将会返回一个对象，其他语句返回TRUE。
     * @throws DB_Exception
     */
    public function query($query)
    {
        if (empty($query) || trim($query) == '') {
            return null;
        }
        $query = $this->sql = trim($query);
        //执行SQL并返回MySQLi_Result对象
        $this->res = $this->connection->query($query);
        //如果执行报错抛出异常
        if ($this->res === false) {
            $msg = $this->getErrorInfo();
            throw new DB_Exception($msg);
        }
        return $this->res;
    }

    /**
     * 获取记录集的行数
     * @param $query语句
     * @return 记录集的行数
     */
    public function getRowCount($query = '')
    {
        if (!empty($query)) {
            $this->query($query);
        }
        return empty ($this->res) ? null : $this->res->num_rows;
    }

    /**
     * 根据查询语句获取所有数据，以数组的形式返回，如果无数据或者出错返回NULL。
     * @param $query 语句
     * @param int $resultType 数组的类型， 可选的值有: MYSQLI_ASSOC, MYSQLI_NUM, or MYSQLI_BOTH.
     * @return array|null 对应的数据
     */
    public function getData($query, $resultType = MYSQLI_ASSOC)
    {
        $data = null;
        $result = $this->query($query);

        if (!empty($result)) {
            $data = array();
            while ($row = $result->fetch_array($resultType)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    /**
     * 根据查询语句获取所有数据，以数组的形式返回，数组中每行数据的下标为字段名，如果无数据或者出错返回NULL。
     * @param $query 语句
     * @return array|null
     */
    public function getData_ASSOCS($query)
    {
        return $this->getData($query, MYSQLI_ASSOC);
    }

    /**
     * 根据查询语句获取所有数据，以数组的形式返回，数组中每行数据的下标为数字，如果无数据或者出错返回NULL。
     * @param $query 语句
     * @return array|null
     */
    public function getData_NUM($query)
    {
        return $this->getData($query, MYSQLI_NUM);
    }

    /**
     * 根据查询语句获取所有数据，以数组的形式返回，数组中每行数据的下标为字段名或者数字，如果无数据或者出错返回NULL。
     * @param $query 语句
     * @return array|null
     */
    public function getData_BOTH($query)
    {
        return $this->getData($query, MYSQLI_BOTH);
    }

    /**
     * 以数组的形式获取一行数据，数组的索引下标为字段名
     * @return 对应的数据
     */
    public function fetchRow_ASSOCS()
    {
        return empty ($this->res) ? null : $this->res->fetch_assoc();
    }


    /**
     * 以数组的形式获取一行数据，数组的索引下标为0开始的数字
     * @return 对应的数据
     */
    public function fetchRow_NUM()
    {
        return empty ($this->res) ? null : $this->res->fetch_row();
    }

    /**
     * 以数组的形式获取一行数据，数组的索引下标同时支持字段名和者数字
     * @return 对应的数据
     */
    public function fetchRow_BOTH()
    {
        return empty ($this->res) ? null : $this->res->fetch_array(MYSQLI_BOTH);
    }

    /**
     * 返回最后一次操作产生的自增ID
     * @return mixed
     */
    public function getlastInsertId()
    {
        return $this->connection->insert_id;
    }

    /**
     * 获取最近一次操作影响的行数
     * @return 受影响的行数
     */
    public function getEffectRows()
    {
        return $this->connection->affected_rows;
    }

    /**
     * 获取最近一次查询返回的结果集所包含的字段列数
     * @return  结果集包含的字段列数
     */
    public function getColumns()
    {
        return $this->connection->field_count;
    }

    /**
     * 获取最近一次SQL执行后的统计信息，支持Insert、Update、Alter、Load Data
     * 对Select无效，Select建议采用getEffectRows()
     * 示例: Records: 100 Duplicates: 0 Warnings: 0
     * @return 统计信息
     */
    public function getQueryInfo()
    {
        return $this->connection->info;
    }

    /**
     * 获取最近一次操作的系统错误信息
     * @return string 错误信息，已经错误发生时的数据
     */
    public function getErrorInfo()
    {
        //获取最近一次操作的SQLSTATE 错误信息，5位的错误信息代码，HY000代表与MySQL错误代码匹配的错误。
        $state = $this->connection->sqlstate;
        $state_code = ($state == '00000') ? 'no error' : $state;
        $error = 'error_code: ' . $this->connection->errno . '; msg: ' . $this->connection->error . '; mysql_state: ' . $state_code . '; sql = ' . $this->sql;
        return $error;
    }


    /**
     * 检测当前连接是否有效
     * @return boolean 有效返回True，否则返回False。
     */
    public function isConnected()
    {
        return ((bool)($this->connection instanceof mysqli));
    }

    /**
     * 关闭连接
     * @throws DB_Exception
     */
    public function closeConnection()
    {
        if ($this->isConnected()) {
            if (!$this->connection->close()) {
                throw new DB_Exception('Close connection error!');
            }
        }
        $this->connection = null;
    }

    /**
     * 释放内存中存储结果集的空间
     */
    public function freeResult()
    {
        //如果res不为空且类型是 mysqli_result 对象时才执行free函数
        if (!empty($this->res) && ($this->res instanceof mysqli_result)) {
            $this->res->free();
        }
    }


    /**
     *  开始事务，表必须是InnoDB类型
     */
    public function beginTransaction()
    {
        $this->connection->autocommit(false);
    }

    /**
     * 提交事务，表必须是InnoDB类型
     */
    public function commit()
    {
        $this->connection->commit();
        $this->connection->autocommit(true);
    }

    /**
     * 回滚事务
     */
    public function rollBack()
    {
        $this->connection->rollback();
        $this->connection->autocommit(true);
    }


    /**
     * 析构函数
     */
    public function __destruct()
    {
        //释放内存中的结果集
        $this->freeResult();
        //关闭连接
        $this->closeConnection();
        //释放内嵌对象
        unset($this->connection);
    }

}

?>