<?php

require "../libs/config.php";
require "../libs/mysqldb.php";

 $db = new mysqldb();
 $data= $db->select('users','*');
 print_r($data);
 
 include "../views/users/read.view.php";
