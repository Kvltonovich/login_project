<?php

include_once  "connect.php";
include_once  "functions.php";
include_once  "controller.php";


function delete_contact($dbc, $username, $password){
	$query="DELETE FROM login WHERE username='$username' and password='$password'";
	$result=mysqli_query($dbc, $query)or die("Error querying database" . mysqli_connect_error());    
	header("location: ./contacts.php");
}

delete_contact($dbc, $username, $password);