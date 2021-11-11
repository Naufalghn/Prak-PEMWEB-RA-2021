<?php 
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];

if(!($nim=='' || $nama=='' || $prodi=='' || $angkatan=='')){
	$sql = mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('$nim','$nama','$prodi','$angkatan')");
}

if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);

?>