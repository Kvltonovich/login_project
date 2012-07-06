<?php
/*
 * Issue here is it fails if you have any access other than 1
 * @author Colton Trautz <colton@sendpepper.com>
 *
 * 
 */

//Restriction
function check_level($access) {
    if (in_array($access,$_SESSION['access'])){
    }
    else {
        header("location: fail.html");
    }
}

//query db for row matching username and password
function authenticate($username,$password) {
    global $connect;
    
    $dbc=mysqli_connect($connect['host'],$connect['username'],$connect['password'],$connect['db'])or die("Error connecting to MySQL server.1" . mysqli_connect_error());
    
    $query="SELECT * FROM login WHERE username='$username' and password='$password'";

    $result=mysqli_query($dbc, $query)or die("Error querying database" . mysqli_connect_error());
    
    $row=mysqli_fetch_assoc($result);
    
    $_SESSION['id']=$row["id"];
    $_SESSION['firstname'] = $row['firstname'];
    
    //keep count of matching records
    $count=mysqli_num_rows($result);
    
    mysqli_close($dbc);
    
    return $count==1;
}

//pull access levels from perms table and set session access level
function get_perms($id) {
    global $connect;
    
    $dbc=mysqli_connect($connect['host'],$connect['username'],$connect['password'],$connect['db'])or die("Error connecting to MySQL server." . mysqli_connect_error());
    
    $query="SELECT * FROM perms WHERE id='$id'";
    $result=mysqli_query($dbc, $query)or die("Error querying database" . mysqli_connect_error());
    
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['access'][]=$row['access'];
    }
    
    mysqli_close($dbc);
}

//if unique user is located, start session
function start ($username,$password) {
    //reset session vars on new login
    session_unset();
    
    if (authenticate($username,$password)) {
        $_SESSION['logged_in']=yes;
        get_perms($_SESSION['id']);
        header("location: ./contacts.php");
        }
    
    else {
        echo '<p>Wrong Username or Password.</p><a href="login.html>Try again</a></body></html>';
    }
}

