// Headroom.js
{
	'use strict';
	let Headroom = require('../vendor/headroom');
	let headerMain = {
		ele: document.querySelector('#topbar'),
		options: {
			classes: {
				initial: 'js-headroom',
				pinned: 'is-pinned',
				unpinned: 'is-unpinned',
				top: 'is-top',
				notTop: 'is-not-top',
				bottom: false,
				notBottom: false
			}
		}
	};
	let headroom = new Headroom(headerMain.ele, headerMain.options);
	headroom.init();
}