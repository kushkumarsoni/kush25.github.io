<?php 

session_start();

include("connection.php");

$query="select * from tbl_notification order by notification desc";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$notification=$row['notification'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>empdashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <style>
body {
  font-family: "Lato", sans-serif;
background-image: url('images/effect2.png');
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #85929E;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #f1f1f1;
  display: block;
  transition: 0.5s;
}

.sidenav a:hover {
  background-color: #ff6347;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  </style>

</head>
<body>

	<nav class="navbar navbar-expand-sm justify-content-center" style="background-color: #85929E;">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="empdashboard.php"><font size="6" style="color:white;">Welcome To Employee Dashboard</font></a>
    </li>
  </ul>
</nav>
<br>
	<marquee onmouseover="this.stop()" onmouseout="this.start()">
		<img src="images/noti.png" height="40px" width="40px"><font size="5">Important Announcement:</font><font size="3"style="color:red;font-weight: bold; font-family: sans-serif;"><?php echo $notification;?></font></marquee>
<div class="container-fluid">
	<div class="row">
				<div class="col-md-3">	
			 		<div id="mySidenav" class="sidenav">
			          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			          <?php 
			          $email=$_SESSION['employee'];
			          	$query2="select * from tbl_empregis where email='$email'";
			          	$res2=mysql_query($query2);
			          	$row2=mysql_fetch_array($res2);
			          	//print_r($row2);
			          ?>
			          <img src="upload/<?php echo $row2['image'];?>" width="80%" style="border-radius: 50%;">
			          <font color="orange"><?php  echo $email;?></font>
			           <a href="empdashboard.php">Emp Dashboard</a>
			          <a href="askleave.php">Ask for Leave</a>
			          <a href="myleave.php">My Leave</a>
                <a href="leavepolicy.php">Casual Leave</a>
			          <a href="empprofile.php">My Profile</a>
			          <a href="empnotification.php">Notification</a>
			          <a href="emplogout.php">Logout</a>
	        		</div>
        			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        		</div>	
		<div class="col-md-7">
			
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
	
	 <!-- Main Section -->

  <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script><script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
</html>





