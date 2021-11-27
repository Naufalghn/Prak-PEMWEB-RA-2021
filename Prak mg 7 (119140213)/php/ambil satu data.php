<?php 
include 'koneksi.php';
$id = $_POST['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM anggota WHERE nim = '$id' ");
$result = mysqli_fetch_array($sql);
$result['id'] = $id;
echo json_encode($result);
?>