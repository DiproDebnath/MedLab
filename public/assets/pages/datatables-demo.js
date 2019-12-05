/*
 Template Name: Scoxe - Admin & Dashboard Template
 Author: Myra Studio
 File: Datatables
*/


$(document).ready(function () {
   var b = $("#key-datatable").DataTable({
        keys: !0,
        scrollX: true,
        // buttons: ["copy", "print", "pdf"],
           "processing": true,
           "serverSide": true,
           "ajax": 'http://127.0.0.1:8000/medicine',
            "columns": [
            { "data": "DT_RowIndex" },
            { "data": "medicine_name" },
            { "data": "company_name" },
            { "data": "type_name" },
            { "data": "generic_name" },
            { "data": "strength" },
            { "data": "price" },
            { "data": "dash" },

        ],
        language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                            next: "<i class='mdi mdi-chevron-right'>"
                        }
                },

        drawCallback: function () {

            $(".dataTables_paginate > .pagination").addClass("pagination-rounded");

        },

    });
    var btn = document.querySelector("#btn-sidebar");


    btn.addEventListener('click', ()=>{
        var div = document.querySelector(".dataTables_scrollHeadInner");
        div.style.width = div.firstChild.style.width = '100%';
    });

   // b.buttons().container().appendTo("#key-datatable_wrapper .col-md-6:eq(0)");



});
