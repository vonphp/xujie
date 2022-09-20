<?php
class OPDBS{
    protected $conn = false;  
    protected $sql;           

    /**
     * construct : be responsible for connect mysql
     */
    public function __construct(){
        $host = '127.0.0.1';
        $user = 'root';
        $password =  '123123';
        $dbname = 'shops';
        $port =  '3306';

        $this->conn = mysqli_connect("$host:$port",$user,$password,$dbname) or die('mysql handle err');
    }


    /**
     * query sql
     * @access public
     * @param $sql string sql str
     * @return $result
     */
    public function query($sql){
        $this->sql = $sql;
        return mysqli_query($this->conn, $this->sql);
    }
    /**
     * 获取所有的记录
     * @access public
     * @param $sql 执行的sql语句
     * @return $list 有所有记录组成的二维数组
     */
    public function getAll($sql){
        $result = $this->query($sql);
        $list = array();
        while ($row = mysqli_fetch_assoc($result)){
            $list[] = $row;
        }
        return $list;
    }

    public function getOne($sql){
        $result = $this->query($sql);
        if (!$result) {
            return false;
        }
        $list = array();
        while ($row = mysqli_fetch_assoc($result)){
            $list[] = $row;
        }
        return $list[0] ?? [];
    }

    public function close() {
        $this->conn->close();
    }
}