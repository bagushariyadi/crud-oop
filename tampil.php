<?php include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>
<html>
<head>
	<div class="container">
<div class="card">
  <div class="card-body">
	<link rel="stylesheet" href='css/materialize.css' />
</head>
<body>
	<nav class="light-blue lighten-1" role="navigation">
		<div class="nav-wrapper container"><a id="logo-container" clas="brand-logo">BELAJAR CRUD OOP PHP</a>
			<ul class="right hide-on-med-and-down">
				<li><a class ="waves-effect waves-light btn" href="tambah_data.php">Tambah Data</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class ="mid-navigation-menu"></i></a>
		</div>
	</nav>

	<div class="container z-dpeth-2" style="min-height:580;">
		<div class="section">
		</table>
		<table align="center" border="1" width="800px" cellpadding="1" cellspacing="0" class="table">  
			<thead class="nav-light" style="background-color: #e3f2fd;">
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