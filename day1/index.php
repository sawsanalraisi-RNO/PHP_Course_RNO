<?php

$a =[1,8,30,4];

echo $a[count($a)-1];
echo "<br>";
echo max($a);

echo "<br>";
echo "<br>";



for($i=1;$i<=15;$i++)
{
if($i%3==0 && $i%5==0 ){
 echo "fizzBuzz"."<br>";
}
else if($i%3==0){
echo "fizz"."<br>";
}
else if($i%5==0){
echo "buzz"."<br>";
}
else{
 echo $i."<br>";
}   
}


echo "<br>";
echo "<br>";

 
$block=["kkk","test","bbb"];
$str1="mohamed is kkk and bbb";

$str_arr=explode(" ",$str1);

for($i=0;$i<count($str_arr);$i++)
{
    if(in_array($str_arr[$i],$block))
    { echo "....";}
    else
    { echo $str_arr[$i]." ";}
}

echo "<br>";
echo "<br>";
echo "<br>";

$number=[2,5,4,3];
$exit=0;
for($i=0;$i<count($number);$i++)
{
    for($j=0;$j<count($number);$j++)
{
    $numSum =$number[$i] + $number[$j];


    if($numSum==6){
        
        echo $number[$i]." ".$number[$j];
        echo "yes"."<br>";
        $exit=1;
    }
    // else
    // {
    //     echo $number[$i]." ".$number[$j];

    //     echo "no"."<br>";
    // }
}
if($exit==1){
    break;
}
}



echo "<br>";
echo "<br>";
echo "<br>";




$number=[2,5,4,3];
$number2=$number[0];

for($i=1;$i<count($number);$i++)
{
 
    $numSum =$number[$i] + $number2;


    if($numSum==6){
        
        echo $number[$i]."+".$number2."=6";

        echo "(yes)"."<br>";

    }
    else
    {
      //  echo $number[$i]."+".$number2."!=6";

       // echo "(no)"."<br>";
    }



}



?>