<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
	<style>
		table {
			margin: 0 auto;
			text-align: left;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center;">Biodata</h1>
	<?php
		$nama = "M Riza Alfarrel";
		$umur = 21;
		$alamat = "Cianjur, Jawa Barat";
		$email = "rizaalfarrel11@gmail.com";
	?>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>Umur</td>
			<td>:</td>
			<td><?php echo $umur; ?> tahun</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $alamat; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $email; ?></td>
		</tr>
	</table>
</body>
</html>