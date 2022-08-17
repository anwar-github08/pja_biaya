<?php
include 'a_koneksi.php';

$id = $_POST['id'];
$jenis_biaya = strtoupper($_POST['jenis_biaya']);

mysqli_query($conn, "UPDATE tbl_jenis_biaya SET jenis_biaya = '$jenis_biaya' WHERE id_jenis_biaya = $id");
