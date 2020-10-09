<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<?php
			$baby_name = "Shalon";
			$my_variable = <<<'EOT'
			    When $baby_name was a baby,
			    She used to look like a "boy".
EOT;

echo $my_variable;
 
		?>
	</body>
</html>