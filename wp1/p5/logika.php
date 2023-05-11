<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LATIHAN SOAL</title>
	<link rel="stylesheet" href="http://elearning.bsi.ac.id/assets/css/bootstrap.min.css">
</head>
<body>
	<h1>BUKU TAMU </h1>
	<table class="table table -hover">
		<thead>
			<tr>
				<th>Komentar dan Saran Anda Sangat Kami Butuhkan Untuk Meningkatkan Kualitas Situs Kami</th>
			</tr>
		</thead>
		<tbody>
			<form method="POST" action="proseskomentar.php">
			<tr>
				<td>Nama Anda</td>
				<td> : </td>
				<td><input type="text" name="nama" size="10" required></td>
			</tr>
			<tr>
				<td>Email Anda</td>
				<td> : </td>
				<td><input type="text" name="email" size="10" required></td>
				Komentar Anda	:
						<textarea name="komentar">
						</textarea><br>
						<input type="submit" id="submit" name="submit" value="Kirim">
						<input type="submit" id="submit" name="submit" value="Batal">
					</form>
				</td>
			</tr>
		</tbody>
	<form method="POST" action="proseskomentar.php">
		Nama Anda		:
		<input type="text" name="nama" size="10" required><br>
		Email Anda		:
		<input type="text" name="email" size="10" required><br>
		Komentar Anda	:
		<textarea name="komentar">
		</textarea><br>
		<input type="submit" id="submit" name="submit" value="Kirim">
		<input type="submit" id="submit" name="submit" value="Batal">
	</form>
	<?php
	if (isset($_POST['nama'])) {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$komentar = $_POST['komentar'];

		echo "Nama Anda = $nama <br>";
		echo "Email Anda = $email <br>";
		echo "Komentar Anda = $komentar";
	}
	?>
</body>
</html>