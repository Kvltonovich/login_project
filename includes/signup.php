<?php
/*
 * Posts form data to MYSQL DB
 * @author Colton Trautz <colton@sendpepper.com>
 *
 * 
 */
 
include 'connect.php';
include 'controller.php';

global $connect;

$dbc=mysqli_connect($connect['host'],$connect['username'],$connect['password'],$connect['db'])or die("Error connecting to MySQL server.<br><br>" . mysqli_connect_error());
$query = "INSERT into login (firstname,lastname,email,username,password) VALUES ('$firstname','$lastname','$email','$username','$password')";

$result = mysqli_query($dbc, $query) or die("Error querying database." . mysqli_error());

mysqli_close($dbc);

header('Location: ../includes/contacts.php');









