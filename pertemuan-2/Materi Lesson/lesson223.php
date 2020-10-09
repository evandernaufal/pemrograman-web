<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<?php
			$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
			foreach($persons as $key => $value){
			echo "$key is $value"."<br>";
			}
		?>
	</body>
</html>