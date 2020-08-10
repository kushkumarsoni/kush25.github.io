<?php
include("connection.php");
$id=$_POST['name'];
//echo $id;
$desig=$_POST['designation'];
//echo $desig;

$query="update tbl_desig set designation='$desig' where desig_id='$id'";
mysql_query($query);
header("Location:designation.php");
?>