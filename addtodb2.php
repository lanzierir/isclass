<?php
require 'pdo.php';
$value = $_GET['first_name'];
$value2 = $_GET['last_name'];
$value3 = $_GET['email'];
$value4 = $_GET['phone_number'];
$value5 = $_GET['gender'];
$value6 = $_GET['birthday'];
$value7 = $_GET['password'];
$sql = "select * from accounts where email='$value3'";
$results = runQuery($sql);
if(count($results) > 0)
{
	header("Location: exists.php");
}else{
$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) values ('$value2','$value3','$value4','$value5','$value6', '$value7', '$value8')";
$j = runQuery($sql);
header("Location: login.php");
}
?>