<?php
include('db.php');
 
//tangkap data dari form
$kodepasien = $_POST['kodepasien'];
$nama = $_POST['nama']; 
$keluhan = $_POST['keluhan']; 
$resep = $_POST['resep']; 
 
//update data di database sesuai NIP
$query = mysql_query("update pasien set '$nama','$tanggallahir','$alamat','$hp',$keluhan='keluhan',$resep='resep' where kodepasien='$kodepasien'") or die(mysql_error());
 
if ($query) {
    header('location:showpasien.php?message=success');
}
?>