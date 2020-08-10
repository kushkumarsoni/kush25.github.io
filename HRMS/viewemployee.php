
<?php

session_start();
//echo $_SESSION['user'];
//echo $email;
if($_SESSION['user']=="")
{
  session_destroy();
  header("Location:index.php?flg=7");
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
     <font color="white" style="font-size:30px;margin: 0px auto;"><font color="orange">E</font>mployee <font color="orange">R</font>egistration <font color="orange">P</font>annel</font>
    <a href="logcode.php" class="btn mr-4 m-1" style="background-color: #e57817;color: white;">Logout</a><br/>
   </div>
   <div class="row">
     <div class="col-sm-2">
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
    	<div class="col-sm-6 mt-3">
    		 <form action="viewemployeecode.php" method="post">
		    <table class="table table-bordered mt-3 table-responsive" width="100%">
        <thead class="thead-block" style="text-align: center;">
      <tr>
        <th>Sr No</th>
        <th>Name</th>
        <th>FName</th>
        <th>Department</th>
        <th>Designation</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Delete</th>
        
      </tr>
    </thead>
    <?php 
      $query="select * from tbl_empregis"; 
      $res=mysql_query($query);
      $a=1;
      while($row=mysql_fetch_array($res))
      {
    ?>
    <tbody>
      <tr>
        <td><?php echo $a;?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['fname'];?></td>
        <td><?php echo $row['department'];?></td>
        <td><?php echo $row['designation'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['address'];?></td>
        <td><?php echo $row['contact'];?></td>
        <td><a href="deleteemployee.php?id=<?php echo $row['emp_id'];?>">delete</a></td>
      </tr>
    </tbody>
  <?php $a++; }
  ?>
  </table>
    	</div>
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