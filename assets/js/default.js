$(function () {
	
	$(document).delegate('.thelink', 'click', function(e) {
		//$('.loading_container').show();	
	});
	
	$(document).delegate('.month_current, .month_passed', 'click', function(e) {
		//$('.loading_container').show();	
		window.location = $(this).attr('data-href');
	});
	
	$(document).delegate('.star', 'click', function(e) {
		e.preventDefault();
		
		//$('.loading_container').show();	
		var _ref = $(this);
		var cl = _ref.attr('class');
		cl = cl.replace('-empty', '');
		var c_id = $(this).attr('data-chapter-id');
		
		$.get($(this).attr('href'), function() {
			_ref.attr('class', cl);
			$('.article').removeClass('current_step');
			$('#chapter'+c_id).addClass('current_step');
			//$('.loading_container').hide();
		});
		
		return false;
	});
		
});