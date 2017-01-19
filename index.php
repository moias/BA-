<!DOCTYPE html>

<?php
header("Content-Type: text/html; charset=utf8"); 
include("login.php");

if (isset($_SESSION["login_user"])){
	//unset($_SESSION["login_user"]);
	header("location: Suchfenster.php");
	

}

?>
<html>
<head>
	<title>Login in PHP with session </title>
	<meta  content="text/html; charset=utf8" /> <!---UTF8 Codierung?-->
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
<div id="login_main" align="center">
<h1>Login </h1>
<?php
//echo session_id();
?>

<div id='login'>

	<form action=''  method='post'>
		
		<label>UserName:</label>
		<input id='name' name='username' placeholder='username' type='text'>

		<label>Password: </label>
		<input id='password' name='password'  placeholder="**********" type='password'>

		<input name='submit' type='submit' value='einloggen'>

		<span><?php echo $error; ?></span>
	</form>
</div>
</div>
</body>
</html>