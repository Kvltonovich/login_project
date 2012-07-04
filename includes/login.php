<?php
/*
 * Authenticate username and password. Start session.
 *
 * @author Colton Trautz <colton@sendpepper.com>
 *
 * 
 */
include "functions.php";
include "connect.php";

 
session_start();

//Store username and password from post data
$username = $_POST["username"];
$password = $_POST["password"];

start ($username, $password);