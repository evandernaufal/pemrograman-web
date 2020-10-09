<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fungsi PHP</title>
	</head>
	<body>
		<?php
			// Fungsi
			//Parameter
			function print_text($text, $angka){
				$text = "gedung ". $text. " " .$angka;
				echo "---------------";
				echo $text;
				echo "---------------";
			}
			function jarak(){
				echo "<br>";
			}
			print_text(" koding", 11);
			jarak();
			print_text(" Perawat", 222);
			jarak();
			print_text(" Mengemudi", 211);
		?>
	</body>
</html>