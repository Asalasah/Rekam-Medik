<?php 
include "db.php"; 

	$username=$_POST['username']; 
	$password=$_POST['password']; 
	session_start();

	// To protect MySQL injection (more detail about MySQL injection)
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = md5($password);
	$sql="SELECT * FROM akun WHERE username='$username' and password='$password'";
	$result=mysql_query($sql);
	
	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);  
	// If result matched $username and $password, table row must be 1 row
	if($count==1)
	{ 
		// Register $username, $password and redirect to file "login_success.php"
		//session_register("username");
		//session_register("password"); 
		$_SESSION['username'] = $username;
		header("location:dokter/home.php");
	}
	else 
	{
		header('location:index.php?pesan=gagal');
	}
?>
 
