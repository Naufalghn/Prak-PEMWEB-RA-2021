<?php 
include 'koneksi.php';
$id = $_POST['id'];
$sql = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim = '$id' ");
$result = mysqli_fetch_array($sql);
$result['id'] = $id;
echo json_encode($result);
?>