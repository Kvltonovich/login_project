<?php
/*
 * Checks level 2. Echo access level
 *
 * @author Colton Trautz <colton@sendpepper.com>
 *
 */
 
session_start();

include_once 'includes/restriction.php';

check_level(2);
