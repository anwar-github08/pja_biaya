$(document).ready(function () {
  $(".title").html("Biaya");
  navActive("biaya");

  $("#form-tr-biaya").hide();

  $(".data-tr-biaya").load("../ajax/ajax_tr_biaya.php");

  $(".show-form").click(function () {
    $("#form-tr-biaya").fadeToggle("slow");
  });

  $(".tambah").click(function () {
    tambahdata();
  });

  $(".batal").click(function () {
    batal();
  });

  config = {
    dateFormat: "d-m-Y",
  };
  flatpickr("#tgl", config);
});

function tambahdata() {
  var data = $("#form-tr-biaya").serialize();

  var tgl = $("#tgl").val();
  var total = $("#total").val();

  if (tgl == "" || total == "") {
    $(".err").html("Lengkapi data..!!");
    setTimeout(() => {
      $(".err").html("");
    }, 1000);
  } else {
    $.ajax({
      type: "POST",
      url: "config/simpan_tr_biaya.php",
      data: data,
      success: function () {
        $(".data-tr-biaya").load("../ajax/ajax_tr_biaya.php");
        $("#form-tr-biaya").trigger("reset");
      },
    });
    //  console.log(data);
  }
}

function batal() {
  $("#form-tr-biaya").trigger("reset");
}
