<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login System</title>
	<style>
		.inputan{
			width: 100px;
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
		}
	</style>
</head>
<body>
	<p>Login System</p>
	<form method="post" action="ceklogin.php">
		<label>Username</label>
		<input class="inputan" type="text" name="username">
		<label>Password</label>
		<input class="inputan" type="password" name="password">
		<input type="submit" name="tombolsubmit" value="Login">
	</form>
</body>
</html>