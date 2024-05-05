<?php
 session_start();

 $_SESSION['x']=10;
 setcookie('name','sawsan',time()+60*60*24*30,'/');


