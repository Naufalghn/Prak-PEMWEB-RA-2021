<?php
$password = "";
$nama_data_base="prak";

$koneksi= mysqli_connect("localhost", "root", $password, $nama_data_base);

if (!$koneksi){
    die('gagal melakukan koneksi');
}
?>