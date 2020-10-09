<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fungsi PHP</title>
	</head>
	<body>
		<?php
			// Scope
			$a = 2;
			$b = 3;

			function menghitung(){
				$c=$GLOBALS['a'] + $GLOBALS['b'];
				return $c;
			}
			echo menghitung();
			echo "<br>";
			function menghitung2(){
				global $a, $b;
				$c=$a + $b;
				return $c;
			}
			echo menghitung2();
		?>
	</body>
</html>