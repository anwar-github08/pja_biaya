<?php
date_default_timezone_set('Asia/Jakarta');

include 'a_koneksi.php';

$id = explode("&", $_POST['id_biaya']);

$id_jenis_biaya = $id[0];
$id_biaya = $id[1];
$id_lokasi = $_POST['id_lokasi'];
$tanggal = date("Y-m-d", strtotime($_POST['tgl']));
$tanggal_fix = $tanggal . " " . date("H:i:s");
$total = $_POST['total'];
$ket = $_POST['keterangan'];

mysqli_query($conn, "INSERT INTO tbl_tr_biaya VALUE('','$id_jenis_biaya','$id_biaya','$id_lokasi','$tanggal_fix','$total','$ket' )");
