<?php

include "connection.php";
include "server_time/timestamp.php";

$add=$_POST['add'];
//echo $add;
$title=$_POST['title'];
$description=$_POST['description'];
$date=gdate();

 $query="insert into tbl_terms(adding,title,description,date) values('$add','$title','$description','$date')";
mysql_query($query);
header("Location:terms.php");

?>