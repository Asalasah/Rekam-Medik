<?php 
	/*script ini berfungsi untuk mengecek apakah user sudah login atau belum, jika sudah maka akan mengarah ke home.php dan jika belum akan kembali ke login.php */ 
	 
	session_start(); 
	$username = $_SESSION['username']; 
	if (isset($username))
	{  
		header ('location:home.php'); 
	} 
	else 
	{ 
?>
	
	<head>
		<title>Login</title>
		<LINK rel="stylesheet" TYPE="text/css" href="css.css">
		<!--link href='http://fonts.googleapis.com/css?family=Open+Sans:700italic,400' rel='stylesheet' type='text/css'/-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<div id='badanlogin'>
		<div id='login'>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<legend>Login</legend>
			<form action="proseslogin.php" method="post">
			<div>Username :</div>
			<input type="text" name="username" />
			<div>Password :</div>
			<input type="password" name="password" />
			<input type="submit" value="Login" />
			<div><a href="register.php">register</a></div>
			</form>
			<pre>
		</div>
	</div>
<?php 
	} 
?>