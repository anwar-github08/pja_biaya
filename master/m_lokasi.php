<?php include '../layout/start.php' ?>
<link rel="stylesheet" href="../aset/datatables/datatables/css/dataTables.bootstrap4.min.css">

<div class="konten">

   <h2>Master | Lokasi</h2>
   <hr>
   <div class="card">
      <div class="card-body">
         <a href="#" class="btn btn-secondary show-form mb-3"><span class="fa fa-plus fa-fw"></span> Tambah</a>

         <form method="POST" id="form-lokasi">
            <div class="input-group mb-3">
               <input type="text" name="lokasi" class="form-control bg-light" id="lokasi" placeholder="input baru.." required autocomplete="off">
               <a class="input-group-text btn btn-primary tambah"><i class="fa fa-plus"></i> Tambah</a>
            </div>
            <p class="text-danger" id="err"></p>
         </form>
         <hr>

         <div class="data-lokasi"></div>
      </div>
   </div>

</div>


<?php include '../layout/end.php' ?>

<!-- untuk datatables -->
<script src="../aset/datatables/datatables/js/jquery.dataTables.min.js"></script>
<script src="../aset/datatables/datatables/js/dataTables.bootstrap4.min.js"></script>

<script src="../aset/js/js_lokasi.js"></script>