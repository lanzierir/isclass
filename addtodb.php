<?php
require 'db.php';
$value3 = $_POST['reg_uname'];
$value7 = $_POST['reg_password'];
$sql = "select * from accounts where email='$value2' and password='$value8'";
$results = runQuery($sql);
if(count($results) > 0)
{
	$fname = $results[0]['fname'];
	$lname = $results[0]['lname'];
	header("Location: success.php?fname=$fname&lname=$lname");
}else{
	header("Location: fail.php");
}
?>