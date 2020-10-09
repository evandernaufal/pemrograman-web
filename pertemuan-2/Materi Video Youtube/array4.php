<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<h1>Array PHP</h1>
		<?php
		//Associative array kedua
		//key ==> isi
			$data = array("nama" => "hilman", 
						"umur" => "21",
						"kerja" => "pengacara");
			$data2 = array("istri" => "belum ada", 
						"laptop" => "Chromebook",
						"kerja" => "pengacara");
			print_r(array_values($data));
			print_r(array_keys($data));
			print_r(array_merge($data, $data2));
		?>
	</body>
</html>