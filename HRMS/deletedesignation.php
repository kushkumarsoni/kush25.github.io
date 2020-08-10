<?php
$id=$_REQUEST['id'];
//echo $id;

include "connection.php";

$query="delete from tbl_desig where desig_id='$id'";
mysql_query($query);
header("Location:designation.php");

?>