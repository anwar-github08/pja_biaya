<?php include '../functions/functions.php' ?>
<?php include '../layout/start.php' ?>
<!-- <link rel="stylesheet" href="../aset/select2/dist/css/select2.min.css"> -->

<?php
$jenis_biaya = getJenisBiaya();
$biaya = biayaOne($_GET['id']);
foreach ($biaya as $view)
?>

<div class="konten">

   <h2>Ubah Master Biaya</h2>
   <hr>

   <div class="row justify-content-center">
      <div class="col-md-4">
         <div class="card">
            <form action="config/ubah_biaya.php" method="POST">

               <div class="card-body">
                  <label class="form-label">Jenis Biaya</label>
                  <select name="id_jenis_biaya" class="form-control mb-2">
                     <option value="<?= $view['id_jenis_biaya'] ?>"><?= $view['jenis_biaya'] ?></option>
                     <?php foreach ($jenis_biaya as $v_jenis_biaya) : ?>
                        <option value="<?= $v_jenis_biaya['id_jenis_biaya'] ?>"><?= $v_jenis_biaya['jenis_biaya'] ?></option>
                     <?php endforeach ?>
                  </select>
                  <label class="form-label">Biaya</label>
                  <input type="text" class="form-control" name="biaya" value="<?= $view['nama_biaya'] ?>" autocomplete="off" required>
                  <input type="hidden" name="id" value="<?= $view['id_biaya'] ?>">
               </div>

               <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="m_biaya.php" class="btn btn-danger">Batal</a>
               </div>

            </form>
         </div>
      </div>
   </div>

</div>

<?php include '../layout/end.php' ?>

<script>
   $(".title").html("Master | Ubah Biaya");
   navActive("master");
</script>

<!-- 
<script src="../aset/select2/dist/js/select2.min.js"></script>
<script>
   $(document).ready(function() {
      $('select').select2();
   });
</script> -->