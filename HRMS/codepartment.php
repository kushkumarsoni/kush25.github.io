<?php
include("connection.php");
$dept=$_POST['department'];
//echo $dept;

$res=mysql_query("select * from tbl_dept where department='$dept'");


if($dept=='')
{
header("Location:department.php");
}

else
{
	if($row=mysql_fetch_array($res,MYSQL_BOTH))
	{
		header("Location:department.php");
	}
	else
	{
	$query="insert into tbl_dept(department,date) values('$dept',curdate())";
	mysql_query($query);
	header("Location:department.php");	
	}

}
  ?>

