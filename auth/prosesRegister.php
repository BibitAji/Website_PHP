<?php
//terima inputan

$username = $_POST["username"];
$email = $_POST["email"];
$date = $_POST["date"];
$alamat = $_POST["alamat"];
// $password = md5($password);

// include koneksi
include_once("../config/config.php");

// querry insert
$query = "INSERT INTO pengguna (`nama`,`email`,`tanggal`,`alamat`) VALUE ('$username','$email','$date','$alamat')";

// eksekusi query
$hasil = mysqli_query($koneksi,$query);

if($hasil){
    header("location: login.php");
}else{
    header("location: register.php");
}
?>