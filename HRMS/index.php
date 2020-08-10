<?php
session_start();
 @$flg=$_REQUEST['flg']; 
/*if($flg==3)
{
 echo "<span style='color:red;'>Logout Successful</span>"; 
}
*/

?>

    <!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    	<title>HRMS</title>
      <style type="text/css">
        *{
          margin: 0px;
          padding: 0px;
          box-sizing: border-box;
        }
        
      </style>

     

    </head>
<body>
	     <!-- header Section -->

	       <div style="text-align:center;padding:5px;background:#FAFAFA;border-bottom:1px solid #DADADA;">
            <a href="index.php"><img src="images/kk.png" alt="Human Resource Management System" height="130px" width="350px"></a>
        </div>
        <!-- Main Section -->

        <div class="container mt-5" style="margin-bottom: 3px;" id="j">
  			<div class="jumbotron" style="background-color:#FAFAFA; border-radius: 20px;">
  				<div class="row">
  					<div class="col-5 mt-5"><img src="images/hrmsedit.png" width="90%" height="210px"></div>
  					<div class="col-7">
  						<div class="frm">
              <h2 style="color: #e57817;">Login</h2>
              <form action="indexcode.php" method="post">
             	<span style="color:red;">
              <?php 
              if($flg==1)
              {
            	echo "Please choose a option";
              }
              else if($flg==2 || $flg==4 || $flg==5 || $flg==6)
              {
                echo "Please Login ***********";
              }
              else if($flg==3)
              {
                echo "Logout Successfully";
              }
              else if($flg)
              ?></span>

    <div class="form-group">
    	<select name="who" class="custom-select mb-3">
      <option value="">who are you</option>
      <option>admin</option>
      <option>employee</option>
      </select>
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" id="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" id="password">
    </div>
    </div>
    <button type="submit" class="btn  ml-3" name="submit" style="background-color: #e57817;color: white;"
    id="submit">Submit</button>
  </form>
</div>
  					</div>
  				</div>
  			</div>
  		 </div>

  		<!--Footer Section  -->
  	
	<div style="text-align:padding:5px;background:#FAFAFA;border-bottom:1px solid #DADADA;">
  		<div class="row">
  			<div class="col-12 text-center"><strong>Designed and developed by :Kush Kumar soni copyright&copy;</strong>
  			</div>
  		</div>
  	</div>	
	<!-- javascrt file -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>