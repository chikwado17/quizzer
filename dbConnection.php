<?php
//all the variables defined here are accessible in all the files that include this one
$db_url='localhost:3306';
$db_user='root';
$db_password='singh';
$db_name='quiz';
$con= new mysqli($db_url,$db_user,$db_password,$db_name)or die("Could not connect to mysql".mysqli_error($con));

?>