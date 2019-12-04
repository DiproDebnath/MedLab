/*
 Template Name: Scoxe - Admin & Dashboard Template
 Author: Myra Studio
 File: Datatables
*/


$(document).ready(function () {


   var b = $("#key-datatable").DataTable({
        keys: !0,
       "scrollX": true,
        buttons: ["copy", "print", "pdf"],
        language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                            next: "<i class='mdi mdi-chevron-right'>"
                        }
                },
        drawCallback: function () {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
        }
    });

   b.buttons().container().appendTo("#key-datatable_wrapper .col-md-6:eq(0)");


});