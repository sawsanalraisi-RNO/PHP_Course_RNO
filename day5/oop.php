<?php 

class Users{

    private $name;
    private $age;
    private $email;

    private $result;
    public function setValue($n,$g,$m){
         $this->name =$n;
         $this->age =$g;
         $this->email =$m;
         return $this;
    }  


    public function getValue(){
       
        if(strlen($this->name)<2 && strlen($this->email)< 4 && $this->age==0){
           $result= "User Info Not accept";
        }
        else
        {
            $result= "User Info:<br> name:".$this->name."<br>Age:".$this->age."<br>Email:".$this->email;
        }
        return $result;
    }

 


}


$user = new Users;
echo $user->setValue('a',0,'1')->getValue();

