<?php
$db=mysqli_connect('localhost','root','','test');
$current_file= $_SERVER['SCRIPT_NAME'];
require 'core.inc.php';
if(!loggedin())
{
	header('Location: register_form.php');
}
else if(loggedin())
{
	echo header('Location: login.php');
}
?>

