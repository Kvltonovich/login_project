<?php
/*
 * Connect to MYSQL DB
 *
 * @author Colton Trautz <colton@sendpepper.com>
 *
 * 
 */
 
$connect['host'] = "localhost";
$connect['username'] = "root";
$connect['password'] = "test123";
$connect['db'] = "userData";
$connect['login_table'] = "login";
$connect['perms_table'] = "perms";

//Sortable Database collection

$dbc = mysqli_connect(
		$connect['host'],
		$connect['username'],
		$connect['password'],
		$connect['db']
	) or die("Error connecting to MySQL server.1" . mysqli_connect_error() );