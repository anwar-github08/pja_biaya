<?php include '../functions/functions.php' ?>
<?php $jenis_biaya = getJenisBiaya() ?>


<?php include '../layout/start.php' ?>
<link rel="stylesheet" href="../aset/datatables/datatables/css/dataTables.bootstrap4.min.css">
<!-- <link rel="stylesheet" href="../aset/select2/dist/css/select2.min.css"> -->

<div class="konten">

   <h2>Master | Biaya</h2>
   <hr>
   <div class="card">
      <div class="card-body">
         <a href="#" class="btn btn-secondary show-form mb-3"><span class="fa fa-plus fa-fw"></span> Tambah</a>

         <form method="POST" id="form-biaya">
            <div class="row">
               <div class="col-md-6">
                  <label for="" class="form-label">Jenis Biaya</label>
                  <select name="id_jenis_biaya" class="form-control bg-light">
                     <?php foreach ($jenis_biaya as $view) : ?>
                        <option value="<?= $view['id_jenis_biaya'] ?>"><?= $view['jenis_biaya'] ?></option>
                     <?php endforeach ?>
                  </select>
               </div>
               <div class="col-md-6">
                  <label for="" class="form-label">Nama Biaya</label>
                  <div class="input-group mb-3">
                     <input type="text" name="biaya" class="form-control bg-light" id="biaya" placeholder="nama biaya.." required autocomplete="off">
                     <a class="input-group-text btn btn-primary tambah"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                  <p class="text-danger" id="err"></p>
               </div>
            </div>
         </form>
         <hr>

         <div class="data-biaya"></div>
      </div>
   </div>

</div>


<?php include '../layout/end.php' ?>

<!-- untuk datatables -->
<script src="../aset/datatables/datatables/js/jquery.dataTables.min.js"></script>
<script src="../aset/datatables/datatables/js/dataTables.bootstrap4.min.js"></script>

<script src="../aset/js/js_biaya.js"></script>