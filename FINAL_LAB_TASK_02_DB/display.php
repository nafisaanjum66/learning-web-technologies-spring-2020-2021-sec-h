<?php
session_start();
$conn = mysqli_connect('localhost', 'root' , '' , 'product_db');

	$sql = 'select * from products';
	$result = mysqli_query($conn, $sql);
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PROFILE PICTURE</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="">
	<fieldset>
		<legend>DISPLAY</legend>
		<table border="1" cellspacing="0">
			<tr>
				<td>id</td>
				<td>name</td>
				<td>profit</td>				
			</tr>
			<?php
			while ($row = mysqli_fetch_assoc($result))
			{
				
				$id = $row['id'];
				echo"<tr>
					<td>{$row['id']}</td>
					<td>{$row['name']}</td>
					<td>{$row['profit']}</td>
					<td>
						<a href='edit.php?id=$id'>EDIT</a> |
						<a href='delete.php?id=$id'>DELETE</a> 
					</td>
				</tr>";
			}
			?>
		</table>
		
	</fieldset>	
</form>
</body>
</html>