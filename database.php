<?php
session_start();
$Dbhost='localhost';
$Dbusername='root';
$Dbpassword='';
$Dbname='hobby';
$conn=mysqli_connect($Dbhost,$Dbusername,$Dbpassword,$Dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>