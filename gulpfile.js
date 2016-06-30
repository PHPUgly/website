var gulp = require('gulp');
var sass = require('gulp-sass');
var gutil = require('gulp-util');
var source = require('vinyl-source-stream');
var browserify = require('browserify');
var uglify = require('gulp-uglify');
var vueify = require('vueify');
var streamify = require('gulp-streamify');
var shell = require('gulp-shell');
var browserSync = require('browser-sync').create();


gulp.task('default', ['watch']);

gulp.task('sass', function() {
    gulp.src('resources/assets/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./content/'));
});

gulp.task('browserify', function () {
    browserify(['resources/assets/js/app.js'])
        .transform(vueify)
        .bundle()
        .on('error', function(e) {
            gutil.log(e);
        })
        .pipe(source('app.js'))
        .pipe(streamify(uglify()))
        .pipe(gulp.dest('./content/'));
});

gulp.task('katana', function () {
    gulp.src('content/**/*.php')
        .pipe(shell([
            'php katana build'
        ]));
});

gulp.task('watch', function() {
    gulp.watch('resources/assets/js/**/*.js', ['browserify']);
    gulp.watch('resources/assets/sass/**/*.scss', ['sass']);
    gulp.watch('content/**/*.php', ['katana']);
});