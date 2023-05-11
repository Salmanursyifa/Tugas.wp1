<html>
<head>
	<title>Menghitung luas lingkaran</title>
</head>
<body>
<?php 
//Konstanta untuk nilai judul
define("judul", "hitung luas lingkaran");
//Konstanta untuk nilai phi
define("PHI",3.14);
echo judul;
$r=10;
echo"<br>jari-jari : $r<br>\n";
$luas= PHI * $r * $r;
echo "luas lingkaran =$luas";
?>

</body>
</html>