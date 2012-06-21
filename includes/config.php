/**
 * * Connects to MySQL Database 
 *
 * @author Colton Trautz <colton@sendpepper.com>
 *
 */

<?php

//Define vars
$host="http://localhost/~coltontrautz/phpMyAdmin"; // Host name 
$mysql_login="root"; // Host name 
$mysql_password="test123"; // Mysql password 
$db_name="userData"; // Database name 
$tbl_name="login"; // Table name 

// Connect to server and select database.

function authenticate ($username,$password) {
    
    $dbc=mysqli_connect('localhost','root','test123','userData')or die("Error connecting to MySQL server." . mysqli_connect_error());
    
    $query="SELECT * FROM login WHERE username='$username' and password='$password'";
    $result=mysqli_query($dbc, $query)or die("Error querying database");
    $row=mysqli_fetch_assoc($result);
    
    $_SESSION['access_level']=$row["access_level"];
    
    //keep count of matching records
    $count=mysqli_num_rows($result);
    
    return $count==1;
}

