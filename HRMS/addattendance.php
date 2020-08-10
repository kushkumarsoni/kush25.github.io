<?php

// include the time-stamp file.
include "server_time/timestamp.php";

?>
<!Doctype html>
<!DOCTYPE html>
<html lang="en-Us">
<head>
	<title>::Add Addendance::</title>
	<style type="text/css">
		.container{
			height: auto;
			border:2px solid black;
			width: 100%;
			margin: 0px auto;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3>Add Attandence</h3>
		Today Date<input type="text" value="<?php  echo gdate();?>" style="background-color: powderblue" readonly><br><br>
		Choose Type:<select id="select_type" onchange="selectdepartment();">
			<option value="">--select--</option>
			<option value="dept">Department</option>
			<option value="indiv">Indivisual</option>
		</select>
		<br><br>

		<!-- Here a make a Department division -->
		<div id="div_department" style="display: none;">
		Choose Department:<select id="department">

			<option value="">--select--</option>
			<!-- Here we will generate options dynmically -->



		</select>
	</div>
		<!-- Here we  make a Department Division -->
	</div>
</body>
	

	<script>
		function selectdepartment()
		{
			var select_type=document.getElementById("select_type");
			var div_department=document.getElementById("div_department");
			var typeoption=select_type.value;
			//alert(typeoption);

			if(typeoption="dept")
			{
				div_department.style.display="block";
				var department=document.getElementById("department");
				$response="<option value=''>--select--</option>";
				department.innerHTML=$response+'<?php 

				echo "<option>HR</option>";


				?>';
			} 
			else
			{
				div_department.style.display="none";
			}
			
		}// end of function
	</script>



</html>