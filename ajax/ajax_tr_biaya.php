<?php
include "../functions/functions.php";

$tr_biaya = getTrBiaya();

?>

<table class="table table-secondary table-striped table-bordered text-center">
   <thead>
      <tr>
         <th>No</th>
         <th>Tanggal</th>
         <th>Biaya</th>
         <th>Lokasi</th>
         <th>Total</th>
         <th>Keterangan</th>
      </tr>
   </thead>
   <tbody>
      <?php $no = 1 ?>
      <?php foreach ($tr_biaya as $v) : ?>
         <tr>
            <td><?= $no++ ?></td>
            <td><?= $v['tanggal'] ?></td>
            <td><?= $v['nama_biaya'] ?></td>
            <td><?= $v['lokasi'] ?></td>
            <td><?= $v['total_biaya'] ?></td>
            <td><?= $v['keterangan'] ?></td>
         </tr>
      <?php endforeach ?>
   </tbody>
</table>


<script>
   $(document).ready(function() {
      $(".table").DataTable();
   });
</script>