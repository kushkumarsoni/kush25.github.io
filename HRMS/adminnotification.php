
<?php

session_start();
//echo $_SESSION['user'];
//echo $email;
if($_SESSION['user']=="")
{
  session_destroy();
  header("Location:index.php?flg=5");
}
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- javascrt file -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <title>HRMS</title>
  <style type="text/css">
    

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
  <!-- header Section -->
  <div class="container-fluid">
   <div class="row" style="min-height: 50px;background-color: #85929E;">
     <font color="white" style="font-size:30px;margin: 0px auto;"><font color="orange">W</font>elcome <font color="orange">A</font>dmin <font color="orange">P</font>annel</font>
    <a href="logcode.php" class="btn mr-4 m-1" style="background-color: #e57817;color: white;">Logout</a><br/>
   </div>
   <div class="row">
     <div class="col-sm-3">
       <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <img src="images/logoicon.jpg" width="80%">
            &nbsp;&nbsp;&nbsp;<font style="font-size: 25px;color: orange;"><?php echo $_SESSION['user']; ?></font>
           <a href="admin.php">Admin Dashboard</a>
          <a href="employee.php">Add Employee</a>
          <a href="viewemployee.php">View Employee</a>
          <a href="department.php">Add Department</a>
          <a href="designation.php">Add Designation</a>
          <a href="adminnotification.php">Notification</a>
        </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
     </div>
    	<div class="col-sm-5 mt-5">
    		 <form action="codeadminnotification.php" method="post">
			    <div class="form-group">
			      <label for="department">Add Notification</label>
			      <textarea name="notification" class="form-control" rows="7"></textarea>
			    </div>
		    <button type="submit" class="btn btn-primary">Add Department</button>
		  </form>
		  
    	</div>
      </div>
     </div>
     </div>
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