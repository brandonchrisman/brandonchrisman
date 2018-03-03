'use strict';

var gulp         = require('gulp');
var scss         = require('gulp-sass');

gulp.task('scss', function () {
  return gulp.src('css/**/*.sass')
    .pipe(scss().on('error', scss.logError))
    .pipe(gulp.dest('css'));
});

gulp.task('watch', function () {
  gulp.watch('css/**/*.sass', ['scss']);
});

gulp.task('build', ['scss']);
