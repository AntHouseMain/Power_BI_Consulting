var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    rename = require('gulp-rename'),
    autoprefixer = require('gulp-autoprefixer');


gulp.task('sass', function() {
    return gulp.src('app/sass/**/*.sass')
        .pipe(sass())
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(gulp.dest('app/css'))
});

gulp.task('css-min', function() {
    return gulp.src('app/css/**/*.css')
        .pipe(cssnano())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('app/css'));
});

gulp.task('watch', ['css-min', 'sass'], function() {
    gulp.watch('app/sass/**/*.sass', ['sass']);
});
