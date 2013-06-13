			<h3 align="center">Daftar Antrian Pasien Anda, Silahkan Obati</h1>
			<table border="1" bgcolor="#E9F9FF" cellpadding="5" cellspacing="0" align="center">
				<thead align="center" bgcolor="#90DEFC" >
					<tr>
						<td>NO</td> 
						<td>Nama</td>    
						<td>Resep</td>
						<td>Opsi</td>
					</tr>
				</thead>
				<tbody>
				<?php
				$query = mysql_query("select * from pasien  where status='apoteker'");
			 
				$no = 1;
				while ($data = mysql_fetch_array($query)) {
				?>
				<div style='margin=0 auto;'>
					<tr>
						<td><?php echo $no; ?></td> 
						<td><?php echo $data['nama']; ?></td>  
						<td><?php echo $data['resep']; ?></td>
						<td> <a href="reseppasien.php?id=<?php echo $data['kodepasien']; ?>">Beri obat</a> </td>
					</tr>
				</div>
				<?php
					$no++;
				}
				?>
				</tbody>
			</table> 
			<div align="center" style="margin-top:20px">
				<a href="home.php">Kembali</a>
			</div>