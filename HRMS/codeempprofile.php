<?php

$emp_id=$_POST['id'];
//echo $emp_id;

$n=$_POST['name'];
//echo $n;
$fn=$_POST['fname'];
//echo $fn;
$g=$_POST['gender'];
//echo $g;

$a=$_POST['address'];
//echo $a;
$c=$_POST['contact'];
//echo $c;
$ec=$_POST['econtact'];
//echo $ec;


include("connection.php");

	$query="update tbl_empregis set name='$n',fname='$fn',gender='$g',address='$a',contact='$c',econtact='$ec' where emp_id='$emp_id'";

	mysql_query($query);
	header("Location:empprofile.php?msg=1");

?>