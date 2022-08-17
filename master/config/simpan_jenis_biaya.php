<?php
include 'a_koneksi.php';

$jenis_biaya = "BIAYA " . strtoupper($_POST['jenis_biaya']);

mysqli_query($conn, "INSERT INTO tbl_jenis_biaya VALUE('','$jenis_biaya')");
