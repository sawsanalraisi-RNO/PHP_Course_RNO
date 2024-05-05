<?php 

class a{
    public $x;
    public $y;
    public $z;

    function __construct($x, $y, $z){
     $this->x = $x;
     $this->y = $y;
    $this->z = $z;
    }

    function add(){
        $this->z = $this->x+$this->y;
      }
    
      function sub(){
        $this->z = $this->x-$this->y;
       }

   function PrintResult(){
    return $this->z;
   }

}

class b extends a {
    function mul(){
        $this->z = $this->x*$this->y;
       }
    
       function div(){
        $this->z = $this->x/$this->y;
       }
         
}


$newCar = new b(10,10,0);
$newCar->add();
//echo $newCar->x.",".$newCar->y."=";
//$newCar->mul();
echo $newCar->PrintResult()."<br>";

