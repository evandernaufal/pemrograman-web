<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<?php
    		function kilometers_to_miles($kilometers = 0)
			{
				$miles_scale = 0.62;
				return $kilometers * $miles_scale;
			}
			echo kilometers_to_miles(100);
		?>
	</body>
</html>