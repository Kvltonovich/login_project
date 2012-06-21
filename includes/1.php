<?php

session_start();

include 'restriction.php';

check_level(1);

//Print access level
if ('access_level' == 1 ) {
	echo "Your Access Level is 1!";
} else if ('access_level' == 2 ) {
	echo  "Your Access Level is 2!";
} else if ('access_level' == 3 ) {
	echo  "Your Access Level is 3!";
} else if ('access_level' == 4 ) {
	echo  "Your Access Level is 4!";
} else if ('access_level' == 5 ) {
	echo  "Your Access Level is 5!";
}


//Could I do this instead of IF loop??
/*
printf ("%s (%s)\n", $row["access_level"]);
*/
