<?php
session_start();

//check for appropriate access level. grant access or rediret to fail
function check_level ($level) { 
    if (strpos($_SESSION['access_level'],$level) !==false) {
        echo "You have access!";
    }
    else {
        header ('location: ../fail.html');
    }
}

