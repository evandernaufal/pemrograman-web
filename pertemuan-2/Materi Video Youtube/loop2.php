<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<h1>Loop PHP</h1>
		<?php
		// Pengulangan2
		//for(variableawal(mulai), batas(syarat), perubahan)
		$hewan = ['anjing', 'babi', 'cicak', 'domba'];
		for($i = 0; $i < count($hewan); $i++){
			echo "--------------";
			echo $hewan[$i];
			echo "--------------<br>";
		}
		?>
	</body>
</html>