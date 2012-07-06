<?php
include_once "connect.php";
include_once "functions.php";
include_once "controller.php";

$query = "UPDATE login SET firstname = '$firstname' , lastname = '$lastname' , email = '$email' , username = '$username' , password = '$password'  WHERE id = '$id' ";
$result=mysqli_query($dbc, $query)or die("Error querying database" . mysqli_connect_error());
$row = mysqli_fetch_assoc($result);

header("location: ./contacts.php");