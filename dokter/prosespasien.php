<?php
include('db.php');
 
//tangkap data dari form 
$nama = $_POST['nama'];  
$keluhan = $_POST['keluhan']; 
$resep = $_POST['resep']; 
$tanggalberobat = $_POST['tanggalberobat']; 
$status = "apoteker"; 

$id = $_GET['username'];
$query = mysql_query("select * from pasien where status='$username'") or die(mysql_error());
$data = mysql_fetch_array($query);

$tanggallahir=$data['alamat'];
$hp=$data['hp'];
$kodepasien=$data['kodepasien'];
 
//update data di database sesuai NIP
$query = mysql_query("update pasien set nama='$name', tanggallahir='$tanggallahir', alamat='$alamat', hp='$hp', keluhan='$keluhan', resep='$resep', tanggalberobat='$tanggalberobat',status='$status' where kodepasien='$kodepasien'") or die(mysql_error());
 
if ($query) {
    header('location:home.php?pesan=obatiselesai');
}
?>