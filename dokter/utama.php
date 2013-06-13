<div id="dalam-halaman">
	<div class="laman-kiri">
		<img src="/rekammedik/gambar/dokter.png"/>
	</div>
	<?php 
		include 'db.php'; 
		$query = mysql_query("select * from dokter where id_dokter='$username'");
		$data = mysql_fetch_array($query);
		
		$username=$_POST['id_dokter'];
		$namalengkap=$_POST['namadokter'];
		$nohp=$_POST['nohp'];
		$spesialis=$_POST['spesialis'];
		$tangani_pasien=$_POST['tangani_pasien']; 
	?> 
	<div class="laman-kanan">
		<h1>Biodata  Dokter</h1>
		<table align="left" >
			<tr><td>Kode Dokter</td><td>:</td><td><?php echo $data['id_dokter'] ?></td></tr>   
			<tr><td>Nama Lengkap</td><td>:</td><td><?php echo $data['namadokter'] ?></td></tr>   
			<tr><td>No Hape</td><td>:</td><td><?php echo $data['nohp'] ?></td></tr>   
			<tr><td>Spesialis</td><td>:</td><td><?php echo $data['spesialis'] ?></td></tr>    
		</table>
	</div>
	<div align="center">
		<a href="home.php?go=antri">Lihat antrian pasien</a>
	</div>
</div>

