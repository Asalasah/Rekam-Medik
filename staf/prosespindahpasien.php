<?php 
	include'db.php';  	 
	$kodepasien = $_POST['kodepasien'];
	$nama = $_POST['nama'];
	$tanggallahir = $_POST['tanggallahir'];
	$alamat = $_POST['alamat'];
	$hp = $_POST['hp']; 
	$keluhan = $_POST['keluhan']; 
	$resep = $_POST['resep'];  
	$status = $_POST['status'];  
		 
		$query = mysql_query("update pasien set nama='$nama', tanggallahir='$tanggallahir', alamat='$alamat', hp='$hp',keluhan='$resep',status='$status' where kodepasien='$kodepasien'") or die(mysql_error());
		if ($query) 
		{
			header('location:home.php?go=antri');
		} 
?>