<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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
				function luasSegitiga($alas,$tinggi){
					return 0.5 * $alas * $tinggi;
				}
				$data = [[10,20],[25,40],[30,24]];

				for($i=0; $i < count($data); $i++){
					$a = $data[$i][0];
					$t = $data[$i][1];
			?>
			<tr>
				<td><?php echo $i+1 ?></td>
				<td><?php echo $data[$i][0] ?></td>
				<td><?php echo $data[$i][1] ?></td>
				<td><?php echo luasSegitiga($a, $t) ?></td>
			</tr>
			<?php	
				}
			?>
		</tbody>
	</table>
</body>
</html>