<?php

$notification=$_POST['notification'];
//echo $notification;

include("connection.php");

$query="insert into tbl_notification(notification,date) values('$notification',now())";
mysql_query($query);
header("Location:adminnotification.php");

?>