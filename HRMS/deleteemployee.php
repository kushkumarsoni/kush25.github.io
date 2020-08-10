<?php  

$id=$_REQUEST['id'];
//echo $id;

include("connection.php");

$location="upload/";

$query1="select * from tbl_empregis";

$res=mysql_query($query1);

$row=mysql_fetch_assoc($res);

$filename=$row['image'];

$query2="delete from tbl_empregis where emp_id='$id'";

mysql_query($query2);
unlink($filename.$location);
header("Location:viewemployee.php");

?>