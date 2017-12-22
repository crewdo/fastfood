$(document).ready(function() {

    $('#table_1').DataTable( {
        "order": [[ 0, "desc" ]],
        "iDisplayLength": 25,
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    } );

    $('.pagination li').addClass('page-item');
    $('.pagination li a').addClass('page-link');



} );

