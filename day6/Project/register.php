<?php

require "/libs/config.php";
include "views/register.view.php";

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];


if($_SERVER['REQUEST_METHOD'] === "POST") {

    if($passwrod != $repassword){
        echo "password not match";
    }else {
        $db = new mysqldb();
        $res = $db->insert("users",[
            "name"=>$name,
            "email"=>$email,
            "password"=>$passwrod
        ]);

        if($res){
            echo "<h4 style='color:green'>user register</h4>";
        }

    }





    //test
    //test2
        //test3

}


