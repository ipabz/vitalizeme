$(function () {
	
	$(document).delegate('.thelink', 'click', function(e) {
		$('.loading_container').show();	
	});
	
	$(document).delegate('.month_current, .month_passed', 'click', function(e) {
		$('.loading_container').show();	
		window.location = $(this).attr('data-href');
	});
	
	$(document).delegate('.star', 'click', function(e) {
		e.preventDefault();
		
		$('.loading_container').show();	
		var _ref = $(this);
		var cl = _ref.attr('class');
		cl = cl.replace('-empty', '');
		
		$.get($(this).attr('href'), function() {
			_ref.attr('class', cl);
			$('.loading_container').hide();
		});
		
		return false;
	});
		
});