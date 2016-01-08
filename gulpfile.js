    // Load plugins
    var elixir = require('laravel-elixir'),
        gulp = require('gulp'),
        sass = require('gulp-sass'),
        autoprefixer = require('gulp-autoprefixer'),
        minifycss = require('gulp-minify-css'),
        jshint = require('gulp-jshint'),
        uglify = require('gulp-uglify'),
        imagemin = require('gulp-imagemin'),
        rename = require('gulp-rename'),
        concat = require('gulp-concat'),
        notify = require('gulp-notify'),
        cache = require('gulp-cache'),
        del = require('del');
    // Styles
    gulp.task('styles', function() {
    return sass('resources/assets/sass/app.scss', { style: 'expanded' })
        .pipe(autoprefixer('last 2 version'))
        .pipe(gulp.dest('public/css'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(minifycss())
        .pipe(gulp.dest('public/css'))
        .pipe(notify({ message: 'Styles task complete' }));
    });
    // Scripts
    gulp.task('scripts', function() {
    return gulp.src('resources/assets/scripts/**/*.js')
        .pipe(jshint('.jshintrc'))
        .pipe(jshint.reporter('default'))
        .pipe(concat('main.js'))
        .pipe(gulp.dest('public/js'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify())
        .pipe(gulp.dest('public/js'))
        .pipe(notify({ message: 'Scripts task complete' }));
    });
    // Images
    gulp.task('images', function() {
    return gulp.src('resources/assets/images/**/*')
        .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
        .pipe(gulp.dest('public/img'))
        .pipe(notify({ message: 'Images task complete' }));
    });
    // Clean
    gulp.task('clean', function() {
    return del(['public/css', 'public/js', 'public/img']);
    });
    // Default task
    gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts', 'images');
    });
    // Watch
    gulp.task('watch', function() {
    // Watch .scss files
    gulp.watch('resources/assets/sass/**/*.scss', ['styles']);
    // Watch .js files
    gulp.watch('resources/assets/scripts/**/*.js', ['scripts']);
    // Watch image files
    gulp.watch('resources/assets/images/**/*', ['images']);
    // Create LiveReload server
    livereload.listen();
    // Watch any files in dist/, reload on change
    gulp.watch(['dist/**']).on('change', livereload.changed);
    });

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// elixir(function(mix) {
//     mix.sass('app.scss');
// });
