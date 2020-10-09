<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<h1>Logika di PHP</h1>
		<?php
		$nama = "hilman";
		switch ($nama) {
			case 'endy':
				echo 'namanya endy';
				break;
			case 'tiqa':
				echo 'namanya tiqa';
				break;
			case 'hilman':
				echo 'namanya hilman';
				break;
			default:
			echo 'tidak ada yg benar';
		}


		?>
	</body>
</html>