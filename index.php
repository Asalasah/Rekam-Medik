		<head>
			<title>Selamat datang</title>
			<LINK rel="stylesheet" TYPE="text/css" href="css.css">
			<!--link href='http://fonts.googleapis.com/css?family=Open+Sans:700italic,400' rel='stylesheet' type='text/css'/-->
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		</head>
		<div id='kepala'>
			<div id='salam' align='center'><b>Pusat Pelayanan Data Rekam Medik RS HMIF</b></div>
		</div>
		
		<div id='basabasi'>
			<div class='basa-basi'><b>
				disini untuk basa basi menjelaskan deskripsi dari fasilitas rekam medik yang ada disebuah rumah sakit
				sehingga nampak keren, tidak hambar dan kosong.. </b>
				<?php
						if (!empty($_GET['pesan']) && $_GET['pesan'] == 'gagal') 
						{
							echo "<div class='basa-basi' style='color:red'><b>Login gagal, silahkan ulangi kembali</b></div>";
						}
				?>
			</div>
		</div>

	<body>		
		<nav>
		<center>
			<div id="navigasi">
				<ul class="fancyNav">
					<li id="home"><a href="index.php?go=index" class="homeIcon">Beranda</a></li>
					<li id="news"><a href="index.php?go=about">Tentang Kami</a></li>
					<li id="about"><a href="index.php?go=call">Hubungi Kami</a></li>
					<li id="services"><a href="loginpasien.php">Pasien</a></li>
					<li id="contact"><a href="index.php?go=service">Layanan</a></li>
				</ul>
			</div>
		</center>
		</nav>
		
		<div id='badan'>
			<div id='wrapper'>
				<div id='mainbar'>
					<?php
						
						if($_GET[go]=='' || ($_GET[go]=='index'))
						{
							include"1.php";
						}
						else if($_GET[go]=='about')
						{
							include"about.php";
						}  
						else if($_GET[go]=='call')
						{
							include"contactus.php";
						}
						else if($_GET[go]=='service')
						{
							include"layanan.php";
						}
						
					?> 
				</div> 
			</div>
		</div>
		
		<div id='kaki'>
			<div class='kauskaki'>
				<p>by Kelompok 1: Ahmad A.A, M.Henrizal, Iin Athailah, Mahdar W.Putra, R.Phonna, Rabiatul, </p>
			</div>
		</div>
	</body>
