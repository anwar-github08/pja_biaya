<?php
include 'a_koneksi.php';

$id = $_POST['id'];
$id_jenis_biaya = $_POST['id_jenis_biaya'];
$nama_biaya = strtoupper($_POST['biaya']);

mysqli_query($conn, "UPDATE tbl_biaya SET id_jenis_biaya = $id_jenis_biaya, nama_biaya = '$nama_biaya' WHERE id_biaya = $id");

echo "<script>location='../m_biaya.php'</script>";
