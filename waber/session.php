<?php


$connection = mysql_connect("localhost", "root", "");
// Selecting Database

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login'];

$ses_sql=mysql_query("SELECT username from users where username ='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); 
header('Location:index.php');
}
?>