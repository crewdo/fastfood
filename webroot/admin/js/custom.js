$(document).ready(function() {

    $('#table_1').DataTable( {
        "order": [[ 0, "desc" ]],
        "iDisplayLength": 25,
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    } );

    $('.pagination li').addClass('page-item');
    $('.pagination li a').addClass('page-link');
    $('#more-image').click(function(event) {
    	$('.more-image').append('<div class="col-md-3"><input type="file" id="input-file-now" class="dropify" name="product_image[]"/><button class="btn btn-danger delete_image">Delete this image</button></div>');
    });
    $(document).on('click', '.delete_image', function(event) {
    	event.preventDefault();
    	$(this).parent().remove();
    });



} );

