<?php 



interface test{
    public function insert($tablename, $data);
    public function update($tablename, $data,$id);   
    public function delete($tablename,$id);
    public function select($tablename,$cols,$id);  
}


class mysqldb implements test{
    private $conn;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->conn =mysqli_connect($servername, $username, $password, $dbname);
    }

    public function insert($tablename, $data){
        
     $keys = array_keys($data);
     $cols = implode(",", $keys);
     $row="";
     foreach ($data as $value ){
        $row.="'$value',";
     }
     $row=rtrim($row,",");
     mysqli_query($this->conn,"INSERT INTO $tablename ($cols) VALUES($row)");

    }
    public function update($tablename,$data,$id){ 

     $sql="UPDATE $tablename SET ";
     foreach ($data as $key=> $value ){
        $sql.="`$key`='$value',";
     }
     $sql=rtrim($sql,",");
     $sql.=" WHERE id=".$id;

     echo $sql;
     mysqli_query($this->conn,$sql);

}
    public function delete($tablename,$id){

        $sql= "DELETE FROM $tablename WHERE id=$id";
        echo $sql;
        mysqli_query($this->conn,$sql);


    }
    public function select($tablename,$cols,$id){

       $sql= "Select * FROM $tablename WHERE id=$id";
       $res = mysqli_query($this->conn,$sql);

        foreach ($res as $rows){
print_r($rows);
           // $row = implode("_", $rows);
            echo $rows;

            echo"<br>";
    //    echo $row['name'];
    //    echo $row['email'];
    //    echo $row['password'];

       }

    }

}


$c = new mysqldb('localhost','root','','codeacademy');
//$c->insert('users', ['name'=>'saw','email'=>'saw@hot.co','password'=>'111']);
//$c->update('users',['name'=>'ttt','email'=>'tt@hot.co','password'=>'tt'],2);

//$c->delete('users',2);
$c->select('users',1);