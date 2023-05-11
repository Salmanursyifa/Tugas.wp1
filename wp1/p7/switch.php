<?php 
	$angka = '8';
	$terbilang = '';

	switch ($angka){
		case 0:
			$terbilang = 'Nol';
			break;
		case 1:
			$terbilang = 'Satu';
			break;
		case 2:
			$terbilang = 'Dua';
			break;
		case 3:
			$terbilang = 'Tiga';
			break;
		case 4:
			$terbilang = 'Empat';
			break;
		case 5:
			$terbilang = 'Lima';
			break;
		case 6:
			$terbilang = 'Enam';
			break;
		case 7:
			$terbilang = 'Tujuh';
			break;
		case 8:
			$terbilang = 'Delapan';
			break;
		case 9:
			$terbilang = 'Sembilan';
			break;
		default: 
			$terbilang = 'Salah Input';
			break;
	} echo "Angka = $angka Terbilang = $terbilang"
	?>