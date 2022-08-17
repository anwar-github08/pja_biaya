<?php
include 'a_koneksi.php';

$id_jenis_biaya = $_POST['id_jenis_biaya'];
$biaya = "BIAYA " . strtoupper($_POST['biaya']);

mysqli_query($conn, "INSERT INTO tbl_biaya VALUE('','$id_jenis_biaya','$biaya')");
