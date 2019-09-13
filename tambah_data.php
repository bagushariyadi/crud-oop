<html>
<head>
	<div class="container">
<div class="card">
  <div class="card-body">
	<hr>
	<h1 align="center">BELAJAR CRUD OOP PHP</h1>
</head>
<body>
<h3>Tambah Data Barang</h3>
<hr/>
<form method="post" action="proses_barang.php?action=add">
<table>
	<tr>
		<td>Nama Barang</td>
		<td><input type="text" name="nama_barang" class="form-control" aria-describedby="basic-addon1"></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td><input type="text" name="stok" class="form-control" aria-describedby="basic-addon1"></td>
	</tr>
	<tr>
		<td>Harga Beli</td>
		<td><input type="text" name="harga_beli" class="form-control" aria-describedby="basic-addon1"></td>
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td><input type="text" name="harga_jual" class="form-control" aria-describedby="basic-addon1"></td>
	</tr>
	<tr>
		<td></td>
	<td><input type="submit" class="btn btn-info btn-pill my-2" value="Simpan" /></td>
	</tr>
</table>
</div>
</div>
</div>
</form>
</body>
</html>