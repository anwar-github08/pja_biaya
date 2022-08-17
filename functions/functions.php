<?php
$conn = mysqli_connect("localhost", "root", "", "pja_biaya");


function query($query)
{
   global $conn;

   $result = mysqli_query($conn, $query);

   $wadah = [];
   while ($row = mysqli_fetch_Assoc($result)) {

      $wadah[] = $row;
   }
   return $wadah;
}


function getJenisBiaya()
{
   $query = "SELECT * FROM tbl_jenis_biaya";

   return query($query);
}

function getBiaya()
{
   $query = "SELECT * FROM tbl_biaya JOIN tbl_jenis_biaya ON tbl_biaya.id_jenis_biaya = tbl_jenis_biaya.id_jenis_biaya";

   return query($query);
}

function getLokasi()
{
   $query = "SELECT * FROM tbl_lokasi";

   return query($query);
}

function biayaOne($id)
{
   $query = "SELECT * FROM tbl_biaya JOIN tbl_jenis_biaya ON tbl_biaya.id_jenis_biaya = tbl_jenis_biaya.id_jenis_biaya WHERE tbl_biaya.id_biaya = $id";

   return query($query);
}

function getTrBiaya()
{
   $query = "SELECT * FROM tbl_tr_biaya JOIN tbl_jenis_biaya ON tbl_tr_biaya.id_jenis_biaya = tbl_jenis_biaya.id_jenis_biaya JOIN tbl_biaya ON tbl_tr_biaya.id_biaya = tbl_biaya.id_biaya JOIN tbl_lokasi ON tbl_lokasi.id_lokasi = tbl_tr_biaya.id_lokasi";

   return query($query);
}
