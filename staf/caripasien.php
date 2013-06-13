<?php
include('db.php'); 
	session_start(); 
	$username = $_SESSION['username']; 
	if (isset($username))
	{
		$cari=$_POST["cari"];
		$jenis=$_POST["jenis"];
	?>
			  
			<head>
			<title>Data Pasien</title>
			</head>
			 
			<div id="dalam-halaman">
				<center>	
					<h3 style="">Hasil Pencarian pasien <?php echo"$jenis";?> <?php echo"'..$cari..'";?></h3>
						
							<?php
							
							
							if($jenis=="kodepasien")
							{
								$query ="select * from pasien where kodepasien like '%$cari%'";
							} 
							else if($jenis=="nama")
							{
								$query ="select * from pasien where nama like '%$cari%'";
							} 
							else if($jenis=="tanggalberobat")
							{
								$query ="select * from pasien where tanggalberobat like '%$cari%'"; 
							}
							$eksekusi=mysql_query($query);
							$rows=mysql_num_rows($eksekusi);
							if($rows==0) 
							{
								echo "<h2>Maaf, pasien yang Anda cari tidak ada</h2>";
							}
							else 
							{
								echo"
								<table style='margin-top:20px;' id='table1' align='center'>
								<thead align='center' bgcolor='#90DEFC' >
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
								<tbody>";
								$no = 1;
								while ($data = mysql_fetch_array($eksekusi)) 
								{
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
								echo"</table>";
							}; 
							?>
							</tbody>
						</table>
						
						<center>
							<a href="home.php?go=cari" class="tombol">Cari Pasien</a>
							<a href="home.php?go=input" class="tombol">Pendaftaran Pasien baru</a>
						</center>
					</center>
			</div> 
		<?php
		}
		else
		{  
			header ('location:index.php');  exit();  
		} 
		?>
		