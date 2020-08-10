<?php

session_start();
//echo $_SESSION['user'];
//echo $email;
if($_SESSION['user']=="")
{
  session_destroy();
  header("Location:index.php?flg=8");
}
include "connection.php";

$id=$_REQUEST['id'];
//echo $id;

$query3="select * from tbl_empregis where emp_id='$id'";
$res3=mysql_query($query3);

if($row=mysql_fetch_assoc($res3))
{



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- javascrt file -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="jquery-3.4.1.min (1).js"></script>
  <script>
    
  </script>

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
     <font color="white" style="font-size:30px;margin: 0px auto;"><font color="orange">E</font>mployee <font color="orange">R</font>egistration <font color="orange">P</font>annel</font>
    <a href="logcode.php" class="btn  mr-4 m-1" style="background-color: #e57817;color: white;">Logout</a><br/>
   </div>

   <!-- Side Navbar -->
   <div class="row">
     <div class="col-md-2">
       <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <img src="images/logoicon.jpg" width="80%">
            &nbsp;&nbsp;&nbsp;<font style="font-size: 25px;color: orange;"><?php echo $_SESSION['user']; ?></font>
           <a href="admin.php">Admin Dashboard</a>
          <a href="employee.php">Add Employee</a>
          <a href="viewemployee.php">View Employee</a>
          <a href="department.php">Add Department</a>
          <a href="designation.php">Add Designation</a>
        </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
     </div>
      <div class="col-md-5">
        <img src="images/h1.png" width="95%" height="740px" style="margin-top: 110px;">
      </div>
      <div class="col-md-5">
        <form action="updateemployee.php" method="post" enctype="multipart/form-data">
         <input type="hidden" name="id" value="<?php echo $row['emp_id'];?>">
          <div class="form-group mt-5">
            <label for="department"> Department</label>
            <select class="form-control" name="dept" id="dept_id" onchange="changedept()">
              <option><?php echo $row['department'];?></option>
              </select>
            
          </div>
        <div class="form-group">
            <label for="designation"> Designation</label>
            <select class="form-control" name="desig" id="desig">
              <option><?php echo $row['designation'];?></option>
              
            </select>
          <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" name="name" placeholder="Enter first name" class="form-control"
            value="<?php echo $row['name'];?>">
          </div>
          <div class="form-group">
            <label for="fname">Father Name</label>
            <input type="text" name="fname" placeholder="Enter father name" class="form-control"value="<?php echo $row['fname'];?>">
          </div>
          </div>
          <div class="form-check form-check-inline">
            Gender &nbsp; &nbsp; &nbsp;
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" <?php if($row['gender']=='male'){?> checked <?php }?>>
          <label class="form-check-label" for="gender">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" <?php if($row['gender']=='female'){?> checked <?php }?>>
          <label class="form-check-label" for="gender">Female</label>
        </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter email" class="form-control" value="<?php echo $row['email'];?>">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter your password" class="form-control" value="<?php echo $row['password'];?>" readonly>
          </div>
                <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" id="address" rows="2" name="address" placeholder="enter your address..."><?php echo $row['address'];?></textarea>
        </div>
            <div class="form-group">
            <label for="contact">Contact No</label>
            <input type="text" name="contact" placeholder="Enter your contact no" class="form-control" value="<?php echo $row['contact'];?>">
          </div>
          <div class="form-group">
            <label for="contact">Emergency Contact No</label>
            <input type="text" name="econtact" placeholder="Enter your emergency contact no" class="form-control" value="<?php echo $row['econtact'];?>">
          </div>
          <div class="form-group">
          <label for="picture">Update Pic</label>
          <input type="file" class="form-control-file" name="picture" value="<? echo $row['image'];?>">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="emp_submit">Update</button>
        </form>
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
<?php
}
?>