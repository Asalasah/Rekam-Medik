<!doctype html>
<?php 
	/*script ini berfungsi untuk mengecek apakah user sudah login atau belum, jika sudah maka akan mengarah ke home.php dan jika belum akan kembali ke login.php */ 
	 
	$username = $_SESSION['username']; 
	if (isset($username))
	{  
		header ('location:home.php'); 
	} 
	else 
	{ 
?>
		<head>
			<title>Selamat datang ke perencanaan <?php echo $username; ?></title>
			<LINK rel="stylesheet" TYPE="text/css" href="css.css">
			<!--link href='http://fonts.googleapis.com/css?family=Open+Sans:700italic,400' rel='stylesheet' type='text/css'/-->
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		</head>
		<div id='kepala'>
			<div id='salam' align='center'>Silahkan Login</div>
		</div> 

<body>		
		<div id='badan'>
			<div id='wrapper' style='width:700px'>
				<div id='mainbar' style='width:700px'>
					<div id='fotologin'> 
                    	<img src='/rekammedik/gambar/apotekercewek.png'/>
					</div> 
					<div id='tempatlogin'>
                    	<center>
						<form action="prosesloginapoteker.php" method="post">
						<table id='tabelx'>
							<tr><td>Username </td><td>: </td><td><input type="text" name="username" /></td></tr>
							<tr><td>Password </td><td>: </td><td><input type="password" name="password" /></td></tr>
							<tr><td><input type="submit" value="Login" /></td><td><input type="submit" value="cancel" /></td></tr>
						</table>	 
						</form>
					</center> 
					<a href='index.php'><p class='tulisan' style='font-family:arial;padding:5px;font-size:11px;margin-left:70px' >Kembali</p></a> 
                    </div>
				</div> 
			</div>
		</div>
		
		<div id='kaki'>
			<div class='kauskaki'>
				<p>by Kelompok 1</p>
			</div>
		</div>
	</body>
	<?php 
	} 
?>
</html>