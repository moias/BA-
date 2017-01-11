<?php
session_start();
include('db_link.inc');
$error= "";
if(isset($_POST['submit'])) {
	if (empty($_POST["username"]) || empty($_POST["password"])) {
		$error="Username or Password is invalid<p>";
	}
else
{

//Define username and password
$username=$_POST['username'];
$password=$_POST['password'];
	

$hash=password_hash($password,PASSWORD_DEFAULT);	
$query=$connection->query("SELECT pwHash from user WHERE name='$username'");
$res=$query->fetch(PDO::FETCH_OBJ);



if(password_verify($password,$res->pwHash)){
$_SESSION["login_user"]=$username;
header("location: Suchfenster.php"); //Redirecting to other page
} else {
	$error="<p>Username oder Password is invalid</p>";
}
$connection=null; //closing connection
}} 
?>

