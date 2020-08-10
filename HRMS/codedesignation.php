<?php 


include("connection.php");
$desig=$_POST['designation'];
echo $desig;
$depart=$_POST['department'];
echo $depart;

	if($desig=='')
	{
		header("Location:designation.php");
	}	
	else
	{
		$query="insert into tbl_desig(designation,dept_id,date) values('$desig','$depart',curdate())";
		mysql_query($query);
		header("Location:designation.php");
	}
 ?>