<?php

function delete_contact($username, $password){
	$query="DELETE FROM login WHERE username='$username' and password='$password'";
	$result=mysqli_query($dbc, $query)or die("Error querying database" . mysqli_connect_error());    
	header("location: ./contacts.php");
}

