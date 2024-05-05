<?php
class mysqldb{

    private $connection;
    public function __construct()
    {
        global $config;
        $this->connection = mysqli_connect($config['server'],$config['user'],$config['password'],$config['database']);
    }
    public function insert($tablename,$data)
    {
        $keys = array_keys($data);
        $columns =  implode(",",$keys);
        $row = "";
        foreach ($data as $value){
            $row .= "'$value',";
        }
        $row = rtrim($row,",");
        mysqli_query($this->connection,"INSERT INTO `$tablename` ($columns) VALUES ($row)");
        return mysqli_affected_rows($this->connection);
    }

     public function update($tablename,$data,$condition)
    {
        $sql = "UPDATE `$tablename` SET ";
        foreach ($data as $key => $value){
            $sql.=  " `$key` = '$value',";
        }
        $sql = rtrim($sql,",");
         $sql .= " WHERE ".$condition;
         mysqli_query($this->connection,$sql);
        return mysqli_affected_rows($this->connection);

    }

   public function delete($tablename,$condtion)
    {
        $sql = "DELETE FROM `$tablename` WHERE $condtion";
         mysqli_query($this->connection,$sql);
        return mysqli_affected_rows($this->connection);

    }

     public function select($tablename,$columns="*",$condition = "")
    {
        $sql = "SELECT $columns FROM $tablename ";
        if(strlen($condition) > 0){
            $sql .= "WHERE $condition";
        }
        $query =  mysqli_query($this->connection,$sql);
       return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }

    public function __destruct()
    {
        mysqli_close($this->connection);
    }
}