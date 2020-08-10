<?php
@$flg=$_REQUEST['flg'];
if($flg=='')
{
	echo "<script>alert('Data not inserted');</script>";
}
elseif($flg==1)
{
	echo "<script>alert('Data successfully inserted');</script>";
}
elseif($flg==2)
{
	echo "<script>alert('Please fill the text box');</script>";
}
?>
<!Doctype html>
<html lang="en-Us">
	<head>
		<meta charset="UTF-8"/>
		<style>
			#div1
			{
				height:50px;
				width:100%;
				background-color:#f1f1f1;
				justify-content:center;
				text-align:center;
			}
			#div2
			{
				height:100%;
				width:80%;
				background-color:orange;
				text-align:center;
				margin:0px auto;
			}
			.form-group
			{
				font-size:25px;
				margin-top:10px;
			}
			.form-group input
			{
				height:20px;
				width:30%;
				border-radius:10px;
				margin-bottom:5px;
			}
		</style>
	</head>
	<body>
	<div id="div1">
		<h1 style="color:red;">Student Registration System</h1>
	</div>
	<div id="div2">
		<div class="form-group">
		<form action="indexcode.php" method="post" enctype="multipart/form-data">
			Name:<input type="text" name="name"/>
			<br>
			F'name:<input type="text" name="fname"/>
			<br>
			Email:<input type="email" name="email"/>
			<br>
			Password:<input type="password" name="password"/>
			<br>
			</div>
			Gender:<input type="radio" name="gender" value="male" />Male
			<input type="radio" name="gender" value="female"/>Female
			<br><br>
			Address<textarea name="address" style="width:30%;border-radius:10px;resize:none;"></textarea>
			<br>
			Choose City:
			<select name="city" style="width:30%;border-radius:10px;resize:none;height:30px;">
				<option>--Select City--</option>
				<option>Basti</option>
				<option>Gorakhpur</option>
				<option>Santkabir Nagar</option>
				<option>Gonda</option>
			</select>
			<br>
			Choose Technology:
			<input type="checkbox" name="technology[]" value="java"/>Java
			<input type="checkbox" name="technology[]" value="javascript"/>JavaScript
			<input type="checkbox" name="technology[]" value="php"/>PHP
			<input type="checkbox" name="technology[]" value="android"/>Android
			<br><br>
			Choose Pic<input type="file" name="picture"/>
			<br></br>
			<input type="submit">
		</form><br></br>
		<a href="login.php" style="font-size:20px;">Signin</a>
	</div>
	</body>
</html>