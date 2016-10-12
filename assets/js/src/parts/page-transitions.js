! function($) {
	let adminBar = $('#wpadminbar')[0] ? $('#wpadminbar').height() : 0,
		mainNav = $('#topbar')[0] ? $('#topbar').height() : 0,
		headerHeight = parseInt(adminBar) + parseInt(mainNav);
	console.log(adminBar);
	console.log(mainNav);
	console.log(headerHeight);
	$('[href^="#"]').click(function() {
		let href = $(this).attr('href'),
			target = $(href === '#' || href === '' ? 'html' : href),
			position = target.offset().top - headerHeight;
		$('html, body').animate({
			scrollTop: position
		}, 550, 'swing');
		return false;
	});
}(jQuery);