<?php

session_start();
//echo $_SESSION['user'];
//echo $email;
if($_SESSION['user']=="")
{
  session_destroy();
  header("Location:index.php?flg=2");
}

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
     <font color="white" style="font-size:30px;margin: 0px auto;"><font color="orange">W</font>elcome <font color="orange">T</font>o <font color="orange">A</font>dmin <font color="orange">P</font>annel</font>
    <a href="logcode.php" class="btn  mr-4 m-1" style="background-color: #e57817;color: white;">Logout</a><br/>
   </div>

   <!-- Side Navbar Start -->

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
          <a href="empleave.php">Employee Leave</a>
          <a href="adminnotification.php">Notification</a>
          <a href="attendence.php">Attendence</a>

        </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
     </div>

     <!-- Side Navbar End -->

     <!-- Admin dashboard Right Side start -->

     <!-- add Employee div start -->

     <div class="col-sm-9 mt-4" style="width: 70%;min-height: 700px;">
       <div class="row">
         <div class="col-sm-3">
           <div class="AE" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#FF5733;">
            <div id="aeinside1">
             <img src="images/employee.png" class="rounded" alt="Cinque Terre" width="200" height="150">
             </div> 
             <div id="aeinside2"><a href="employee.php" class="btn btn-primary ml-4 mt-1">Add Employee</a></div>
           </div>
        </div>

        <!-- add Employee div End -->

        <!-- View Employee div start -->

         <div class="col-sm-3">
           <div class="VE" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#CED10E;">
             <div id="veinside1">
             <img src="images/logo-admin.png" class="rounded" alt="Cinque Terre" width="200" height="150">
             </div> 
             <div id="veinside2"><a href="viewemployee.php" class="btn btn-primary ml-4">View Employee</a></div>
           </div>
         </div>

         <!-- View Employee div End -->

         <!-- add Department div start -->

         <div class="col-sm-3">
           <div class="AD" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#0AC58A;">
             <div id="adinside1">
             <img src="images/logo-admin.png" class="rounded" alt="Cinque Terre" width="200" height="150">
             </div> 
             <div id="adinside2"><a href="department.php" class="btn btn-primary ml-4">Add Department</a></div>
           </div>
         </div>
        <!-- add Department div End --> 

        <!-- add Designation div start -->

         <div class="col-sm-3">
           <div class="AE" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#F6AD3C;">
             <div id="adinside1">
             <img src="images/logo-admin.png" class="rounded" alt="Cinque Terre" width="200" height="150">
             </div> 
             <div id="adinside2"><a href="designation.php" class="btn btn-primary ml-4">Add Designation</a></div>
           </div>
         </div>
       </div>
      <!-- add Designation div End --> 
       <div class="row">
         <div class="col-sm-3">
           <div class="AE" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#F8F9F9 ;">
             <div id="adinside1">
             <img src="images/pay.jpg" class="rounded" alt="Cinque Terre" width="180" height="140" style="margin-left: 10px;margin-top: 5px;">
             </div> 
             <div id="adinside2"><a href="#" class="btn btn-primary ml-5">Pay Slip</a></div>
           </div>
         </div>
         <div class="col-sm-3">
           <div class="AE" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#8ed78e;">
             <div id="adinside1">
             <img src="images/noti.png" class="rounded" alt="Cinque Terre" width="200" height="150">
             </div> 
             <div id="adinside2"><a href="empleave.php" class="btn btn-primary ml-5">Emp Leave</a></div>
           </div>
         </div>
         <div class="col-sm-3">
           <div class="AE" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#ff80ff;">
             <div id="adinside1">
             <img src="images/logo-admin.png" class="rounded" alt="Cinque Terre" width="200" height="150">
             </div> 
             <div id="adinside2"><a href="adminnotification.php" class="btn btn-primary ml-4">Notification</a></div>
           </div>
         </div>
         <div class="col-sm-3">
           <div class="AE" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#FCF3CF;">
             <div id="adinside1">
             <img src="images/logo-admin.png" class="rounded" alt="Cinque Terre" width="200" height="150">
             </div> 
             <div id="adinside2"><a href="attendence.php" class="btn btn-primary ml-4">Attendence</a></div>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-3">
           <div class="AE" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#2471A3 ;">
             <div id="adinside1">
             <img src="images/logo-admin.png" class="rounded" alt="Cinque Terre" width="200" height="150">
             </div> 
             <div id="adinside2"><a href="#" class="btn btn-primary ml-4">Add Department</a></div>
           </div>
         </div>
         <div class="col-sm-3">
           <div class="AE" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#D6EAF8;">
             <div id="adinside1">
             <img src="images/logo-admin.png" class="rounded" alt="Cinque Terre" width="200" height="150">
             </div> 
             <div id="adinside2"><a href="#" class="btn btn-primary ml-4">Add Department</a></div>
           </div>
         </div>
         <div class="col-sm-3">
           <div class="AE" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#E6B0AA;">
             <div id="adinside1">
             <img src="images/logo-admin.png" class="rounded" alt="Cinque Terre" width="200" height="150">
             </div> 
             <div id="adinside2"><a href="#" class="btn btn-primary ml-4">Add Department</a></div>
           </div>
         </div>
         <div class="col-sm-3">
           <div class="AE" style="min-height: 200px;width:90%; border:1px solid green;margin: 5px;border-radius: 25px;background-color:#73C6B6;">
             <div id="adinside1">
             <img src="images/logo-admin.png" class="rounded" alt="Cinque Terre" width="200" height="150">
             </div> 
             <div id="adinside2"><a href="#" class="btn btn-primary ml-4">Add Department</a></div>
           </div>
         </div>
       </div>
     </div>
   </div>
  </div>
  

    <!-- Side Navbar Code -->

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
  
</body>
</html>