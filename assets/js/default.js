$(function () {
	
	$(document).delegate('.thelink', 'click', function(e) {
		$('.loading_container').show();	
	});
	
	$(document).delegate('.month_current, .month_passed', 'click', function(e) {
		$('.loading_container').show();	
		window.location = $(this).attr('data-href');
	});
		
});