<?php
include "database.php";

$e=$_POST['email'];
//echo $e;
$p=$_POST['password'];
//echo $p;

$select=mysqli_query($con,"select * from login where email='$e' and password='$p'");

if($row=mysqli_fetch_array($select))
{
	$_SESSION['user']=$e;
	header("Location:show.php");
}
else
{
	header("Location:login.php?flg=1");
}

?>