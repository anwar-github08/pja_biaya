$(document).ready(function () {
  // title dan nav
  $(".title").html("Master | Jenis Biaya");
  navActive("master");

  $(".data-jenis-biaya").load("../ajax/ajax_jenis_biaya.php");

  $("#form-jenis-biaya").hide();
  $(".show-form").click(function () {
    $("#form-jenis-biaya").fadeToggle("slow");
  });

  $(".tambah").click(function () {
    tambahdata();
  });

  $("input").on("keypress", function (e) {
    if (e.which == 13) {
      switch ($(this).attr("id")) {
        case "jenis-biaya":
          $(".tambah").click();
          e.preventDefault();
          break;
      }
    }
  });
});

function tambahdata() {
  var data = $("#form-jenis-biaya").serialize();
  var jenis_biaya = $("#jenis-biaya").val();

  if (jenis_biaya == "") {
    $("#err").html("Wajib diisi..!");
    setTimeout(function () {
      $("#err").html("");
    }, 1000);
  } else {
    $("#err").html("");

    $.ajax({
      type: "POST",
      url: "config/simpan_jenis_biaya.php",
      data: data,
      success: function () {
        $(".data-jenis-biaya").load("../ajax/ajax_jenis_biaya.php");
        document.getElementById("form-jenis-biaya").reset();
      },
    });
  }
}

function hapus(id) {
  if (confirm("Semua data berelasi akan dihapus. Lanjutkan..?")) {
    var id = id;
    $.ajax({
      type: "POST",
      url: "config/hapus_jenis_biaya.php",
      data: "id=" + id,
      success: function () {
        $(".data-jenis-biaya").load("../ajax/ajax_jenis_biaya.php");
      },
    });
  } else {
    $(".data-jenis-biaya").load("../ajax/ajax_jenis_biaya.php");
  }
}

function liveEdit(id) {
  if (confirm("ubah..?")) {
    var id = id;
    var jenis_biaya = document.getElementById(id).textContent;
    var data = "id=" + id + "&jenis_biaya=" + jenis_biaya;

    $.ajax({
      type: "POST",
      url: "config/ubah_jenis_biaya.php",
      data: data,
      success: function () {
        $(".data-jenis-biaya").load("../ajax/ajax_jenis_biaya.php");
      },
    });
    // console.log(data);
  } else {
    $(".data-jenis-biaya").load("../ajax/ajax_jenis_biaya.php");
  }
}
