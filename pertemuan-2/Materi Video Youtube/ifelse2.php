<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<h1>Logika di PHP</h1>
		<?php
		$uang_programmer = 1000;
		$keyboard = 2000;
		$uang_desaigner = 4000;

		if ($uang_programmer>$keyboard) {
			echo 'dibeli!';
		}elseif ($uang_desaigner>=$keyboard) {
			echo 'dibeli oleh desaigner';
		
		//if bercabang
			if ($uang_desaigner>=$keyboard*2) {
				echo 'dibeli dua kali oleh desaigner';
			}
		}
		else{
			echo 'engga cukup';
		}
		?>
	</body>
</html>