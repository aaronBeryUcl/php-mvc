$(function() {
		
	$('.tabs a').click(function (e) {
			
			showtab($(this));
			
	});
	
	/* Getting last updated using GitHub's API - beta and buggy, so degrading gracefully */
	
	$.ajax({
		url: 'https://api.github.com/repos/ucl-wams/indigo',
		dataType: 'jsonp',
		success: function(data) {
			
			$('#site-logo, #download-button-large').after('<p class="version">Last updated: <a href="https://github.com/UCL-WAMS/indigo/commits/master" title="View commit history">' + data['meta']['Last-Modified'] + '</a></p>');
		
		}
	});
	
	$('#nav-mobile-menu, #nav-mobile-back').click(function (e) {
		
		var body = $('body');
		
		if (body.hasClass('mobile-open')) body.removeClass('mobile-open');
		else body.addClass('mobile-open');
		
		prevent(e);

	});
	
});

showtab = function (t) {

	var section = t.attr('href'); // #section1
	
	t.closest('.tabs').find('a').removeClass('on');
	
	t.addClass('on');
	
	t.closest('.pattern').find('.section').removeClass('show');
	
	$('.section').addClass('show');
	
};

resizeiframe = function (id, height){

	$('#' + id).height(parseInt(height, 10) + 10 + 'px');
    
};

objSize = function(obj) {

	var size = 0, key;
	
	for (key in obj) {
		if (obj.hasOwnProperty(key)) size++;
	}
	
	return size;
	
}

prevent = function (e) {

	if (e.preventDefault) e.preventDefault();
	else event.returnValue = false;

};