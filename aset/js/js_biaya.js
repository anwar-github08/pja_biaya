$(document).ready(function () {
  // title dan nav
  $(".title").html("Master | Biaya");
  navActive("master");

  $(".data-biaya").load("../ajax/ajax_biaya.php");

  $("#form-biaya").hide();
  $(".show-form").click(function () {
    $("#form-biaya").fadeToggle("slow");
  });

  $(".tambah").click(function () {
    tambahdata();
  });

  $("input").on("keypress", function (e) {
    if (e.which == 13) {
      switch ($(this).attr("id")) {
        case "biaya":
          $(".tambah").click();
          e.preventDefault();
          break;
      }
    }
  });
});

function tambahdata() {
  var data = $("#form-biaya").serialize();
  var biaya = $("#biaya").val();

  if (biaya == "") {
    $("#err").html("Wajib diisi..!");
    setTimeout(function () {
      $("#err").html("");
    }, 1000);
  } else {
    $("#err").html("");

    $.ajax({
      type: "POST",
      url: "config/simpan_biaya.php",
      data: data,
      success: function () {
        $(".data-biaya").load("../ajax/ajax_biaya.php");
        document.getElementById("form-biaya").reset();
      },
    });
  }
}

function hapus(id) {
  if (confirm("Semua data berelasi akan dihapus. Lanjutkan..?")) {
    var id = id;
    $.ajax({
      type: "POST",
      url: "config/hapus_biaya.php",
      data: "id=" + id,
      success: function () {
        $(".data-biaya").load("../ajax/ajax_biaya.php");
      },
    });
  } else {
    $(".data-biaya").load("../ajax/ajax_biaya.php");
  }
}
