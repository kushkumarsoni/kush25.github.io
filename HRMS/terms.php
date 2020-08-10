<?php
include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>::Terms and Policy::</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- javascrt file -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <style type="text/css">
  	.container{
  		height: 100%;
  		width: 100%;
  		border: 1px solid black;

  	}
  </style>

</head>
<body>
	<h1 style="text-align: center;">Add Terms and Policy</h1>
	<div class="container">

		<center>
			<form action="codeterms.php" method="post">
		Add<select name="add" style="margin-top:5px;">
			<option>--option--</option>
				<option>Terms</option>
				<option>Policy</option>
				<option>FAQ</option>
				<option>None</option>
			</select>
			<br><br>
			Titile<input type="text" name="title"/>
			<br><br>
			Description<textarea name="description">
				
			</textarea><br><br>
			<input type="submit" style="margin-bottom:5px;">
		</form>

		<table style="center" border="1px" style="border-collapse: collapse;">
			<thead>
			<tr>
				<th>#</th>
				<th>Adding</th>
				<th>title</th>
				<th>Description</th>
				<th>Date</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			</thead>
			<tbody>
				<?php 

				$query="select * from tbl_terms";
				$res=mysql_query($query);
				while($row=mysql_fetch_array($res))
				{
					?>
				<tr>
					<td><?php echo $row['term_id']; ?></td>
					<td><?php echo $row['adding']; ?></td>
					<td><?php echo $row['title'];?></td>
					<td><?php echo $row['description'];?></td>
					<td><?php echo $row['date'];?></td>
					<td><a href="edit.php">edit</a></td>
					<td><a href="delete.php">delete</a></td>
					</tr>
				
				<?php
				}
				
				?>
			</tbody>
		</table>
			</center>

	</div>
</body>
</html>