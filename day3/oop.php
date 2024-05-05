<?php 

class cal{
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

   function mul(){
    $this->z = $this->x*$this->y;
   }

   function div(){
    $this->z = $this->x/$this->y;
   }
   

   function PrintResult(){
    return $this->z;
   }

}


$newCar = new cal(10,10,0);
echo $newCar->x.",".$newCar->y."=";
$newCar->mul();
echo $newCar->PrintResult()."<br>";

// echo $newCar->x.",".$newCar->y."=<br>";
// echo $newCar->add()."<br>";
// echo $newCar->sub()."<br>";
// echo $newCar->mul()."<br>";
// echo $newCar->div()."<br>";
// echo "<br><br><br>";

//List
//$newCar = new cal([10,20],[1,2],0);
