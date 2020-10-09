<?php
	$user = 'hilman';
	$password = '123';

	if(isset($_POST['submit'])){
		if($_POST['nama']==$user &&
			$_POST['password']==$password){

			header('location: profile.php?nama=' .$user);
		}else{
			echo 'login gagal!';
		}
	}
?>

<form action="metodeget.php" method="post">
	<input type="text" name="nama">
	<input type="password" name="password">
	<input type="submit" name="submit">
</form>