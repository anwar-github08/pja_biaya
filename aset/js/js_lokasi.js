$(document).ready(function () {
  // title dan nav
  $(".title").html("Master | Lokasi");
  navActive("master");

  $(".data-lokasi").load("../ajax/ajax_lokasi.php");

  $("#form-lokasi").hide();
  $(".show-form").click(function () {
    $("#form-lokasi").fadeToggle("slow");
  });

  $(".tambah").click(function () {
    tambahdata();
  });

  $("input").on("keypress", function (e) {
    if (e.which == 13) {
      switch ($(this).attr("id")) {
        case "lokasi":
          $(".tambah").click();
          e.preventDefault();
          break;
      }
    }
  });
});

function tambahdata() {
  var data = $("#form-lokasi").serialize();
  var lokasi = $("#lokasi").val();

  if (lokasi == "") {
    $("#err").html("Wajib diisi..!");
    setTimeout(function () {
      $("#err").html("");
    }, 1000);
  } else {
    $("#err").html("");

    $.ajax({
      type: "POST",
      url: "config/simpan_lokasi.php",
      data: data,
      success: function () {
        $(".data-lokasi").load("../ajax/ajax_lokasi.php");
        document.getElementById("form-lokasi").reset();
      },
    });
  }
}

function hapus(id) {
  if (confirm("Semua data berelasi akan dihapus. Lanjutkan..?")) {
    var id = id;
    $.ajax({
      type: "POST",
      url: "config/hapus_lokasi.php",
      data: "id=" + id,
      success: function () {
        $(".data-lokasi").load("../ajax/ajax_lokasi.php");
      },
    });
  } else {
    $(".data-lokasi").load("../ajax/ajax_lokasi.php");
  }
}

function liveEdit(id) {
  if (confirm("ubah..?")) {
    var id = id;
    var lokasi = document.getElementById(id).textContent;
    var data = "id=" + id + "&lokasi=" + lokasi;

    $.ajax({
      type: "POST",
      url: "config/ubah_lokasi.php",
      data: data,
      success: function () {
        $(".data-lokasi").load("../ajax/ajax_lokasi.php");
      },
    });
  } else {
    $(".data-lokasi").load("../ajax/ajax_lokasi.php");
  }
}
