<?php 	
include('koneksi.php');
$db = new database();
$id_barang = $_GET['id'];
if(! is_null($id_barang))
{
	$data_barang = $db->get_by_id($id_barang);
}
else
{
	header('location:tampil.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Belajar OOP Dasar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<div class="container">
	<div id="merk">
		<h1>BELAJAR CRUD OOP PHP</h1>
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
<h3>Update Data Barang</h3>
<hr/>
<form method="post" action="proses_barang.php?action=update">
<input type="hidden" name="id_barang" value="<?php echo $data_barang['id_barang']; ?>"/>
<table>
	<tr>
		<td>Nama Barang</td>
		<td>:</td>
		<td><input type="text" name="nama_barang" value="<?php echo $data_barang['nama_barang']; ?>"/></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td>:</td>
		<td><input type="text" name="stok" value="<?php echo $data_barang['stok']; ?>"/></td>
	</tr>
	<tr>
		<td>Harga Beli</td>
		<td>:</td>
		<td><input type="text" name="harga_beli" value="<?php echo $data_barang['harga_beli']; ?>"/></td>
	</tr>
	<tr>
		<td>Harga Jual</td>
		<td>:</td>
		<td><input type="text" name="harga_jual" value="<?php echo $data_barang['harga_jual']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>