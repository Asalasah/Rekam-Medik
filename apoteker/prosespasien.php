<?php
include('db.php');
 
//tangkap data dari form
$kodepasien = $_POST['kodepasien'];
$nama = $_POST['nama']; 
$hp = $_POST['hp']; 
$keluhan = $_POST['keluhan']; 
$resep = $_POST['resep']; 
$tanggalberobat = $_POST['tanggalberobat']; 
$status = "staf"; 
 
//update data di database sesuai NIP
$query = mysql_query("update pasien set nama='$name', tanggallahir='$tanggallahir', alamat='$alamat', hp='$hp', keluhan='$keluhan', resep='$resep',tanggalberobat='$tanggalberobat', status='$status' where kodepasien='$kodepasien'") or die(mysql_error());
 
if ($query) {
    header('location:home.php?pesan=resepselesai');
}
?>