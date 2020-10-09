<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<h1>Array PHP</h1>
		<?php
		// multi dimensi array
			$data = array(
						array("programmer", "21", "males"),
						array("desaigner", "24", "rajin"),
						array("manager", "34", "males banget"),
					);
			// 00 01 02
			// 10 11 12 
			// 20 21 22
			print_r($data);
			echo $data[1][1];
		?>
	</body>
</html>