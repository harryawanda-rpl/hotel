<?php

include("config.php");

if(isset($_POST['create'])){

	$nomor_kamar = $_POST['nomor_kamar'];
	$tipe_kamar = $_POST['tipe_kamar'];
	$harga_per_malam = $_POST['harga_per_malam'];

	$sql = "INSERT INTO kamar (nomor_kamar, tipe_kamar, harga_per_malam)
	VALUE ('$nomor_kamar', '$tipe_kamar', '$harga_per_malam')";

	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}

?>