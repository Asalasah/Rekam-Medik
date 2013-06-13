<div id="dalam-halaman">
<center><h2>Pendaftran Passien baru</h2></center>
<form action="prosestambahpasien.php" method="post">
<input type="hidden" name="kodepasien" value="<?php echo $id; ?>" />
<table id="table1" border="0" cellpadding="5" cellspacing="0" align="center">
    <tbody>
    	<tr>
        	<td>Kode Pasien</td> <td><input id="area" type="text" placeholder="kode pasien digenerate secara otomatis" name="kodepasien" disabled /></td>
        </tr>
    	<tr>
        	<td>Nama</td> <td><input id="area" type="text" name="nama" /></td>
        </tr>
		<tr>
        	<td>Tanggal Lahir</td> <td><input type="date" id="area" name="tanggalahir" /></td>
        </tr>
		<tr>
        	<td>Nomor HP</td> <td><input id="area" type="text" name="hp"/></td>
        </tr>
		<tr valign="top">
        	<td>Alamat</td> <td><textarea id="area" name="alamat" cols="50" rows="4"></textarea></td>
        </tr> 
    	<tr>
        	<td>Keluhan sakit</td> <td><input type="text" id="area" name="keluhan"/></td>
        </tr>
		<tr>
        	<td>Tanggal Berobat</td> <td><input type="text" id="area" name="tanggalberobat"/></td>
        </tr>
		<tr>
			<td>Submit</td><td><input type="submit" value="Submit"/></td>
		</tr>
	</tbody>
</table>
</div>