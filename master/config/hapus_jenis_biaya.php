<?php
include 'a_koneksi.php';

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM tbl_jenis_biaya WHERE id_jenis_biaya = $id");

// set id biar dimulai dari 1
mysqli_query($conn, "ALTER TABLE tbl_jenis_biaya AUTO_INCREMENT=1");
