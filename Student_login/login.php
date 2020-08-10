<?php

@$flg=$_REQUEST['flg'];
if($flg==1)
{
	echo "<script>alert('Login unsuccessfull')</script>";
}

?>
<!Doctype html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8"/>
		<style>
			
		</style>
	</head>
	<body>
		<div style="text-align:center;font-size:25px;">
			<form action="logcode.php" method="post">
				email<input type="email" name="email"/>
				<br>
				Password<input type="password" name="password"/>
				<br>
				<input type="submit"/>
			</form>
		</div>
	</body>
</html>