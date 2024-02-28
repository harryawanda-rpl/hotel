<?php

include("config.php");
if( isset($_GET['id']) ){

	$id = $_GET['id'];
	$sql = "DELETE FROM kamar WHERE id_kamar=$id";
	$query = mysqli_query($db, $sql);

	if( $query ){
		header('Location: index.php');
	} else {
		die("gagal menghapus...");
	}
} else {
	die("akses dilarang...");
}

?>