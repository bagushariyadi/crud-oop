<!DOCTYPE html>
<html>
<head>
	<title>BELAJAR PHP CRUD OOP | Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<div class="container">
	<div id="merk">
		<h1>BELAJAR PHP CRUD OOP | login sebagai
		 <?php
			session_start();
			if ($_SESSION['level'] != "admin") {
				header("Location: login.php");
			}
		 	echo $_SESSION['level']; 
		 ?></h1>
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
<section id="tampilan">
	<div class="container">
		<h1>PROGRAMER</h1>
		<p>
			 “The best thing about a boolean is even if you are wrong, you are only off by a bit.”
		<p>	 
			“There are two ways to write error-free programs; only the third one works.” 
			<p>
				 “Your most unhappy customers are your greatest source of learning.”
		</p>
	</div>
</section>
<section id="baru">
	<div class="container">
		<h1>BELAJAR PHP CRUD OOP  ! </h1>
	</div>
</section>
<section id="boxes">
	<div class="container">
		<div class="box">
			<img src="img/admin.png">
			<h3>Admin</h3>
			<p>
				Admin adalah orang yang mengatur semua data yang ada disini. Kalau anda bukan Admin, jangan sok mau masukin data kesini, karena anda bukan siapa-siapa !!! 
			</p>
		
		</div>

		<div class="kotak">
			<img src="img/org3.png">
			<h3>CRUD OOP DASAR</h3>
			<p>
				Hai All ketemu lagi bersama saya Bagus Hariyadi, tutorial kali ini adalah Membuat CRUD mengunakan konsep OOP di PHP dengan tampilan Bootstrap, walaupun saya baru belajar konsep OOP di PHP saya ingin SHARE, barangkali aja bermanfaat.
			</p>
		</div>
		</div>
</section>
<footer>
	<p>
		<i>Belajar CRUD OOP, Copyright @2019</i>
	</p>
</footer>
</body>
</html>