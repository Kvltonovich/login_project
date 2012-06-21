<?php
/*
 * Authenticate username and password. Start session
 *
 * @author Steve Layman <slayman@sendpepper.com>
 *
 * @param str $username
 * @param str $password
 */

//is this a good way of restarting the session when someone logs in? Not sure if there's a better way to do this
session_destroy();
session_start();

include 'restriction.php';
include 'config.php'; 

//if unique user is located, start session
//problem is this runs regardless of whether or not a unique user is found. If I just type gibberish in the login page, $_SESSION['logged_in'] still gets set to yes
function start ($username,$password) {
    if (authenticate($username,$password,$login_id)) {
        $_SESSION['logged_in']=yes;
        
        header("location: 1.php");
        }
    
    else {
        echo "Wrong Username or Password.<br>";
    }
}