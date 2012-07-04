<?php
/*
 * Checks access 1. Echo access level
 * Issue here is it fails if you have any access other than 1
 * @author Colton Trautz <colton@sendpepper.com>
 *
 * 
 */
 
session_start();

include 'includes/functions.php';

check_access(1);

echo "Your access levels: ";
for ($i=0;$i<5;$i++) {
    print_r($_SESSION['access'][$i]);
}