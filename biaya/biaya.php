<?php
include "../functions/functions.php";

$biaya = getBiaya();
$lokasi = getLokasi();
?>

<?php include '../layout/start.php' ?>
<link rel="stylesheet" href="../aset/datatables/datatables/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../aset/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="../aset/tgl/flatpickr.min.css">


<div class="konten">

   <h2>Biaya</h2>
   <hr>
   <div class="card">
      <div class="card-body">
         <a href="#" class="btn btn-secondary show-form mb-3"><span class="fa fa-plus fa-fw"></span> Tambah</a>

         <form method="POST" id="form-tr-biaya">
            <div class="row mb-3">

               <p class="text-white err"></p>

               <div class="col-md-6">
                  <div class="col-md">
                     <label class="form-label">Tanggal</label>
                     <input type="text" name="tgl" id="tgl" placeholder="Tanggal" class="form-control mb-2">
                  </div>
                  <div class="col-md">
                     <label class="form-label">Biaya</label>
                     <select name="id_biaya" size="1" class="form-control mb-2">
                        <?php foreach ($biaya as $v_biaya) : ?>
                           <option value="<?= $v_biaya['id_jenis_biaya'] ?>&<?= $v_biaya['id_biaya'] ?>"><?= $v_biaya['nama_biaya'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="col-md">
                     <label class="form-label mt-2">Lokasi</label>
                     <select name="id_lokasi" size="1" class="form-control">
                        <?php foreach ($lokasi as $v_lokasi) : ?>
                           <option value="<?= $v_lokasi['id_lokasi'] ?>"><?= $v_lokasi['lokasi'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="col-md">
                     <label class="form-label">Total</label>
                     <input type="text" name="total" id="total" onkeypress="return hanyaAngka(event)" class="form-control mb-2">
                  </div>
                  <div class="col-md">
                     <label class="form-label">Keterangan</label>
                     <textarea name="keterangan" class="form-control" rows="4"></textarea>
                  </div>
               </div>
            </div>
            <div class="tombol justify-content-center">
               <a class="btn btn-danger batal" style="width: 20%;">Batal</a>
               <a class="btn btn-primary tambah" style="width: 79%;">Simpan</a>
            </div>
         </form>
         <hr>

         <div class="data-tr-biaya"></div>
      </div>
   </div>

</div>


<?php include '../layout/end.php' ?>


<!-- untuk datatables -->
<script src="../aset/datatables/datatables/js/jquery.dataTables.min.js"></script>
<script src="../aset/datatables/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="../aset/select2/dist/js/select2.min.js"></script>
<script src="../aset/tgl/flatpickr.js"></script>

<script src="../aset/js/js_tr_biaya.js"></script>

<script>
   $("select[size=1]").select2();

   function hanyaAngka(evt) {
      var kode = evt.which ? evt.which : event.keyCode;
      if (kode > 31 && (kode < 48 || kode > 57)) return false;
      return true;
   }
</script>