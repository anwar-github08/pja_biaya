<?php
include "../functions/functions.php";

$biaya = getBiaya();
?>

<table class="table table-secondary table-striped table-bordered">
   <thead>
      <tr class="text-center">
         <th>No</th>
         <th>Jenis Biaya</th>
         <th>Biaya</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
      <?php $no = 1; ?>
      <?php foreach ($biaya as $view_biaya) : ?>
         <tr class="text-center">
            <td><?= $no++ ?></td>
            <td><?= $view_biaya['jenis_biaya'] ?></td>
            <td><?= $view_biaya['nama_biaya'] ?></tdcontenteditable>
            <td>
               <a href="m_ubah_biaya.php?id=<?= $view_biaya['id_biaya'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
               <a class="btn btn-danger" onclick="hapus(<?= $view_biaya['id_biaya'] ?>)" id="<?= $view_biaya['id_biaya'] ?>"><i class="fa fa-trash"></i></a>
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