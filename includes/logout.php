<?php
/*
 * Destroys current session
 *
 * @author Colton Trautz <colton@sendpepper.com>
 *
 * 
 */
 
session_start();
session_destroy();

header("location: ../signup.html");