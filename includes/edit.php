<?php 
include_once "connect.php";
include_once "functions.php";
include_once "controller.php";

session_start(); 

$results = mysql_query("select * from login where username = '$username' AND password = '$password'"); 
$row = mysql_fetch_assoc($results); 
var_dump($results)

?> 

<html> 
<head> 
    <link href="" type="text/css" rel="stylesheet"> 
</head> 
<body> 

<div align="center"> 
<form method="post" action="signup.php">
	<div>
		<input type="text" name="firstname" placeholder="<?= $row['firstname'] ?>"><br>
		<input type="text" name="lastname" placeholder="<?= $row['lastname'] ?>"><br>
		<input type="text" name="email" placeholder="<?=$row['email']; ?>"><br>
		<input type="text" name="username" placeholder="<?=$row['username']; ?>"><br>
		<input type="password" name="password" placeholder="<?=$row['password']; ?>"><br>
		<input type="submit" class="submit" value="Change Contact">
	</div>
</form>

</div> 
</body> 
</html>



