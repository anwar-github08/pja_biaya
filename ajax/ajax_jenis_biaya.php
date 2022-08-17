<?php
include "../functions/functions.php";

$jenis_biaya = getJenisBiaya();
?>

<table class="table table-secondary table-striped table-bordered">
   <thead>
      <tr class="text-center">
         <th>No</th>
         <th>Jenis Biaya</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
      <?php $no = 1; ?>
      <?php foreach ($jenis_biaya as $view_jenis_biaya) : ?>
         <tr class="text-center">
            <td><?= $no++ ?></td>
            <td contenteditable onblur="liveEdit(<?= $view_jenis_biaya['id_jenis_biaya'] ?>)" id="<?= $view_jenis_biaya['id_jenis_biaya'] ?>"><?= $view_jenis_biaya['jenis_biaya'] ?></td>
            <td>
               <a class="btn btn-danger" onclick="hapus(<?= $view_jenis_biaya['id_jenis_biaya'] ?>)" id="<?= $view_jenis_biaya['id_jenis_biaya'] ?>"><i class="fa fa-trash"></i></a>
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