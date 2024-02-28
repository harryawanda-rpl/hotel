<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM kamar WHERE id_kamar=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>Update Data</h3>
	<form action="process-update.php" method="POST">
		<table border="0">
			<tr>
				<td></td>
				<td><input type="hidden" name="id_kamar" value="<?php echo $data['id_kamar'] ?>" /></td>
			</tr>
			<tr>
				<td>Nomor Kamar</td>
				<td><input type="text" name="nomor_kamar" value="<?php echo $data['nomor_kamar'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Tipe kamar</td>
				<td><input type="text" name="tipe_kamar" value="<?php echo $data['tipe_kamar'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Harga per Malam</td>
				<td><input type="text" name="harga_per_malam" value="<?php echo $data['harga_per_malam'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>