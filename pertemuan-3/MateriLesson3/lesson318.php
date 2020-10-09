<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<?php
			echo strtolower( 'Benjamin');echo "<br>";

			echo strtoupper('george w bush');echo "<br>";

			echo strlen('united states of america');echo "<br>";

			$settings = explode(';', "host=localhost; db=sales; uid=root; pwd=demo"); print_r($settings);echo "<br>";

			$my_var = 'This is a really long sentence that I wish to cut short';echo substr($my_var,0, 12).'...';echo "<br>";

			echo str_replace ('the', 'that', 'the laptop is very expensive');echo "<br>";

			echo strpos('PHP Programing','Pro');echo "<br>";

			echo sha1('password');echo "<br>";

			echo md5('password');echo "<br>";

			echo str_word_count ('This is a really long sentence that I wish to cut short');echo "<br>";

			echo ucfirst('respect');echo "<br>";

			echo lcfirst('RESPECT');echo "<br>";
		?>
	</body>
</html>