/*jslint browser: true*/
jQuery(document).ready(function($) {
	var adminBar = ( document.getElementById('wpadminbar') !== null ) ? $('#wpadminbar').height() : 0,
	mainNav = ( document.getElementById('sticky-topbar') !== null ) ? $('#topbar').height() : 0,
	headerHeight = parseInt(adminBar) + parseInt(mainNav);
// ============================== svg4everybody.min.js Initial ============================================================================= //
	svg4everybody();
// ============================== Foundation 6 ============================================================================= //
	$(document).foundation();
// ============================== Main Nav Effects ============================================================================= //
	// Menu Open Trigger
	$('#btn-menu').click(function() {
		$('html, body').toggleClass('active-overlay');
		$('#responsive-menu').toggleClass('animated');
		$(this).children().children().toggleClass('menu-icon');
	});
// ============================== Page Up Effects ============================================================================= //
	$('[href^="#"]').on('click', function() {
		var href = $(this).attr('href'),
			target = $(href === '#' || href === '' ? 'html' : href),
			position = target.offset().top - headerHeight;
		$('html, body').animate({
			scrollTop: position
		}, 550, 'swing');
	});
	// 郵便番号から住所自動入力
	if ($('#zip').length !== 0) {
		$('#zip').keyup(function() {
			AjaxZip3.zip2addr(this, '', 'addr', 'addr');
		});
	}
	// 名前のフリガナを自動入力
	if ($('#user-name,#user-name-kana').length !== 0) {
		$.fn.autoKana('#user-name', '#user-name-kana', {
			katakana: true
		});
	}
// ============================== COUNTDOWN TIMER ============================================================================= //
	function countdownTimer() {
		var $this = $('#countdown-timer .timervalue'),
			timesets = $this.data('cdt'),
			now = new Date(),
			tset = Math.floor( now / 1000 ),
			counter = timesets - tset;
		
		// Seconds
		var seconds = Math.floor( counter % 60 ),
			seconds = ( seconds < 10 && seconds >= 0 ) ? '0' + seconds : seconds;
		
		// Minutes
		counter = counter / 60;
		var minutes = Math.floor( counter % 60 ),
			minutes = ( minutes < 10 && minutes >=0 ) ? '0' + minutes : minutes;
		
		// Hours
		counter = counter / 60;
		var hours = Math.floor( counter & 24 ),
			hours = ( hours < 10 && hours >= 0 ) ? '0' + hours : hours;
		
		// Days
		counter = counter / 24;
		var days = Math.floor( counter ),
			days = ( days < 10 && days >= 0 ) ? '0' + days : days;
		
		$this.find('.number-seconds').html(seconds);
		$this.find('.number-minutes').html(minutes);
		$this.find('.number-hours').html(hours);
		$this.find('.number-days').html(days);
	}
	cdtInit = setInterval( countdownTimer, 100 );
});
