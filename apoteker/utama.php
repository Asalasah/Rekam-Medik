
	<div class="laman-kiri">
		<img src="/rekammedik/gambar/apoteker.png"/>
	</div>
	<?php 
		include 'db.php'; 
		$query = mysql_query("select * from apoteker where id_apoteker='$username'");
		$data = mysql_fetch_array($query);
		
		$username=$_POST['id_apoteker'];
		$namalengkap=$_POST['namaapoteker'];
		$nohp=$_POST['nohp']; 
		$pasien=$_POST['pasien']; 
	?> 
	<div class="laman-kanan">
		<h1>Biodata  Apoteker</h1>
		<table align="left" >
			<tr><td>Kode Apotker</td><td>:</td><td><?php echo $data['id_apoteker'] ?></td></tr>   
			<tr><td>Nama Lengkap</td><td>:</td><td><?php echo $data['namaapoteker'] ?></td></tr>   
			<tr><td>No Hape</td><td>:</td><td><?php echo $data['nohp'] ?></td></tr>    
		</table>
	</div>
	<div align="center">
		<a href="home.php?go=antri">Lihat antrian pasien</a>
	</div>

