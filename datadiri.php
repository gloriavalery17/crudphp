<?php  
	include_once ('koneksi.php');

	$nama = $_POST ['nama'];
	$alamat = $_POST ['alamat'];
	$kelompok = $_POST ['kelompok'];

	echo $nama;
	echo $alamat;
	echo $kelompok;

	mysqli_query($koneksi,"INSERT INTO mahasiswa (nama,alamat) VALUES ('$nama', '$alamat','kelompok')");
