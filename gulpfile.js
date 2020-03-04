const { src, dest, series, parallel, watch } = require('gulp');
const browserSync = require('browser-sync').create();
const fs = require('fs');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
var packageJson = JSON.parse(fs.readFileSync('package.json'));


function compileSass() {
	return src('sass/style.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(dest('./'))
		.pipe(browserSync.stream());
}


function compileJs() {
	return src([
		'javascript/vendor/*.js',
		'javascript/modules/*.js',
		'javascript/zero.js',
	])
		.pipe(concat('script.js'))
		.pipe(dest('./'))
		.pipe(browserSync.stream());
}


function runBrowserSync(done) {
	browserSync.init({
		logPrefix: packageJson.name,
		logFileChanges: false,
		notify: {
			styles: {
				top: 'auto',
				bottom: '0',
				padding: '4px',
				fontSize: '12px',
				borderBottomLeftRadius: '0'
			}
		},
		open: false,
		proxy: 'localhost/' + packageJson.name,
		ui: false
	});

	done();
}


function watchFiles(done) {
	watch('./sass/**/*', compileSass);
	watch('./javascript/**/*', compileJs);

	done();
}


exports.default = series(
	parallel(
		compileSass,
		compileJs
	),
	watchFiles,
	runBrowserSync
);