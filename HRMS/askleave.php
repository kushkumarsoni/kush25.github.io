<?php 
session_start();
include 'connection.php';
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
		<div class="col-md-5 mt-5">
			<form action="codeaskleave.php" method="post">
			  <div class="form-group">
			    <label for="fromdate">From Date</label>
			    <input type="date" class="form-control" id="from" name="fdate">
			  </div>
			  <div class="form-group">
			    <label for="todate">To Date</label>
			    <input type="date" class="form-control" id="to" name="tdate" onchange="calcdays();">
			  </div>
			  <div class="form-group">
			    <label for="nodays">No of days</label>
			    <input type="text" class="form-control" id="nodays" name="nodays">
			  </div>
			  <div class="form-group">
			    <label for="subject">Subject</label>
			    <select name="subject" class="form-control">
			    	<option value="">--select--</option>
			    	<option value="emergency">Emergency</option>
			    	<option value="wedding">Wedding & function</option>
			    	<option value="general">General(official)</option>
			    	<option value="other">Other(Unofficial)</option>
			    </select>
			  </div>
			  <div class="form-group">
			    <label for="raeson">Reason</label>
				 <textarea class="form-control" name="reason" style="resize: none;" id="reason" onkeyup="countletters(this.value);"></textarea><br>
			    <span>Remaining(Letters):</span>
			    <span id="remain">100</span>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
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



<!-- Date Difference function code-->

	<script>
		function calcdays(){
		var from=document.getElementById("from");
		var to=document.getElementById("to");
		var nodays=document.getElementById("nodays");
		var leaves=nodays.value;
		var fromdaysarray=from.value.split("-");
		var todaysarray=to.value.split("-");
		
		var fromyear,frommonth,fromdays;
		var toyear,tomonth,todays;
		fromyear=fromdaysarray[0];
		frommonth=fromdaysarray[1];
		fromdays=fromdaysarray[2];
		
		toyear=todaysarray[0];
		tomonth=todaysarray[1];
		todays=todaysarray[2];
		
		
		if(fromyear==toyear)
		{
			if(frommonth==tomonth)
			{
			
				leaves=(todays-fromdays);
				nodays.value=leaves+parseInt(1);
			}
			else
			{
				alert("1 Month Leave not Allowed");
				nodays.value=0;
			}
			
		}
			
	}
	</script>
	
	<!-- Code for textareat tag -->

	<script>
		function countletters(words)
		{
			var remain=document.getElementById("remain");
			var maxcount=remain.innerHTML;
			var count=words.length;
			

			if(count>=100)
			{
				maxcount=0;
				remain.innerHTML=0;
			}
			else
			{
				maxcount=100-count;
				remain.innerHTML=maxcount;
			}
		}
	</script>

</body>
</html>





