<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<h1>Loop PHP</h1>
		<?php
		// foreach2
		//for(variableawal(mulai), batas(syarat), perubahan)
		$data = ['nama'=> 'hilman', 'umur'=>24, 'sifat'=>'malas'];
			foreach ($data as $key => $value) {
				echo $value . "<br>";
			}
		?>
	</body>
</html>