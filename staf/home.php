<?php 
	/*fungsi script ini sama seperta yang ada pada file login.php cuma ini kebalikannya jika user 
	sudah login maka akan mengarah ke home.php dan jika belum maka akan kembali ke login.php */
	include('db.php'); 
	session_start(); 
	$username = $_SESSION['username']; 
	if (isset($username))
	{ 
?>
		<head>
			<title>Selamat datang <?php echo $username; ?></title>
			<LINK rel="stylesheet" TYPE="text/css" href="/rekammedik/css.css">
			<link href="style.css" rel="stylesheet" type="text/css">
			<!--link href='http://fonts.googleapis.com/css?family=Open+Sans:700italic,400' rel='stylesheet' type='text/css'/-->
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		</head>
		<div id='kepala'>
			<div id='salam' align='center'>Selamat Datang <?php echo $username; ?></div>
		</div>
		 
		<div id='badan'> 
		<?php include"navigasi.html"; ?>
			<div id="laman">
				<div id="dalam-halaman">
						
					<?php
						
						if($_GET[go]=='' || ($_GET[go]=='home'))
						{
							include"utama.php";
						}
						else if($_GET[go]=='antri')
						{
							include"list.php";
						}  
						else if($_GET[go]=='antri')
						{
							include"list.php";
						}
						else if($_GET[go]=='cari')
						{
							include"searchpasien.php";
						}
						else if($_GET[go]=='input')
						{
							include"inputpasien.php";
						}
						
						
					?> 
					 
				</div>	
			</div>	
		</div>
		
		
		
		<pre>
<?php 
	} 
	else 
	{  
		header ('location:logindokter.php');  exit();  
	} 
?>
