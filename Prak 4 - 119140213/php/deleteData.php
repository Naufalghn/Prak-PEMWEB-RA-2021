<?php 
include 'koneksi.php';

$id = $_POST['nim'];
$sql = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE nim = '$id' ");
if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);

?>