<?php

session_start();
//echo $_SESSION['user'];
//echo $email;
if($_SESSION['user']=="")
{
  session_destroy();
  header("Location:index.php?flg=4");
}
include "connection.php";
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
        <form action="employeecode.php" method="post" enctype="multipart/form-data" onsubmit="return validation();">
          <?php  
          @$dept_id=$_REQUEST['opval'];
          if($dept_id=='')
          {
            $optionvalue="Select Department";
            $optionid="";
            //it is equivalent to
            //<option value="">Select department</option>
          }
          else
          {
            $query="select *from tbl_dept where dept_id='$dept_id'";
            $res=mysql_query($query);
            if($row=mysql_fetch_array($res))
            {
              $optionvalue=$row['department'];
              $optionid=$row['dept_id'];
              // it is Equivalent to
              // <option value=''>Developer</option>
            }
            else
            {
              $optionvalue="Select Department";
              $optionid="";
            }
          }
          ?>
          <div class="form-group mt-5">
            <label for="department"> Department</label>
            <select class="form-control" name="dept" id="dept_id" onchange="changedept()">
              <option value="<?php echo $optionid;
               ?>"><?php echo $optionvalue;?></option>
              <?php 
              $query="select * from tbl_dept";
              $res=mysql_query($query);
              while($row=mysql_fetch_array($res,MYSQL_BOTH))
              {
              ?>
              <option value="<?php echo $row['dept_id'];?>"><?php echo $row['department'];?></option>
              <?php
            }
            ?></select>
            <script type="text/javascript">
              function changedept()
              {
                //alert('hiiiii');
                var opt=document.getElementById('dept_id');
                var opval=opt.value;
                // alert('select the designation');
                // alert(optval);
                window.location.href="employee.php?opval="+opval;
              }
            </script>
          </div>
        <div class="form-group">
            <label for="designation"> Designation</label>
            <select class="form-control" name="desig" id="desig">
              <option>Select Designation</option>
              <?php 
              //opval=8;
              $query2="select * from tbl_desig where dept_id='$dept_id'";
              $res2=mysql_query($query2);
              while($row2=mysql_fetch_array($res2))
              {
                ?>
                <option value="<?php echo $row2['desig_id'];?>"><?php echo $row2['designation'];?></option>
                <?php
              }
              ?>
            </select>
          <div class="form-group">
            <label for="name"> Name</label>
            <input type="text" name="name" placeholder="Enter first name" class="form-control">
          </div>
          <div class="form-group">
            <label for="fname">Father Name</label>
            <input type="text" name="fname" placeholder="Enter last name" class="form-control">
          </div>
          </div>
          <div class="form-check form-check-inline">
            Gender &nbsp; &nbsp; &nbsp;
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
          <label class="form-check-label" for="gender">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
          <label class="form-check-label" for="gender">Female</label>
        </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter email" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter your password" class="form-control">
          </div>
                <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" id="address" rows="2" name="address" placeholder="enter your address..."></textarea>
        </div>
            <div class="form-group">
            <label for="contact">Contact No</label>
            <input type="text" name="contact" placeholder="Enter your contact no" class="form-control">
          </div>
          <div class="form-group">
            <label for="contact">Emergency Contact No</label>
            <input type="text" name="econtact" placeholder="Enter your emergency contact no" class="form-control">
          </div>
          <div class="form-group">
          <label for="picture">Update Pic</label>
          <input type="file" class="form-control-file" name="picture">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="emp_submit">Register</button>
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