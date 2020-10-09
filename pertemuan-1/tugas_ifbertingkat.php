<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Nilai Mahasiswa</title>
	</head>
	<body>
		<h2>Nilai Mahasiswa</h2>
		<?php
			//input data mahasiswa
			$nim 			 = 2018071000;
			$nama_matakuliah = "Kecerdasan Buatan";
			$sks			 = "3";
			$tipe_matakuliah = "MKMA";
			$nilai 			 = 49;
			//Jika yang dipilih yaitu MKMA:
			if ($tipe_matakuliah == "MKMA") {
				if ($nilai >= 90) {
					$nilai_huruf = "A";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 80) {
					$nilai_huruf = "A-";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 75) {
					$nilai_huruf = "B+";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 70) {
					$nilai_huruf = "B";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 65) {
					$nilai_huruf = "B-";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 60) {
					$nilai_huruf = "C+";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 55) {
					$nilai_huruf = "C";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 50) {
					$nilai_huruf = "C-";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 45) {
					$nilai_huruf = "D";
					$predikat = "Tidak Lulus";
				}
				else{
					$nilai_huruf = "E";
					$predikat = "Tidak Lulus";
				}
			}
			//Jika yang dipilih yaitu MKMI:
			elseif ($tipe_matakuliah == "MKMI") {
				if ($nilai >= 90) {
					$nilai_huruf = "A";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 80) {
					$nilai_huruf = "A-";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 75) {
					$nilai_huruf = "B+";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 70) {
					$nilai_huruf = "B";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 65) {
					$nilai_huruf = "B-";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 60) {
					$nilai_huruf = "C+";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 55) {
					$nilai_huruf = "C";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 50) {
					$nilai_huruf = "C-";
					$predikat = "Lulus";
				}
				elseif ($nilai >= 45) {
					$nilai_huruf = "D";
					$predikat = "Lulus";
				}
				else{
					$nilai_huruf = "E";
					$predikat = "Tidak Lulus";
				}
			}
			//Jika yang dipilih bukan MKMI dan MKMA:
			else {
				$tipe_matakuliah = "Salah Input Tipe Matakuliah!";
				$nilai_huruf = "-";
				$predikat = "";
			}
			//Output data yang akan dikeluarkan
			echo "NIM				:  $nim <br>";
			echo "Nama Matakuliah	:  $nama_matakuliah <br>";
			echo "SKS				:  $sks <br>";
			echo "Tipe Matakuliah	:  $tipe_matakuliah <br>";
			echo "Nilai Mahasiswa	:  $nilai_huruf <br><br>";
			echo "Keterangan <br> $nim $predikat pada Matakuliah $nama_matakuliah, $sks dengan nilai angka $nilai dan nilai huruf $nilai_huruf";
		?>
	</body>
</html>