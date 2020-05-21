<!DOCTYPE html>
<html>
<head>

</head>
<body>
 
	<h2> </h2>
	<h3>Data Pegawai</h3>
 
	<a href="/menus"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/menus/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama"> <br/>
		Harga <input type="number" name="harga"> <br/>
		Jenis <input type="text" name="jenis"> <br/>
		Gambar <input type="image" name="gambar"> <br/>
        Jumlah <input type="number" name="jumlah"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
		
 
 
</body>
</html>