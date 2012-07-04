<?php
/*
 * Posts form data to MYSQL DB
 *
 * @author Colton Trautz <colton@sendpepper.com>
 *
 * 
 */
 
include 'config.php';

global $connect;

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST ['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$dbc=mysqli_connect($connect['host'],$connect['username'],$connect['password'],$connect['db'])or die("Error connecting to MySQL server.<br><br>" . mysqli_connect_error());
$query = "INSERT into users (firstname,lastname,email,username,password) VALUES ('$firstname','$lastname','$email','$username','$password')";

$result = mysqli_query($dbc, $query) or die("Error querying database." . mysqli_error());

mysqli_close($dbc);

header('Location: ../loginpage.html');