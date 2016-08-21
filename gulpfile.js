var gulp = require('gulp'),
	$ = require('gulp-load-plugins')(),
	pngquant = require('imagemin-pngquant'),
	browserSync = require('browser-sync');

var theme = {
	css: './assets/css/',
	sass: './assets/sass/',
	js: './assets/js/',
	precom: './assets/js/pre-compress/',
	src: './assets/js/src/',
	img: './assets/img/',
	svg: './assets/svg/',
	svgIcons: './assets/svg/icons/',
};

/* =========================================  タスク  ================================ */
// $.compass
// Main CSS
gulp.task('style', function() {
	gulp.src( theme.sass + '**/*.scss' )
		.pipe($.plumber({
		errorHandler: $.notify.onError('Error: <%= error.message %>')
	}))
		.pipe($.compass({
		config_file: './config.rb',
		css: theme.css,
		sass: theme.sass,
		image: theme.img,
		javascript: theme.js,
		comments: true
	}))
		.pipe($.autoprefixer())
		.pipe($.cssmin())
		.pipe(gulp.dest( theme.css ))
		.pipe(browserSync.reload({ stream: true }));
});

// SVG Icons & Images
// SVG
gulp.task('svg', function() {
	gulp.src( theme.svgIcons + '*.svg')
		.pipe( $.plumber({
		errorHandler: function(error) {
			console.log(error.messageFormatted);
			this.emit('end');
		}
	}))
		.pipe($.svgmin())
		.pipe($.svgstore({ inlineSvg: true }))
		.pipe($.cheerio({
		run: function ($) {
			$('svg').addClass('hide');
			$('[fill]').removeAttr('fill');
		},
		parserOptions: { xmlMode: true }
	}))
		.pipe(gulp.dest(theme.svg))
		.pipe(browserSync.reload({ stream: true }));
});
gulp.task('svg2png', function() {
	gulp.src(theme.svgIcons + '*.svg')
		.pipe( $.plumber({
		errorHandler: function(error) {
			console.log(error.messageFormatted);
			this.emit('end');
		}
	}))
		.pipe($.svg2png())
		.pipe($.rename({
		prefix: 'icons.svg.'
	}))
		.pipe($.imagemin())
		.pipe(gulp.dest(theme.svg));
});

// JAVASCRIPT
// For inline scripts
gulp.task('precom-scripts', function() {
	gulp.src( theme.precom + '*.js')
		.pipe($.plumber({
		errorHandler: $.notify.onError('Error: <%= error.message %>')
	}))
		.pipe($.uglify())
		.pipe($.rename({
		extname: '.min.js'
	}))
		.pipe(gulp.dest( theme.js ))
		.pipe(browserSync.reload({ stream: true }));
});
// Main theme App Javascript
gulp.task('src-js', function() {
	gulp.src( theme.src + '*.js')
		.pipe($.concat('vendor.js'))
		.pipe($.plumber({
		errorHandler: $.notify.onError('Error: <%= error.message %>')
	}))
		.pipe($.uglify())
		.pipe($.rename({
		extname: '.min.js'
	}))
		.pipe(gulp.dest( theme.js ))
		.pipe(browserSync.reload({ stream: true }));
});


// Browser Sync
gulp.task('server', function() {
	browserSync({
		proxy: 'www.keizai-kassei.dev/'
	});
});
gulp.task('bs-reload', function() {
	browserSync.reload();
});

/* =========================================  WATCH  ================================ */
gulp.task('watch', [ 'style', 'precom-scripts', 'src-js', 'server', 'svg', 'svg2png' ], function() {
	gulp.watch( theme.sass + '{,/**/}{,/**/}{,/**/}{,/**/}*.scss', ['style'] );
	gulp.watch( theme.precom + '*.js', ['precom-scripts'] );
	gulp.watch( theme.src + '*.js', ['src-js'] );
	gulp.watch( './{,/**/}{,/**/}{,/**/}{,/**/}*.php', ['bs-reload'] );
	gulp.watch( theme.svgIcons + '*.svg', ['svg', 'svg2png'] );
});
gulp.task('default', ['watch']);
