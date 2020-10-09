<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<h1>Loop PHP</h1>
		<?php
		// while loop
		//while(syarat)
		$hewan = ['anjing', 'babi', 'cicak', 'domba', 'buaya'];
		$i = 0;
		//while($i < count ($hewan)){
		//	echo $hewan[$i]. "<br>";
		//	$i++;
		//}
		do{
			echo $hewan[$i]. "<br>";
			$i++;
		}while ($i < count($hewan));
		?>
	</body>
</html>