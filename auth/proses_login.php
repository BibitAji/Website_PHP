<?php
//terima inputan

$username = $_POST["username"];
$password = $_POST["password"];
// 
// $password = md5($password);

// include koneksi
include_once("../config/config.php");

// querry insert
$query = "SELECT * FROM user WHERE username = '$username' AND password='$password'";

//eksekusi query
$hasil = mysqli_query($koneksi,$query);
$akun = mysqli_num_rows($hasil);

if ($akun>0) {
    
    header("location: ../admin/dashboard.php");
}else{
    header("location: login.php");
}
?>