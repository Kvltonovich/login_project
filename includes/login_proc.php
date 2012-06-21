<?php

session_start();

include 'login.php';

//Store username and password from post data
$username = $_POST["username"];
$password = $_POST["password"];

//Grab values for login_id from DB
while ($row = mysqli_fetch_assoc($result) {
	$_SESSION['access_level'][]
}

start($username,$password);

if ($_SESSION['logged_in']=yes) {
    echo "win!<br>";
    echo $_SESSION['logged_in'] . "<br>";
    echo $_SESSION['access_level'];
}
else {
    echo "epic fail";
}
