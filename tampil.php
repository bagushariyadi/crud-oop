<?php 
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>
<html>
<head>
<title>>BELAJAR CRUD OOP PHP | Welcome</title>
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
<head>
	<h2 align="center">Tampil Data<br/>
					   Belajar OOP Dasar</h2>
</head>
<body>
<table border="0" align="center" cellpadding="1" cellspacing="0" width="800px">
<tr><td><a href="tambah_data.php"><input type="button" Value="Tambah Data"></a></td></tr>
</table>
<table border="1" align="center" cellpadding="1" cellspacing="0" width="800px">
		<thead id="tampilan">
		<tr>
		<tr align="center">
			<th scope="col">No</th>
			<th scope="col">Barang</th>
			<th scope="col">Stok</th>
			<th scope="col">Harga Beli</th>
			<th scope="col">Harga Jual</th>
			<th scope="col">Opsi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_barang as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_barang']; ?></td>
				<td><?php echo $row['stok']; ?></td>
				<td><?php echo $row['harga_beli']; ?></td>
				<td><?php echo $row['harga_jual']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id_barang']; ?>">Update</a>/
					<a href="proses_barang.php?action=delete&id=<?php echo $row['id_barang']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>