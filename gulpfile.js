var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var sassdoc = require('sassdoc');
var browserSync  = require('browser-sync').create();
var wait = require('gulp-wait');
var csso = require('gulp-csso');
var prefix = require('gulp-autoprefixer'); 

var input = 'css/*';
var main_scss = 'sass/main.scss';
var output = 'dist/';

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

var sassdocOptions = {
  dest: 'sassdoc/'
};

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

var notify = require("gulp-notify");

gulp.task('sass', ['main']);

gulp.task('main', function () {
  return gulp
    .src(main_scss)
    .pipe(sourcemaps.init())
    .pipe(wait(100))
    .pipe(sass(sassOptions)).on('error', notify.onError(function (error) {
  return "Problem file : " + error.message;
  }))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(concat('main.css')) // this is what was missing
    .pipe(csso({
      sourceMap: true
    }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(output))
    .pipe(browserSync.stream())
    // .pipe(sassdoc())
    // Release the pressure back and trigger flowing mode (drain)
    // See: http://sassdoc.com/gulp/#drain-event
    .resume();
});


gulp.task('sassdoc', function () {
  return gulp
    .src(main_scss)
    .pipe(sassdoc(sassdocOptions))
    .resume();
});

gulp.task('default', ['sass', 'watch' /*, possible other tasks... */]);

gulp.task('prod', ['sassdoc'], function () {
  return gulp
    .src(input)
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(concat('main.min.css'))
    .pipe(gulp.dest(output));
});

gulp.task('watch', function() {
  browserSync.init({
    files: ['**/*.php', '*.php'],
    proxy: 'http://localhost/starter',
    snippetOptions: {
      whitelist: ['/wp-admin/admin-ajax.php'],
      blacklist: ['/wp-admin/**']
    }
  });
  gulp.watch('sass/**/*', ['sass']);
});

gulp.task('css', function () { 
  return gulp.src('src/app.css') 
      .pipe(prefix('last 2 versions')) 
      .pipe(gulp.dest('dist')); 

}); 