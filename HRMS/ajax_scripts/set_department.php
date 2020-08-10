<?php 

include("../connection.php");

$select_dept="select dept_id,department from tbl_dept";
$resdept=mysql_query($select_dept);
$count=mysql_num_rows($resdept);
if($count>0)
{
	 echo "department exist:".$count;
}
else
{
	echo "no department found";
}


 ?>






