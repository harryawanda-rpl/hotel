<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>CREATE DATA</h3>
	<form action="process-create.php" method="POST">
		<table border="0">
			<tr>
				<td>Nomor Kamar</td>
				<td><input type="text" name="nomor_kamar" class="form-control"></td>
			</tr>
			<tr>
				<td>Tipe Kamar</td>
				<td><input type="text" name="tipe_kamar" class="form-control"></td>
			</tr>
			<tr>
				<td>Harga per Malam</td>
				<td><input type="text" name="harga_per_malam" class="form-control"></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>