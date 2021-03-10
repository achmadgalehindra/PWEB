<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWEB 1</title>
</head>
<body>
	<?php
		//$str_one = "GG";
		//$str_two = "gaming";

		//echo $str_one . ' ' . $str_two

//---------------------------------------------------

//$array = ['Aku','gg','gaming','ges'];

//		foreach ($array as $value) {
//			echo $value . ' ';
//		}
	

//---------------------------------------------------
	$mhs = [
	[
		'Nama' => 'Agik', 
		'NIM' => '192410101077', 
		'usia' => '20'
	],
	[		
		'Nama' => 'indra', 
		'NIM' => '192410103090', 
		'usia' => '20'
	],
];
?>
	<h1> DATA MAHASISWA </h1>
	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Nim</th>
				<th>Usia</th>
			</tr>
		</thead>
		<tbody>
			<? foreach($mhs as $student); ?>
				<tr>
					<td><? echo $student['Nama']; ?></td>
					<td><? echo $student['NIM']; ?></td>
					<td><? echo $student['usia']; ?></td>
				</tr>
		</tbody>
	</table>

</body>
</html>  