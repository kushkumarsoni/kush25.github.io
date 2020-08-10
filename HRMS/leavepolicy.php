<?php 

session_start();

include("connection.php");

$query="select * from tbl_dept";
$res=mysql_query($query);

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
		<div class="col-md-5 mt-4">
			<form action="codeleavepolicy.php" method="post" onsubmit="return validation();">
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
          <div class="form-group">
            <label for="department">Select Department:</label>
            <select name="department" class="form-control" id="dept_id" onchange="changedept();">
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
            ?>
            </select>
            <script type="text/javascript">
              function changedept()
              {
                //alert('hiiiii');
                var opt=document.getElementById('dept_id');
                var opval=opt.value;
                // alert('select the designation');
                // alert(optval);
                window.location.href="leavepolicy.php?opval="+opval;
              }
            </script>
          </div>
           <div class="form-group">
            <label for="designation">Select Designation:</label>
            <select name="designation" class="form-control" id="desig">
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
          </div>
           <div class="form-group">
            <label for="designation">Monthly(Leave):</label>
            <span>for 1 month</span>
            <input type="text" name="mleave" class="form-control" id="mleave" onkeyup="setval();">
          </div>
           <div class="form-group">
            <label for="designation">Yearly(Leave)::</label>
             <input type="text" name="yleave" class="form-control"  id="yleave" onkeyup="setval();">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
  

  <!-- Code for set the value for yearly leave -->
  
  <script>
    function setval()
    {
      //alert('hello');
      var mleave=document.getElementById("mleave");
      var mleavevalue=mleave.value;
      var mleavevalue1=Number(mleavevalue);
      //alert(mleavevalue1);

      var yleave=document.getElementById("yleave");
      var yleavevalue=yleave.value;
      var yleavevalue1=Number(yleavevalue);
      
      document.getElementById("yleave").value=mleavevalue1*parseInt(12);
  
    }
  </script>

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





