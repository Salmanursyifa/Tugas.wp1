<?php 
	
	//Input
	$nilai		= 50;
	$keterangan = '';

	//Proses
	if ($nilai <= 0) {
		$keterangan = "Nilai tidak bisa diproses";
	}elseif ($nilai >= 60) {
		$keterangan = "Lulus";
	}else{
		$keterangan = "Tidak Lulus";
	}


	//Output
	echo "Nilai Anda = $nilai Dengan Keterangan = $keterangan";
?>