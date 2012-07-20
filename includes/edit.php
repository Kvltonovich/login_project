<?php 

include_once "connect.php";
include_once "functions.php";
include_once "controller.php";

session_start();

$query="SELECT * FROM login WHERE id = '$id' ";
$result=mysqli_query($dbc, $query)or die("Error querying database" . mysqli_connect_error());
$row = mysqli_fetch_assoc($result);

?>
 
<html> 
	<head> 
    	<link href="" type="text/css" rel="stylesheet"> 
	</head> 
<body> 
	<div align="center"> 
		<form method="post" action="update.php">
			<div>
				<input name="id" value="<?= $row['id'] ?>" type="hidden"/><br>
				First Name: <input name="firstname" value="<?= $row['firstname'] ?>" type="text"/><br>
				Last Name: <input type="text" name="lastname" value="<?= $row['lastname'] ?>"/><br>
				Email: <input type="text" name="email" value="<?= $row['email'] ?>"/><br>
				Username: <input type="text" name="username" value="<?= $row['username'] ?>"/><br>
				Password: <input type="password" name="password" value="<?= $row['password'] ?>"/><br>
				<input type="submit" class="submit" value="Change Contact">
			</div>
		</form>
		<a href="contacts.php">Go Back</a>
	</div> 
</body> 
</html>