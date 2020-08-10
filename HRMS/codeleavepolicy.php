<?php

include("connection.php");

$department=$_POST['department'];
//echo $department;
$designation=$_POST['designation'];
//echo $designation;
$mleave=mysql_real_escape_string($_POST['mleave']);
//echo $mleave;
$yleave=mysql_real_escape_string($_POST['yleave']);
//echo $yleave;

$query="insert into tbl_leavepolicy(department,designation,mleave,yleave,date) values('$department','$designation','$mleave','$yleave',now())";
mysql_query($query);
header("Location:leavepolicy.php");

?>