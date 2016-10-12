'use strict';

/**
 * Image圧縮
 */
let gulp = require('gulp'),
	config = require('../config'),
	$ = require('./plugins');

gulp.task('image', () => {
	return gulp.src(config.path.image.src)
		.pipe($.plumber({
			errorHandler: (error) => {
				console.log(error.messageFormatted);
				this.emit('end');
			}
		}))
		.pipe($.imagemin())
		.pipe(gulp.dest(config.path.image.dest))
		.pipe($.browser.stream());
});