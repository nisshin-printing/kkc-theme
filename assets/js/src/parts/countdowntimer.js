! function($) {
  'use strict';
  
  function countdownTimer () {
    var _this = $('#countdown-timer .timervalue'),
        timesets = _this.data('cdt'),
        now = new Date(),
        tset = Math.floor(now / 1000),
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

    _this.find('.number-seconds').html(seconds);
    _this.find('.number-minutes').html(minutes);
    _this.find('.number-hours').html(hours);
    _this.find('.number-days').html(days);
  }
  setInterval(countdownTimer, 100);
}(jQuery);