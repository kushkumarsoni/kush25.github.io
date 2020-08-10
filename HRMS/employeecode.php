<?php


$n=$_POST['name'];
//echo $n;
//echo "<br>";
$fn=$_POST['fname'];
//echo $fn;
//echo "<br>";
$d=$_POST['dept'];
//echo $d;
//echo "<br>";
$g=$_POST['gender'];
//echo $g;
//echo "<br>";
$desig=$_POST['desig'];
//echo $desig;
//echo "<br>";
$e=$_POST['email'];
//echo $e;
//echo "<br>";
$p=$_POST['password'];
//echo $p;
//echo "<br>";
$add=$_POST['address'];
//echo $add;
//echo "<br>";
$cont=$_POST['contact'];
//echo $cont;
//echo "<br>";
$econt=$_POST['econtact'];
//echo $econt;
//echo "<br>";

$filename=$_FILES['picture']['name'];
//echo $filename;
$type=$_FILES['picture']['type'];
//echo $type;
$size=$_FILES['picture']['size'];
//echo $size;
$tmp_name=$_FILES['picture']['tmp_name'];

include("connection.php");

$location="upload/";

$query="insert into tbl_empregis(name,fname,department,designation,gender,email,password,contact,econtact,address,image,date) values('$n','$fn','$d','$desig','$g','$e','$p','$cont','$econt','$add','$filename',now())";

move_uploaded_file($tmp_name, $location.$filename);
mysql_query($query);
header("Location:employee.php");
//echo "Data successfully entered";
?>