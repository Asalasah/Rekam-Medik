		<div id="dalam-halaman">
		<center>	
		<h2>Data Lengkap Pasien</h2>
			<table id="table1" border="1" bgcolor="#E9F9FF" cellpadding="5" cellspacing="0" align="center">
				<thead align="center" bgcolor="#90DEFC" >
					<tr>
						<td>NO</td> 
						<td>kodepasien</td> 
						<td>Nama</td>   
						<td>Tanggal Lahir</td>   
						<td>No HP</td>
						<td>Alamat</td>
						<td>Opsi</td>
					</tr>
				</thead>
				<tbody>
				<?php
				$query = mysql_query("select * from pasien where status='staf'");
			 
				$no = 1;
				while ($data = mysql_fetch_array($query)) {
				?>
				<div style='margin=0 auto;'>
					<tr>
						<td><?php echo $no; ?></td> 
						<td><?php echo $data['kodepasien']; ?></td> 
						<td><?php echo $data['nama']; ?></td> 
						<td><?php echo $data['tanggallahir']; ?></td> 
						<td><?php echo $data['hp']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td> <a href="detailpasien.php?id=<?php echo $data['kodepasien']; ?>">Detail</a> </td>
					</tr>
				</div>
				<?php
					$no++;
				}
				?>
				</tbody>
			</table> 
				<div style="margin-top:30px;"><a href="laporanRM.php" class="tombol">Cetak PDF</a></div>
			<div style="margin-top:30px; width:400px;">
				<div style="float:left" ><a href="home.php?go=input" class="tombol">Pendaftaran Pasien baru</a></div>
				<div style="float:right" ><a href="home.php?go=input" class="tombol">Cari pasein</a></div>
			</div>
		</center>
		</div>