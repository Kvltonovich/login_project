<?php
/*
 * Checks access level and boots to fail page if not found
 *
 * @author Colton Trautz <colton@sendpepper.com>
 *
 * 
 */
 session_start();

//check for appropriate access level. grant access and print access levels or rediret to fail
function check_level($access) {
    if (in_array($access,$_SESSION['access'])){
    }
    else {
        header("location: fail.html");
    }
}
