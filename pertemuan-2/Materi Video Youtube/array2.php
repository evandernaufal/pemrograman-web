<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<h1>Array PHP</h1>
		<?php
		//Metode array
			$angka = [5, 10, 2, 1, 6];
			$kotak = array('anjing', 'kura-kura', 'koala');
			$nama = ['hilman', 'endy', 'tiqa'];
			print_r(array_reverse($kotak));
			shuffle($kotak);
			print_r($kotak);
			sort($kotak);
			print_r($kotak);
			sort($angka);
			print_r($angka);
			echo count($nama);
		?>
	</body>
</html>