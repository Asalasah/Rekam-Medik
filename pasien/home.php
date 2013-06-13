<?php 
	/*fungsi script ini sama seperta yang ada pada file login.php cuma ini kebalikannya jika user 
	sudah login maka akan mengarah ke home.php dan jika belum maka akan kembali ke login.php */
	include'db.php';
	session_start(); 
	$username = $_SESSION['username']; 
	if (isset($username))
	{ 
?>
		<head>
			<title>Selamat datang ke perencanaan <?php echo $username; ?></title>
			<LINK rel="stylesheet" TYPE="text/css" href="css.css">
			<link href="style.css" rel="stylesheet" type="text/css">
			<!--link href='http://fonts.googleapis.com/css?family=Open+Sans:700italic,400' rel='stylesheet' type='text/css'/-->
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		</head>
		<div id='kepala'>
			<div id='salam' align='center'>Selamat Datang <?php echo $username; ?></div>
		</div>
		 
		<div id='badan'>
					<center>
						<div id="tabContainer">
							<div id="tabs">
							  <ul>
								<li id="tabHeader_1">Home</li>
								<li id="tabHeader_2">Kelola Pasien</li>
								<li id="tabHeader_3">Dokter</li>
							  </ul>
							</div>
							<div id="tabscontent">
							  <div class="tabpage" id="tabpage_1">
									<center> 
									<h3>Masih dalam Tahap Rekonstruksi :p Visit asalasah aja dulu :D</h3> 
									</center>
									<p>
										Selamat datang Dokter <?php echo $username; ?> :) berikut ini daftar rincian pasien yang akan berobat pada anda :D. Yoroshiku Onegaishimasu ^^
									</p>
									<?php
									if($_GET[panggil]=='')
									{
										include"list.php";
									}
									else if($_GET[panggil]=='kegiatan')
									{
										include"kegiatan.php";
									}
									
									?>
										
							  </div>
							  <div class="tabpage" id="tabpage_2">
								<h2>Staff</h2>
									<p>Jhakshajdhdulhadhu</p>
							  </div>
							  <div class="tabpage" id="tabpage_3">
								<h2>Dokter</h2>
								<p>Jhakshajdhdulhadhu</p>
							  </div>
							</div>
						  </div>
					<?php
							/*if($_GET[panggil]=='')
							{
								include"antrianpasien.php";
							}*/
							 
							
					?>
					<script src="tabs_old.js"></script> 
					<div><a href="logout.php">Logout</a></div>
					</center>
					 
				
		</div>
		
		
		
		<pre>
<?php 
	} 
	else 
	{  
		header ('location:logindokter.php');  exit();  
	} 
?>
