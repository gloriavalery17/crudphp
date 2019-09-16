<?php

include 'koneksi.php';
 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$kelompok = $_POST['kelompok'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "file/".$fotobaru;

if(move_uploaded_file($tmp, $path)) {
	  $query = "INSERT INTO peserta values(' ', '$nama','$no_hp', '$alamat' , '$kelompok','$fotobaru')";
	  $sql = mysqli_query($koneksi, $query);

	  if($sql){
	  	 header("location: index.php");
	  	   }
	  	   else{    
	  	   // Jika Gagal, Lakukan :    
	  	   echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";  
	  	}
	  }else{  
	  	   // Jika gambar gagal diupload, Lakukan :  
	  	   	echo "Maaf, Gambar gagal untuk diupload.";  
	  	   	echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	  	   }
$succes = mysqli_query($koneksi,"INSERT INTO peserta values(' ', '$nama','$no_hp', '$alamat' , '$kelompok','$fotobaru')");


if($succes){
    header('location: index.php');
}else{
    echo mysqli_error($koneksi);
}

mysqli_close($koneksi);

// header("location:index.php");
 
?>