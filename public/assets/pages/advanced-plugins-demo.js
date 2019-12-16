/*
 Template Name: Scoxe - Admin & Dashboard Template
 Author: Myra Studio
 File: Advanced Plugins
*/


// Autonumeric

$('[data-toggle="switchery"]').each(function (a, e) {
    new Switchery($(this)[0], $(this).data())
});

$('[data-toggle="select2"]').select2({ width: '100%' });
var table = $('#add-purchase').DataTable({
    "paging":   false,
    "ordering": false,
    "searching": false,
    "info":     false
});
