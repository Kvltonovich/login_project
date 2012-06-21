<?php

include 'config.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST ['email'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_close($dbc);

header('Location:../index.html');