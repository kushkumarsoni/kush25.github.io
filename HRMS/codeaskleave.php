<?php

	include("connection.php");

	session_start();
	$e=$_SESSION['employee'];
	//echo $e;
	$fdate=$_POST['fdate'];
	//echo $fdate;
	$tdate=$_POST['tdate'];
	//echo $tdate;
	$reason=$_POST['reason'];
	//echo $reason;
	$nodays=$_POST['nodays'];
	echo $nodays;
	$subject=$_POST['subject'];
	echo $subject;
	$status="N";

	$query="select * from tbl_empregis where email='$e'";
	$res=mysql_query($query);
	$row=mysql_fetch_array($res,MYSQL_BOTH);
	$emp_id=$row['emp_id'];

	echo $query2="insert into tbl_leave(fromdate,todate,nodays,subject,reason,date,emp_id,status) values('$fdate','$tdate','$nodays','$subject','$reason',now(),'$emp_id','$status')";
	mysql_query($query2);  

	header("Location:askleave.php"); 
?>