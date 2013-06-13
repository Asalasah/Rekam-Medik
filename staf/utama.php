<div id="dalam-halaman">
	<div class="laman-kiri">
		<img src="/rekammedik/gambar/staf.png"/>
	</div> 
	<?php 
		include 'db.php'; 
		$query = mysql_query("select * from staf where id_staf='$username'");
		$data = mysql_fetch_array($query);
		
		$username=$_POST['id_staf'];
		$namalengkap=$_POST['namastaf'];
		$nohp=$_POST['nohp'];  
	?> 
	
	<div class="laman-kanan">
		<center><h1>Biodata  Staf</h1></center>
		<table border="0">
			<tr><td cols="40">Nama</td><td width="50px">:</td><td><?php echo $data['namastaf']?></td></tr>
			<tr><td cols="40">ID Staf</td><td width="50px">:</td><td><?php echo $data['id_staf']?></td></tr> 
			<tr><td cols="40">No HP</td><td width="50px">:</td><td><?php echo $data['nohp']?></td></tr>
		</table>
	</div>
	
	<center>
		<a href="home.php?go=cari" class="tombol">Cari Pasien</a>
		<a href="home.php?go=input" class="tombol">Pendaftaran Pasien baru</a>
	</center>
</div>
