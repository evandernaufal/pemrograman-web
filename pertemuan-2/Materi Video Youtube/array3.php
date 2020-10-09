<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<h1>Array PHP</h1>
		<?php
		//Associative array
		//key ==> isi
			$data = array("nama" => "hilman", 
						"umur" => "21",
						"kerja" => "pengacara");
			print_r($data);
			$data['nama']="Himan Ramadhan";
			echo "Namanya adalah " . $data['kerja'];
		?>
	</body>
</html>