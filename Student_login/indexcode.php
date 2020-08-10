<?php
include  "database.php";
$n=$_POST['name'];
echo $n;
$fn=$_POST['fname'];
echo $fn;
$e=$_POST['email'];
echo $e;
$p=$_POST['password'];
echo $p;
$a=$_POST['address'];
echo $a;
$g=$_POST['gender'];
echo $g;
$t=$_POST['technology'];
$tech=implode(',',$t);
echo $tech;
$c=$_POST['city'];
echo $c;
$pic=$_FILES['picture']['name'];
$tmpname=$_FILES['picture']['tmp_name'];
$location="upload/";

if(($n=='' && $fn=='' && $e=='' && $p==''))
{
	header("Location:index.php?flg=2");
}
else
{
	$insert=mysqli_query($con,"insert into login(name,fname,email,password,gender,address,city,technology,picture,date) 
	values('$n','$fn','$e','$p','$g','$a','$c','$tech','$pic',now())");
	move_uploaded_file($tmpname,$location.$pic);
	header("Location:index.php?flg=1");
}

?>