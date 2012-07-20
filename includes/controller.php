<?php

/*
 * Contains all controllers
 * @author Colton Trautz <colton@sendpepper.com>
 *
 * 
 */
include_once "connect.php";

//Stores signup form data
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST ["email"];
$id = $_POST["id"];

//Stores username and password from login form
$username = $_POST["username"];
$password = $_POST["password"];



