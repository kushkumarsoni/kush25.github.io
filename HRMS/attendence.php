
<?php

session_start();
include("connection.php");
$email= $_SESSION['user'];
//echo $email;
if($_SESSION['user']=="")
{
  session_destroy();
  header("Location:index.php");
}

//$query="select * from tbl_dept";
//$res=mysql_query($query);
include "server_time/timestamp.php";
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


.showrecord-table{
        height:auto;
        width:100%;
        margin:0px auto;
        text-align:center;
        
      }
      
      table tbody
      {
        overflow-y:scroll;
        //height:100px;
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
     <div class="col-sm-3">
       <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <img src="images/logoicon.jpg" width="80%">
            &nbsp;&nbsp;&nbsp;<font style="font-size: 25px;color: orange;"><?php echo $email; ?></font>
           <a href="admin.php">Admin Dashboard</a>
          <a href="employee.php">Add Employee</a>
          <a href="#">View Employee</a>
          <a href="department.php">Add Department</a>
          <a href="designation.php">Add Designation</a>
        </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
     </div>
    	<div class="col-sm-6 mt-5" style="width: 100%;height:auto;border:1px solid black;text-align: center;">

        <h3>Add Attendence</h3><hr>
        
        Today Date:<input type="text" value="<?php echo gdate();?>" style="background-color:powderblue;" readonly  class="form-control">
      <br/>
        Choose Type:
        <select id="select_type" onchange="selectdepartment();"  class="form-control">
          <option value="">--select--</option>
          <option value="dept">Department</option>
          <option value="indiv">Individual</option>
        </select>
        
        <br/>
    <!-- Here we make Department-Division-->    

        <div id="div_department" style="display:none;">
        choose Department:
        <select id="department" onchange="changedept();"  class="form-control">
          <option value=''>select department</option>


          <!--
          here we will generate option dynamically
          
          --->
          
        </select>
        </div>


<!-- Here we make Department-Division-->

    <div class="showrecord-table">
    <table class="table table-bordered mt-3">
      <thead class="thead-black">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Department</th>
          <th>date</th>
          <th>time</th>
          <th>Status</th>
          <th>Update</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      
      $query="select * from tbl_attendance";
      $res=mysql_query($query);
      $a=1;
      while($row=mysql_fetch_assoc($res))
      {
        //print_r($row);
        //Array ( [att_id] => 1 [emp_id] => 1 [date] => 09-01-2020 [time] => 06:10 [att_status] => p )
        $emp_id=$row['emp_id'];
        $att_id=$row['att_id'];
        $date=$row['date'];
        $time=$row['time'];
        $att_status=$row['att_status'];
        
        ?>
        <tr>
        <td><?php echo $a;?></td>
        <td><?php 
        
        $res2=mysql_query("select * from tbl_empregis where emp_id='$emp_id'");
        if($rowemp=mysql_fetch_assoc($res2))
        {
          //print_r($rowemp);
          $name=$rowemp['name'];
          $deptid=$rowemp['department'];
          echo $name;
          
          
        }
        
        
        ?></td>
        <td><?php
        $resdept=mysql_query("select * from tbl_dept where dept_id='$deptid'");
        if($rowdept=mysql_fetch_assoc($resdept))
        {
          //print_r($rowdept);
          $department=$rowdept['department'];
          echo $department;
        }
        
        
        
        ?></td>
        <td><?php echo $date;?></td>
        <td><?php echo $time;?></td>
        <td><?php 
        if($att_status=="p")
        {
          echo "present";
        }
        else
        {
          echo "absent";
        }
        
        ?></td>
        <td><a href="attupdate.php?emp_id=<?php echo $rowemp['emp_id'];?>">update</a></td>
        
        </tr>
        <?php
        $a++;
      }
      ?>
      </tbody>
    </table>
    </div>
    </div>
    	</div>
      <div class="col-sm-3"></div>
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

<!-- ajax part -->

    <script>
    function selectdepartment(){
  var select_type=document.getElementById("select_type");
  var div_department=document.getElementById("div_department");
  var typeoption=select_type.value;
  
  //alert(typeoption);
  if(typeoption=="dept")
  {
    div_department.style.display="block";
    var department=document.getElementById("department");
    $response="<option value=''>--select--</option>";
    department.innerHTML=$response+'<?php 
    
        //dbcooonection include

    $select_dep="select dept_id,department from tbl_dept";
    $resdept=mysql_query($select_dep);
    $count=mysql_num_rows($resdept);
    if($count>0)
    {
      //echo "department exist:".$count;
      while($row=mysql_fetch_assoc($resdept))
      {
        $value=$row['dept_id'];
        $myvalue='"'.$value.'"';
        $department=$row['department'];
        
      echo "<option value=$myvalue>$department</option>";
      }
    }
    else
    {
      echo "no department found";
    }

    
    
    ?>';
    
    
  }
  else
  {
    div_department.style.display="none";
  }
    
    }//end of function
    
    function changedept(){
      var department=document.getElementById('department');
      var deptid=department.value;
      //document.write("department id:"+deptid);
      //alert(deptid);
      //http request variable
      var method="GET";
      var url="ajax_scripts/request_insert.php?dept_id="+deptid;
      var type=true;
      var request=new XMLHttpRequest();
        request.onreadystatechange=function(){
        
        if(request.readyState==4 && request.status==200)
        {
          //insert code
          console.log(request.responseText);
          
          
        }
        
      };
      request.open(method,url,type);
      request.send();
      
      
    }
  </script>          

</html>