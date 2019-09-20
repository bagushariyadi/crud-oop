<html>
<head>
		<title>Belajar OOP Dasar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<div class="container">
	<div id="merk">
		<h1>>BELAJAR CRUD OOP PHP</h1>
	</div>
	<nav>
		<ul>
			<li class="active"><a href="index.php">Home</a></li>
			<li><a href="tampil.php">Lihat Data</a></li>
			<span><a href="logout.php">Logout</a></span>
		</ul>
	</nav>
	</div>
</header>
<h2 align="center">Tambah Data</h2>
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