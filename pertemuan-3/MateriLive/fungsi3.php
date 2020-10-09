<?php
/* 	
	Buat halaman untuk menghitung luas segitiga
	dimana inputan berasal dari kode program 
	
	Luas segitiga
	alas = 10
	tinggi = 20
	luas = 100

	function luasseg($alas, $tinggi){
		$luas = $alas * $tinggi / 2;
		return $luas;
	}
	$hasil = luasseg(10, 20);
			echo "Luas segitiga ". $hasil;
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	function luasSegitiga($alas,$tinggi){
		return 0.5 * $alas * $tinggi;
	}
	$a = [10,20,30,40,50,60,70,80,90,100];
	$t = [20,40,60,80,100,120,140,160,180,200];
?>
Tabel Luas Segitiga
	<table width="800" border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Alas</th>
				<th>Tinggi</th>
				<th>Hasil</th>
			</tr>
		</thead>
		<tbody>
			<?php
				for($i=0; $i < count($a); $i++){
			?>
			<tr>
				<td><?php echo $i + 1; ?></td>
				<td><?php echo $a[$i]; ?></td>
				<td><?php echo $t[$i]; ?></td>
				<td><?php echo luasSegitiga($a[$i], $t[$i]); ?></td>
				<?php
					}
				?>
			</tr>
		</tbody>
	</table>
</body>
</html>