<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<h1>Loop PHP</h1>
		<?php
		// foreach
		//for(variableawal(mulai), batas(syarat), perubahan)
		$hewan = ['anjing', 'babi', 'cicak', 'domba', 'buaya'];
			foreach ($hewan as $h) {
				echo "--------------";
				echo $h;
				echo "--------------<br>";
			}
		?>
	</body>
</html>