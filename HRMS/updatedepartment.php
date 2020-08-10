<?php
$id=$_POST['id'];
//echo $id;
$dept=$_POST['department'];
//echo $dept;
include "connection.php";
$query="update tbl_dept set department='$dept' where dept_id='$id'";
mysql_query($query);
header("Location:department.php");

?>