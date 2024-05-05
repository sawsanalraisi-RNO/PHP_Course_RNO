<?php 

echo"<pre>";

print_r($_FILES);


// for ($i = 0; $i < count($_FILES['img']['name']); $i++) {
//     $name =$_FILES['img']['name'][$i];
//     $path =$_FILES['img']['tmp_name'][$i];
//       move_uploaded_file($path,"img/".$_POST['name']);
//      // copy($path,"img/".$name);

// }
$newName =$_POST['name'];
echo $newName;

$newtype = explode("/",$_FILES['img']['type'])[1];
//$endvalue =end($endvalue);
//echo "end".$endvalue;
echo "<br>";
//echo $newtype[0]."<br>";
//echo $newtype[1];

$name =$_FILES['img']['name'];
$path =$_FILES['img']['tmp_name'];
move_uploaded_file($path,"img/$newName.$newtype");