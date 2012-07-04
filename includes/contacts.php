<?php
/*
 * Checks Login status. Has Simple Form. Display a list of contacts + Header
 *
 * @author Colton Trautz <colton@sendpepper.com>
 *
 */
include "functions.php";
include "connect.php";
 
session_start();

//checks login status
check_level(1);
 
//simple contact creation form
?>

<h3>Quick-Add Contacts</h3>
<form method="post" action="includes/signup.php">
            <input type="text" name="firstname" placeholder="First Name"><br>
            <input type="text" name="lastname" placeholder="Last Name"><br>
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" class="submit" value="Add Contact">
        </form>

<h1>Contacts</h1>

<?php
//Sortable Database collection
$dbc=mysqli_connect($connect['host'],$connect['username'],$connect['password'],$connect['db'])or die("Error connecting to MySQL server.1" . mysqli_connect_error());


//ascend/descend
switch($_GET['by']){
  case 'firstname':
  case 'lastname':
  case 'email':
  case 'username':
  case 'password':
    $by = $_GET['by'];
  break;
  default:
    $by = 'email';
  break;
}
$order = ($_GET['order']=='ASC')?'ASC':'DESC';

$query="SELECT * FROM login ORDER BY $by $order";
$result=mysqli_query($dbc, $query)or die("Error querying database" . mysqli_connect_error());

// then add sorting options
echo "<table border='1'><tbody>
<tr>\n";
if($by == 'firstname' && $order == 'ASC')
  echo '<th><a href="?by=firstname&amp;order=DESC">First Name</th>';
else
  echo '<th><a href="?by=firstname&amp;order=ASC">First Name</th>';
if($by == 'lastname' && $order == 'ASC')
  echo '<th><a href="?by=lastname&amp;order=DESC">Last Name</th>';
else
  echo '<th><a href="?by=lastname&amp;order=ASC">Last Name</th>';
if($by == 'email' && $order == 'ASC')
  echo '<th><a href="?by=email&amp;order=DESC">Email</th>';
else
  echo '<th><a href="?by=email&amp;order=ASC">Email</th>';
if($by == 'username' && $order == 'ASC')
  echo '<th><a href="?by=username&amp;order=DESC">Username</th>';
else
  echo '<th><a href="?by=username&amp;order=ASC">Username</th>';
if($by == 'password' && $order == 'ASC')
  echo '<th><a href="?by=password&amp;order=DESC">Password</th>';
else
  echo '<th><a href="?by=password&amp;order=ASC">Password</th>';



// all done now.
echo '</tr>';


while($row = mysqli_fetch_assoc($result)) {
  ?>
  
<tr>
<td> <?= $row['firstname'] ?></td>
<td> <?= $row['lastname'] ?> </td>
<td> <?= $row['email'] ?></td>
<td> <?= $row['username'] ?></td>
<td> <?= $row['password'] ?></td>
  </tr>;
  <?php
  }
echo "</table>";

