<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<?php
			$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
			ksort($persons);
			print_r($persons);
		?>
	</body>
</html>