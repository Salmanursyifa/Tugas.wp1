<form method="POST">
	<input type="text" name="angka">
	<input type="submit" name="submit" value="proses">
</form>
<?php 
	if (isset($_POST['proses'])) {
		$angka = $_POST['angka'];

		if ($angka < 6.3) {
			$warna = 'yellow';
		}elseif($angka >= 7.3){
			$warna ='green';
		}else{
			$warna = 'red';
		}

	echo "<div style='background: $warna'>;
				Angka = $angka
				</div>";
	}			
?>