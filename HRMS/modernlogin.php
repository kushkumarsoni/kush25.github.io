<?php
//session_start();
 //@$flg=$_REQUEST['flg']; 


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
        body{
        	background-image: url('images/effect2.png');
        	background-repeat: no-repeat;
        }
        .head{
        	height: 120px;
        	width: 100%;
        	background-color: #FAFAFA;
        	text-align: center;
        	border:1px solid #DADADA;
        }
        .jumbotron{
        	background-color:#FAFAFA;
        	border-radius: 25px;
        	border:1px solid #DADADA;
        }
      </style>


    </head>
<body>
	     <!-- header Section -->

	   <div class="container-fluid">
	   		<div class="row">
	   			<div class="head">
	   				<a href="index.php"><img src="images/kk.png" alt="Human Resource Management System" height="110px" width="300px" style="text-align: center;"></a>
	   			</div>
	   		</div><br><br>
	   			
		   		<div class="row" id="jumbo">
		   			<div class="col-sm-3"></div>
			   			<div class="col-sm-6">
			   				<div class="jumbotron">
			   					<h2 style="color: #e57817;">Login</h2><br>
			   						<form action="" method="">
									    <div class="form-group">
										    <select name="who" class="custom-select mb-3">
										      <option value="">who are you</option>
										      <option>admin</option>
										      <option>employee</option>
										     </select>
									 	</div>
									 	<div class="form-group">
									      <label for="email">Email:</label>
									      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" id="email">
									    </div>
									    <div class="form-group">
									      <label for="password">Password:</label>
									      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" id="password">
									    </div>
									    <div class="form-group">
									    	<button type="submit" class="btn  ml-3" name="submit" style="background-color: #e57817;color: white;" id="submit">	Submit</button>
										</div>
			  					</form>
			   			</div>
			   				</div>
		   			<div class="col-sm-3"></div>
		   		</div>
		   			<div class="row" style="background-color:#FAFAFA;min-height: 50px;">
			  			<div class="col-12 text-center mt-3"><strong style="color:black;">Designed and developed by :Kush Kumar soni copyright&copy;</strong>
			  			</div>
			  		</div>	
		</div>    


	<!-- javascrt file -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>