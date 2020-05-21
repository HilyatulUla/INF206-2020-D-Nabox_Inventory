@extends("layouts.app")
<html>
<head>
	<title>Table Barang Dagangan</title>
</head>
<body>
	
	<a href="/menus/tambah"> + Tambah Barang Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Harga</th>
			<th>Jenis</th>
			<th>Gambar</th>
			<th>Jumlah </th>
		</tr>
		@foreach($menus as $m)
		<tr>
			<td>{{ $m->menus_nama }}</td>
			<td>{{ $m->menus_harga }}</td>
			<td>{{ $m->menus_jenis }}</td>
			<td>{{ $m->menus_gambar }}</td>
            <td>{{ $m->menus_jumlah }}</td>
			<td>
				<a href="/menus/edit/{{ $m->menus_id }}">Edit</a>
				|
				<a href="/menus/hapus/{{ $m->menus_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>