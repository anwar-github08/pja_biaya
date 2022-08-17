<?php
include "../functions/functions.php";

$lokasi = getLokasi();
?>

<table class="table table-secondary table-striped table-bordered">
   <thead>
      <tr class="text-center">
         <th>No</th>
         <th>Lokasi</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
      <?php $no = 1; ?>
      <?php foreach ($lokasi as $view_lokasi) : ?>
         <tr class="text-center">
            <td><?= $no++ ?></td>
            <td contenteditable onblur="liveEdit(<?= $view_lokasi['id_lokasi'] ?>)" id="<?= $view_lokasi['id_lokasi'] ?>"><?= $view_lokasi['lokasi'] ?></td>
            <td>
               <a class="btn btn-danger" onclick="hapus(<?= $view_lokasi['id_lokasi'] ?>)" id="<?= $view_lokasi['id_lokasi'] ?>"><i class="fa fa-trash"></i></a>
            </td>
         </tr>
      <?php endforeach ?>
   </tbody>
</table>

<script>
   $(document).ready(function() {
      $(".table").DataTable();
   });
</script>