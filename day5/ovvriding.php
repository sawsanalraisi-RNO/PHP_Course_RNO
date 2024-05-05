<?php

class Users{

public function __call($method, $args)
{
    if($method=="Add"){

        if(count($args)==2){
        echo $args[0]+$args[1];
        }
        else if(count($args)==3){
            echo $args[0]+$args[1]+$args[2];
        }
    }
}

}


$user = new Users();
$user->Add(10,20,30);