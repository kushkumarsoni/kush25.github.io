<?php
session_start();
$check=$_POST['who'];
//echo $check;
//echo "<br/>";
$e=$_POST['email'];
//echo $e;
$p=$_POST['password'];
//echo $p;
include("connection.php");

 if($check=='admin')
{
	$query="select * from tbl_admin where email='$e' and password='$p'";
	$res=mysql_query($query);
	if($row=mysql_fetch_assoc($res))
	{
		//print_r($row);
		$_SESSION['user']=$e;
		header("Location:admin.php");
		//echo "connection coonect";
	}
	else
	{
		header("Location:index.php");
		//echo "connection not connect";
	}
}
else if($check=='employee')
{
	
	$query2="select * from tbl_empregis where email='$e' and password='$p'";
	$res2=mysql_query($query2);
	
	if($row2=mysql_fetch_array($res2))
	{
		$_SESSION['employee']=$e;
		header("Location:empdashboard.php");
	}
	else
	{
		header("Location:index.php");
	}

}
else
{
	header("Location:index.php?flg=1");
}

?>