<?php 
/*fungsi script ini sama seperta yang ada pada file login.php cuma ini kebalikannya jika user 
	sudah login maka akan mengarah ke home.php dan jika belum maka akan kembali ke login.php */
	include'db.php';
	session_start(); 
	$username = $_SESSION['username']; 
	if (isset($username))
	{  
		  
		$nama=$_POST['nama'];
		$tanggallahir=$_POST['tanggallahir'];
		$hp=$_POST['hp']; 
		$alamat=$_POST['alamat']; 
		$keluhan=$_POST['keluhan'];  
		$tanggalberobat=$_POST['tanggalberobat'];  
		$status="staf"; 

		$query="insert into pasien values('','$nama','$tanggallahir','$alamat','$hp','$keluhan','','$tanggalberobat','$status')";
		$exe=mysql_query($query);
		if ($query) 
		{
			header('location:home.php?go=antri');
		}
  
	} 
	else 
	{  
		header ('location:index.php');  exit();  
	} 
?>