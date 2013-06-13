<head>
			<title>Selamat datang ke perencanaan <?php echo $username; ?></title>
			<LINK rel="stylesheet" TYPE="text/css" href="/rekammedik/css.css">
			<link href="style.css" rel="stylesheet" type="text/css">
			<!--link href='http://fonts.googleapis.com/css?family=Open+Sans:700italic,400' rel='stylesheet' type='text/css'/-->
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
		
<div id="laman" style="height:300px;padding:50px;margin-top:100px;">
<center>
<h3>Silahkan Racik obat pasien</h3>
<?php
include('db.php');
$id = $_GET['id'];

$query = mysql_query("select * from pasien where kodepasien='$id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="prosespasien.php" method="post">
<input type="hidden" name="kodepasien" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Kode Pasien</td>
        	<td>:</td>
        	<td><input disabled type="text" name="kodepasien" required="required" value="<?php echo $data['kodepasien']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Nama Pasien</td>
        	<td>:</td>
        	<td><input disabled type="text" name="nama" required="required" value="<?php echo $data['nama']; ?>" /></td>
        </tr>
		<tr>
        	<td>Tanggal lahir</td>
        	<td>:</td>
        	<td><input disabled type="text" name="tanggallahir" required="required" value="<?php echo $data['tanggallahir']; ?>" /></td>
        </tr>
		<tr>
        	<td>Alamat</td>
        	<td>:</td>
        	<td><input disabled type="text" name="alamat" required="required" value="<?php echo $data['alamat']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Keluhan</td>
        	<td>:</td>
        	<td><textarea disabled cols="50" rows="4" name="keluhan"><?php echo $data['keluhan']; ?></textarea></td>
        </tr>
		<tr>
        	<td>Resep</td>
        	<td>:</td>
        	<td><textarea disabled cols="50" rows="4" name="resep"><?php echo $data['resep']; ?></textarea></td>
        </tr> 
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Selesai dan Kirim Kembali ke staf" /></td> 
        </tr>
		<tr>
        	<td><a href="home.php?go=antri">Kembali</a></td>
        </tr> 
    </tbody>
</table>
</form>
</center>
</div>