<?php
include 'a_koneksi.php';

$lokasi = strtoupper($_POST['lokasi']);

mysqli_query($conn, "INSERT INTO tbl_lokasi VALUE('','$lokasi')");
