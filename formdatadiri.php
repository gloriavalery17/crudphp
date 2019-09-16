
<html>
<head>

</head>
<body>
 
	
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="POST" action="simpan.php" enctype="multipart/form-data">  
	<link rel="stylesheet" type="text/css" href="style.css">
	
		<table class ="table2">
			
			<tr>			
				<td class = "model2">Nama </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>			
				<td class = "model2">No Telpon</td>
				<td><input type="number_format" name="no_hp"></td>
			</tr>
			<tr>
				<td class = "model2">Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td class = "model2">Nama Kelompok </td>
				<td><input type="text" name="kelompok"></td>
			</tr>
			<tr>
				<td class = "model2">Foto </td>
				<td><input type="file" name="foto"></td>
			</tr>
			<tr>
				<td><input type="submit" value="simpan"></td>
			</tr>		
		</table>
	</form>
</body>
</html>