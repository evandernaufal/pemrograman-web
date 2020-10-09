<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<?php
			$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
			print_r($persons);
			echo "";
			echo "Mary is a " . $persons["Mary"];
		?>
	</body>
</html>