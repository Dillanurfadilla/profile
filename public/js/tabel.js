$(document).ready(function() {
    // Sembunyikan kolom yang tidak perlu ditampilkan di awal
    $(".hidden-column").hide();
    $(".toggle-details").text("Show all").removeClass("btn-danger").addClass("btn-success");

    $(".toggle-details").click(function() {
        var id = $(this).data("id");
        var row = $("#row-" + id);
        
        if (row.hasClass("expanded-row")) {
            // Jika sudah terbuka, sembunyikan kembali semua kolom terkait
            row.removeClass("expanded-row");
            $(".hidden-column").hide();
            $(this).text("Show all").removeClass("btn-danger").addClass("btn-success");
        } else {
            // Tampilkan semua kolom terkait
            row.addClass("expanded-row");
            $(".hidden-column").show();
            $(this).text("Hide").removeClass("btn-success").addClass("btn-danger");
        }
    });
});
