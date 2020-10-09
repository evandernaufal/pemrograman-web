<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<?php
    		if(is_numeric("guru"))
			{
			   echo "true";
			}
			else
			{
			   echo "false";
			} echo "<br>";


			if(is_numeric (123))
			{
			  echo "true";
			}
			else
			{
			  echo "false";
			} echo "<br>";


			echo number_format(2509663); echo "<br>";

			echo rand(); echo "<br>";

			echo round(3.49); echo "<br>";

			echo sqrt(100); echo "<br>";

			echo cos(45); echo "<br>";

			echo sin(45); echo "<br>";

			echo tan(45); echo "<br>";

			echo pi(); echo "<br>";
		?>
	</body>
</html>