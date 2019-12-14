

$(document).ready(function() {
    var btn = document.querySelector("#btn-sidebar");

    btn.addEventListener("click", () => {
        var div = document.querySelector(".dataTables_scrollHeadInner");
        div.style.width = div.firstChild.style.width = "100%";
    });

    // b.buttons().container().appendTo("#key-datatable_wrapper .col-md-6:eq(0)");
});
