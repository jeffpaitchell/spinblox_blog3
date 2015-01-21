$(function () {
	$('.menu-smart > ul').toggleClass('no-js js');
	$('.menu-smart .js ul').hide();
	$('.menu-icon-res').click(function(e) {
		$('.menu-smart .js ul').slideToggle(200);
		$('.clicker').toggleClass('active');
		e.stopPropagation();
	});
	$(document).click(function() {
		if ($('.menu-smart .js ul').is(':visible')) {
			$('.menu-smart .js ul', this).slideUp();
			$('.clicker').removeClass('active');
		}
	});


	
});































