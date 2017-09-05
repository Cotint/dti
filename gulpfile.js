'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var concat = require('gulp-concat');
// var stripDebug = require('gulp-strip-debug');

gulp.task('sass', function(){
    // return gulp.src('app/scss/**/*.scss')
    return gulp.src('app/scss/style.scss')
        .pipe(sass())
        .pipe(gulpIf('*.css', cssnano()))
        .pipe(gulp.dest(''))
});

gulp.task('uglify', function(){
    return gulp.src('app/js/**/*.js')
        .pipe(concat('./app.js'))
        .pipe(gulpIf('*.js', uglify()))
        .pipe(gulp.dest('dest/js'))
});


gulp.task('images', function(){
    return gulp.src('app/images/**/*.+(png|jpg|jpeg|gif|svg)')
        .pipe(imagemin())
        .pipe(gulp.dest('dest/images'))
});

gulp.task('fonts', function() {
    return gulp.src('app/fonts/**/*')
        .pipe(gulp.dest('dest/fonts'))
})

gulp.task('watch', [ 'sass' , 'uglify' , 'images' , 'fonts' ] , function(){
    gulp.watch('app/scss/**/*.scss', ['sass']);
    gulp.watch('app/js/**/*.js', ['uglify']);
});


