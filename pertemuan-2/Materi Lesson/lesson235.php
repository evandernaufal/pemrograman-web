<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<?php
			$film=array(
			 "comedy" => array(
			 0 => "Pink Panther",
			 1 => "john English",
			 2 => "See no evil hear no evil"
			 ),
			 "action" => array (
			 0 => "Die Hard",
			 1 => "Expendables"
			 ),
			 "epic" => array (
			 0 => "The Lord of the rings"
			 ),
			 "Romance" => array
			 (
			 0 => "Romeo and Juliet"
			 )
			);
			echo $film["comedy"][0];
		?>
	</body>
</html>