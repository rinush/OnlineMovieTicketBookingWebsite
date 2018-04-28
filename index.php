<?php
require 'core.inc.php';
$db=mysqli_connect('localhost','root','','test');
if(loggedin())
{
	echo 'You are logged in'.'<a href="logout.php">Logout</a><br>';
	echo $_SESSION['user_id'];
}
else
{
 require 'login.php';	
}
?>
