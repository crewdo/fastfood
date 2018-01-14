$(document).ready(function() {

    $('#table_1').DataTable( {
        "order": [[ 0, "desc" ]],
        "iDisplayLength": 25,
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    } );

    $('.pagination li').addClass('page-item');
    $('.pagination li a').addClass('page-link');
    $('#more-image').click(function(event) {
    	var le =parseInt($('.more-image').children().length) + 1;
    	$('.more-image').append('<div class="col-md-3"><input type="file" id="input-file-now" class="dropify" name="product_image_'+le+'"/><button class="btn btn-danger delete_image">Delete this image</button></div>');
    });
    $(document).on('click', '.delete_image', function(event) {
    	event.preventDefault();
    	$(this).parent().remove();
    });
        $(document).on('click', '.product-img :not(.cancel)button', function(event) {
    	event.preventDefault();
    	var parent = $(this).parent();
    	$(this).html('Cancel');
    	$(this).addClass('cancel');
    	parent.find('img').hide();
    	parent.find('input[type=file]').show();
    });
                $(document).on('click', '.product-img .cancel', function(event) {
      	var parent = $(this).parent();
    	$(this).html('Change image');
    	$(this).removeClass('cancel');
    	parent.find('img').show();
    	parent.find('input[type=file]').hide();
    });




} );

