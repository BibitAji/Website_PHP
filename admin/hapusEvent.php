<?php
// hapus inventaris
// Get data by id yang akan dihapus
$id = $_GET["id_kegiatan"];


// hapus di database
include_once("../config/config.php");
// query
$query = "DELETE FROM kegiatan WHERE id_kegiatan = $id";
// eksekusi
$sql=mysqli_query($koneksi, $query);

// redirect
header("location: dataEvent.php");