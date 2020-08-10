<?php  

$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
//echo $id;
$query="delete from tbl_dept where dept_id='$id'";
mysql_query($query);
header("Location:department.php"); 

?>