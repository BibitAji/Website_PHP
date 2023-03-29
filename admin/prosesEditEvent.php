<?php
//terima inputan
$id = $_POST["id"];
$nama_event = $_POST["nama_event"];
$tanggal_event =$_POST["tanggal"];
$informasi = $_POST["informasi"];


// include koneksi
include_once("../config/config.php");

$query = "UPDATE kegiatan SET 
          nama_event = '$nama_event',
          tanggal_event= '$tanggal_event',
          informasi ='$informasi'

          WHERE id_kegiatan = $id";

// eksekusi query
$hasil = mysqli_query($koneksi,$query);
header("location: dataEvent.php");