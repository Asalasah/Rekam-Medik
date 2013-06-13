
						<table border="1" bgcolor="#E9F9FF" cellpadding="5" cellspacing="0" align="center">
				<thead align="center" bgcolor="#90DEFC" >
					<tr>
						<td>NO</td>
						<td>Kode Pasien</td>
						<td>Nama</td>
						<td>Tanggal Lahir</td>
						<td>Alamat</td>
						<td>HP</td>
						<td>Keluhan</td>
						<td>Resep</td>
						<td>Opsi</td>
					</tr>
				</thead>
				<tbody>
				<?php
				$query = mysql_query("select * from pasien");
			 
				$no = 1;
				while ($data = mysql_fetch_array($query)) {
				?>
				<div style='margin=0 auto;'>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data['kodepasien']; ?></td>
						<td><?php echo $data['nama']; ?></td>
						<td><?php echo $data['tanggallahir']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td><?php echo $data['hp']; ?></td>
						<td><?php echo $data['keluhan']; ?></td>
						<td><?php echo $data['resep']; ?></td>
						<td> <a href="editpasien.php?id=<?php echo $data['kodepasien']; ?>">Edit</a> || <a onclick="return confirm('Kamu yakin ingin menghapusnya ?')" href="deletepasien.php?id=<?php echo $data['kodepasien']; ?>">Hapus</a> </td>
					</tr>
				</div>
				<?php
					$no++;
				}
				?>
				</tbody>
			</table> 