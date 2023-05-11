<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tampilan Output</title>
</head>
<body>
	<h1 align="center">HASIL HITUNG RUMUS</h1>
	<?php 
		$Nilai1 = $_POST['nilai1'];
		$Nilai2 = $_POST['nilai2'];
		$Jnsbangun = $_POST['jnsbangun'];

		if (($Nilai1) && ($Nilai2) == 0) {
			$hasil = 'Tidak Ada Hasil Perhitungan';
		}
		else {
			if ($Jnsbangun == "Segitiga") {
				$hasil = (1/2*($Nilai1*$Nilai2));
				}
			else
				{
				$hasil = ($Nilai1*$Nilai2);
				}
		}
	?>

	<table>
		<tr>
			<td>Nilai 1 = <?php echo "$Nilai1"; ?></td>
		</tr>
		<tr>
			<td>Nilai 2 = <?php echo "$Nilai2"; ?></td>
		</tr>
		<tr>
			<td>Jenis Bangun Yang Dipilih = <?php echo "$Jnsbangun" ?></td>
		</tr>
		<tr>
			<td>Hasil perhitungan rumus = <?php echo "$hasil" ?></td>
		</tr>
	</table>
	<a href="tugas 4.php"></a>

</body>
</html>