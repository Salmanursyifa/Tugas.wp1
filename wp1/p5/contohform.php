<!	DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contoh Form</title>
</head>
<body>
	<form method="POST" action="proses.php">
		Masukan Nama :
			<input type="text" id="nama" name="nama" size="10" required><br>
		
		Alamat :
		<textarea name="alamat" required>
		</textarea><br>

		<input type="submit" id="submit" name="submit" value="proses">
	</form>
	<?php
	if (isset($_POST['nama'])) {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];

		echo "Nama = $nama <br>";
		echo "Alamat = $alamat";
	}
	?>
</body>
</html>