<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fungsi PHP</title>
	</head>
	<body>
		<?php
			// Method String
			$text = "Hai semuanya di sini";

			echo strlen($text); echo "<br>";

			echo str_word_count($text); echo "<br>";

			echo str_replace("Hai", "Hallo", $text); echo "<br>";

			echo str_repeat("Hai", 4);echo "<br>";

			echo str_repeat(str_replace("Hai", "Hallo", $text), 10);echo "<br>";
		?>
	</body>
</html>