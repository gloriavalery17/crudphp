<!DOCTYPE html>
<html>
<head>
	<title>Tabel data diri </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
	<a href="formdatadiri.php"> +TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table class="table1">
		<tr>
			<th>Nama</th>
			<th>NO HP</th>
			<th>Alamat</th>
			<th>Nama Kelompok</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		
		$no = 1;
		$data = mysqli_query($koneksi,"select * from peserta");
		while($d= mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['no_hp']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['kelompok']; ?></td>
				<td>
					<a href="detail.php?id=<?php echo $d['id']; ?>"> DETAIL </a>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>