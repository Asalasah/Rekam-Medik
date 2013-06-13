<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "rekammedik";
 
mysql_connect ($host, $user, $pass) or die ("Tidak bisa konek dengan database".mysql_error);
mysql_select_db ($dbname) or die ("Gagal membuka database".mysql_error);
?>