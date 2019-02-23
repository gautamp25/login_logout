<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='adminlogindb';

$con=mysql_connect($hostname,$username,$password);
$dbselect=mysql_select_db($dbname);
if(!$dbselect){
	die("Databse connection failed:".mysql_error());
}
?>