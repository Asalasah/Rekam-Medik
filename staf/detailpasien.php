<!DOCTYPE HTML>
<head>
			<title>Edit data pasien Oleh <?php echo $username; ?></title>
			<LINK rel="stylesheet" TYPE="text/css" href="/rekammedik/css.css">
			<link href="style.css" rel="stylesheet" type="text/css">
			<!--link href='http://fonts.googleapis.com/css?family=Open+Sans:700italic,400' rel='stylesheet' type='text/css'/-->
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
		
<div id="laman" style="height:1220px;padding:50px;margin-top:100px;">
<center>
<h3>Silahkan masukkan Riwayat pasien Terbaru</h3>
<?php
include('db.php');
$id = $_GET['id'];

$query = mysql_query("select * from pasien where kodepasien='$id'") or die(mysql_error());
$data = mysql_fetch_array($query);

//select data tabel dokter
$sql="select * from dokter";
$data2=mysql_query($sql);

?>
 
<form action="prosespindahpasien.php" method="post">
<input type="hidden" name="kodepasien" value="<?php echo $id; ?>" />
<table id="table1" border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Kode Pasien</td> <td>:</td> <td><input id="area" type="text" name="kodepasien"value="<?php echo $data['kodepasien']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Nama</td> <td>:</td> <td><input id="area" type="text" name="nama"  value="<?php echo $data['nama']; ?>" /></td>
        </tr>
		<tr>
        	<td>Tanggal Lahir</td> <td>:</td> <td><input id="area" name="tanggalalhir" value="<?php echo $data['tanggalalhir']; ?>" disabled /></td>
        </tr>
		<tr>
        	<td>Nomor HP</td> <td>:</td> <td><input id="area" type="text" name="hp"  value="<?php echo $data['hp']; ?>" /></td>
        </tr>
		<tr valign="top">
        	<td>Alamat</td> <td>:</td> <td><textarea id="area" name="alamat" cols="50" rows="4"><?php echo $data['alamat']; ?></textarea></td>
        </tr> 
    	<tr valign="top">
        	<td>Keluhan</td> <td>:</td><td><textarea id="area" name="keluhan" cols="50" rows="4" ><?php echo $data['keluhan'];?></textarea></td>
        </tr>
		<tr valign="top">
        	<td>Resep</td><td>:</td><td><textarea id="area" name="resep" cols="50" rows="4"><?php echo $data['resep']; ?></textarea></td>
        </tr> 
        
		<tr>
			<td>Pilih Dokter</td>
			<td>:</td>
			<td> 
				<select name="status" id="area"> 
				<option id="area" >-----Pilih dokter yang akan mengobati-----</option>
					<?php
					while($hasil=mysql_fetch_array($data2)) 
					{
					?>
						<option id="area" value="<?php echo $hasil['id_dokter']?>"><?php echo $hasil['id_dokter'];?></option>
					<?php
					};
					?>
			</td>
		</tr>
		
		<tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Kirim" /></td>
        </tr> 
		<tr>
        	<td><a href="home.php?go=antri">Kembali</a></td>
        </tr> 
    </tbody>
</table>
</form>
</center>
</div> 