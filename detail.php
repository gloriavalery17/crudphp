<!DOCTYPE html>
<html>
<head>
	<title> DATA DIRI </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<br/>
	<br/>
  
	<?php
	include 'koneksi.php';

	$id = $_GET['id'];
	// $sql= "SELECT * FROM peserta WHERE id ='".$id."'";
  // select * from peserta where id = 'id'
	$biodata = mysqli_query($koneksi, "select * from peserta where id = '$id'");

  $data = mysqli_fetch_array($biodata);
  ?>
        <img class = "gambar" src="file/<?php echo $data['foto'];  ?>"/>
		<table class ="table1">
        
		<tr>
        <td> Nama </td>
		<td>
		<?php echo $data['nama']; ?>
		</td>
		</tr>
		<tr>
        <td> NO HP</td>
		<td>
		<?php echo $data['no_hp']; ?>
		</td>
		</tr>
		<tr>
		<td> Alamat </td>
		<td>
		<?php echo $data['alamat']; ?>
		</td>
		</tr>
		<tr>
        <td> Nama Kelompok </td>
		<td>
		<?php echo $data['kelompok']; ?>
		</td>
		</tr>
        
        

        
     


</body>
</html>