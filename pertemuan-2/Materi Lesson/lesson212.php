<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Belajar PHP</title>
	</head>
	<body>
		<?php
			$today = "wednesday";
			switch($today){
			case "sunday":
			echo "pray for us sinners.";
			break;
			case "wednesday":
			echo "ladies night, take her out for dinner";
			break;
			case "saturday":
			echo "take care as you go out tonight.";
			break;
			default:
			echo "have a nice day at work";
			break;
			}
		?>
	</body>
</html>