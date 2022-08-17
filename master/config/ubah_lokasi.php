<?php
include 'a_koneksi.php';

$id = $_POST['id'];
$lokasi = strtoupper($_POST['lokasi']);

mysqli_query($conn, "UPDATE tbl_lokasi SET lokasi = '$lokasi' WHERE id_lokasi = $id");
