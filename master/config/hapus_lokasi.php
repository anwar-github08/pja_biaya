<?php
include 'a_koneksi.php';

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM tbl_lokasi WHERE id_lokasi = $id");

// set id biar dimulai dari 1
mysqli_query($conn, "ALTER TABLE tbl_lokasi AUTO_INCREMENT=1");
