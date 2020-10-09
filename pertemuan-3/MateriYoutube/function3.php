<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fungsi PHP</title>
	</head>
	<body>
		<?php
			// Fungsi
			//return fungsi
			function menghitung($x, $y){
				$z = $x + $y;
				return $z;
			}
			$hasil = menghitung(2,5) * 10;
			echo "Hasil dari penjumlahan ". $hasil;
		?>
	</body>
</html>