<?php

        @$msg=$_REQUEST['msg'];
        if($msg==1)
        {
          echo "<script>
            alert('Update Successfully');
            </script>";
        }

    session_start();
    include("connection.php");

    $email=$_SESSION['employee'];

    $query1="select * from tbl_empregis where email='$email'";
    $res1=mysql_query($query1);
    if($row1=mysql_fetch_array($res1,MYSQL_BOTH))
    {
      

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
                <a href="leavepolicy.php">Casual Leave</a>
			          <a href="empprofile.php">My Profile</a>
			          <a href="empnotification.php">Notification</a>
			          <a href="emplogout.php">Logout</a>
	        		</div>
        			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        		</div>	

		<div class="col-md-5 mt-5">

        <form action="codeempprofile.php" method="post">
         <input type="hidden" name="id" value="<?php echo $row1['emp_id'];?>">
          <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" name="name" placeholder="Enter first name" class="form-control"
            value="<?php echo $row1['name'];?>">
          </div>
          <div class="form-group">
            <label for="fname">Father Name</label>
            <input type="text" name="fname" placeholder="Enter father name" class="form-control"value="<?php echo $row1['fname']; ?>">
          </div>
          <div class="form-check form-check-inline">
            Gender &nbsp; &nbsp; &nbsp;
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" <?php if($row1['gender']=='male') { ?> checked <?php }?>>
          <label class="form-check-label" for="gender">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" <?php if($row1['gender']=='female') { ?> checked <?php }?>>
          <label class="form-check-label" for="gender">Female</label>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter email" class="form-control" value="<?php echo $row1['email'];?>" readonly="true">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" placeholder="Enter your password" class="form-control" value="<?php echo $row1['password']; ?>" readonly>
          </div>
                <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" id="address" rows="2" name="address" placeholder="enter your address..."><?php echo $row1['address']; ?></textarea>
        </div>
            <div class="form-group">
            <label for="contact">Contact No</label>
            <input type="text" name="contact" placeholder="Enter your contact no" class="form-control" value="<?php echo $row1['contact']; ?>">
          </div>
          <div class="form-group">
            <label for="contact">Emergency Contact No</label>
            <input type="text" name="econtact" placeholder="Enter your emergency contact no" class="form-control" value="<?php echo $row1['econtact'];?>">
          </div>
        <button type="submit" class="btn btn-primary mb-2" name="emp_submit">Update</button>
        </form>
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
<?php
}
?>


