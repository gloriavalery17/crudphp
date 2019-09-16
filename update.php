
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$kelompok= $_POST['kelompok'];

 
// update data ke database
mysqli_query($koneksi,"UPDATE PESERTA set nama ='$nama',no_hp='$no_hp',  alamat='$alamat', kelompok ='$kelompok' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>