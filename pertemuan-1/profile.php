<?php
	session_start();
	if(isset($_SESSION['nama_user'])){
		echo 'ini halaman profil '.$_SESSION['nama_user'];
	}else{
		echo 'login dulu';
	}
	//echo 'ini halaman profil '.$_COOKIE['nama_user'];
?>