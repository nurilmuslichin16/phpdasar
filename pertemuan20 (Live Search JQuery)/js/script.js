$(document).ready(function(){

	// hilangkan tombol cari
	$('#tombol-cari').hide()

	// event ketika keyword ditulis
	$('#keyword').on('keyup', function(){
		// munculkan icon loading
		$('.loader').show();

		// ajax menggunkan load
		// $('#container').load('ajax/jamtangan.php?keyword=' + $('#keyword').val());

		// $.get()
		$.get('ajax/jamtangan.php?keyword=' + $('#keyword').val(), function(data){

			$('#container').html(data);
			$('.loader').hide();

		});

	});

});