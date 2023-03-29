<?php
//terima inputan

$nama_event= $_POST["nama_event"];
$tanggal_event = $_POST["tanggal_event"];
$informasi = $_POST["informasi"];



// include koneksi
include_once("../config/config.php");

// querry insert
$query = "INSERT INTO kegiatan (`nama_event`,`tanggal_event`,`informasi`) VALUE ('$nama_event','$tanggal_event','$informasi')";

// eksekusi query
$hasil = mysqli_query($koneksi,$query);
header("location: dataEvent.php");
?>