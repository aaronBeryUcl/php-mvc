// Fit iframe JS

$(document).ready(function(){
  
	
	
	// add view source
	viewsource();
  
  // resize parent page's iframe
  $(window).load(function () {
  	
  	var body = $('body');
  	
  	parent.resizeiframe(body.attr('id'), body[0].scrollHeight);
  
  });

});

viewsource = function () {

	var body = $('body'),
			patternhtml = body.html().replace(/[<>]/g, function(m) { return {'<':'&lt;','>':'&gt;'}[m]})
																		.replace(/\t/g, '  ')
																		.replace(/((ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?)/gi,'<a href="$1">$1</a>')
																		.replace(/&lt;!--PATTERN-JS(.|\n)*/,'');
	
	body.addClass('viewsource')
			.prepend( '<h2 class="label">Example</h2>')
			.append( '<h2 class="label">HTML</h2><pre class="prettyprint">' + patternhtml + '</pre>' );
	

};