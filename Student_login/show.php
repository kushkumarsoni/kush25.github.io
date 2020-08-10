<?php

include "database.php";
$selectdata=mysqli_query($con,"select * from login");


?>
<!Doctype html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
			<table border="1" style="border-collapse:collapse;" align="center">
				<thead style="background-color:blue;">
					<tr>
						<th>SR NO</th>
						<th>Name</th>
						<th>F'name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Gender</th>
						<th>Address</th>
						<th>Technology</th>
						<th>City</th>
						<th>Picture</th>
						<th>Date</th>
						<th>Delete</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$a=1;
					while($row=mysqli_fetch_array($selectdata))
					{
					?>
					<tr>
						<td><?php echo $a;?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['fname'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['password'];?></td>
						<td><?php echo $row['gender'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['technology'];?></td>
						<td><?php echo $row['city'];?></td>
						<td><img src="http://localhost/Student_login/upload/<?php echo $row['picture'];?>" height="50px" width="50px"/></td>
						<td><?php echo $row['date'];?></td>
						<td><a href="delete.php?<?php echo $row['sid'];?>">delete</a></td>
						<td><a href="edit.php?<?php echo $row['sid'];?>">edit</a></td>
					<tr>
					<?php
					$a++;
					}
					?>
				<tbody>
			</table>
	</body>
</html>