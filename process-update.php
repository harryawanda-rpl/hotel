<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id_kamar'];
	$nomor_kamar = $_POST['nomor_kamar'];
	$tipe_kamar = $_POST['tipe_kamar'];
	$harga_per_malam = $_POST['harga_per_malam'];

	$sql = "UPDATE kamar SET nomor_kamar='$nomor_kamar', tipe_kamar='$tipe_kamar',
	harga_per_malam='$harga_per_malam' WHERE id_kamar=$id";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: index.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
    die("Akses dilarang...");
}

?>