<?php 
session_start();
include("connection.php");

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
                <a href="casualleave.php">Casual Leave</a>
			          <a href="empprofile.php">My Profile</a>
			          <a href="empnotification.php">Notification</a>
			          <a href="emplogout.php">Logout</a>
	        		</div>
        			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        		</div>	
		<div class="col-md-6 mt-5">
       <center>
      <div style="height:100%; width:80%; border:1px solid gray; border-radius: 10px;">
       
          <h2 style="color: red;"><img src="images/noti.png" height="40px" width="40px">All  Notices<img src="images/noti.png" height="40px" width="40px"></h2>
          <hr>
          <?php

          include 'connection.php';
          $query="select * from tbl_notification";
          $res=mysql_query($query);
          $a=1;
          while($row=mysql_fetch_array($res,MYSQL_BOTH))
            {
              echo $a;
              echo "<body>.&nbsp;&nbsp;&nbsp;</body>";
             echo $row['notification']."<br><br>";
             echo "<hr>";
              $a++;
            }

          ?>
        </center>
      </div>  
    </div>
		<div class="col-md-3"></div>
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





