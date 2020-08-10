<?php
include("connection.php");
$id=$_REQUEST['id'];
//echo $id;

$query1="select * from tbl_leave where l_id='$id'";
$res1=mysql_query($query1);

$row1=mysql_fetch_array($res1,MYSQL_BOTH);
	
	$status=$row1['status'];

	if($status=='N')
	{
		$query2="update  tbl_leave set status='Y' where l_id='$id'";
		mysql_query($query2);
		header("Location:empleave.php");

	}
	else
	{
		$query3="update tbl_leave set status='N' where l_id='$id'";
		mysql_query($query3);
		header("Location:empleave.php");
	}

?>