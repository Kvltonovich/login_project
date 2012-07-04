<?php
/*
 * Authenticate username and password. Start session.
 *
 * @author Colton Trautz <colton@sendpepper.com>
 *
 * 
 */
include "functions.php";
include "controller.php";
include "connect.php";
 
session_start();

start ($username, $password);