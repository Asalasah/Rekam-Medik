<center>
<h2>Cari Data Pasien</h2>
<form action="caripasien.php" method="POST">
					<table>
						<tr>
							<td><input id="area" type='input' required='required' name="cari" size="40" placeholder="Masukkan kata kunci pencarian..."/></td>
						<tr><td><input type="radio" name="jenis" value="kodepasien">Kode Pasien</td></tr>
						<tr><td><input type="radio" name="jenis" checked="yes" value="nama">Nama Pasien</td></tr>
						<tr><td><input type="radio" name="jenis" value="tanggalberobat">Tanggal berobat</td></tr>
						<tr><td align="center"><input type="submit" value="Cari"> </td></tr>
						</tr>
					</table>
				</form>
</center>