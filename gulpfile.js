    // Load plugins
    var gulp = require('gulp'),
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
        livereload = require('gulp-livereload'),
        del = require('del');

    // Styles
    gulp.task('styles', function() {
        return gulp.src('resources/assets/sass/app.scss')
            .pipe(sass({
                includePaths: ['bower_components/foundation-apps/scss']
            }))
            .pipe(autoprefixer('last 2 version'))
            .pipe(gulp.dest('public/css'))
            .pipe(concat('app.css'))
            .pipe(gulp.dest('public/css'))
            .pipe(minifycss())
            .pipe(rename({
              suffix: '.min'
            }))
            .pipe(gulp.dest('public/css'))
            .pipe(notify({ message: 'Styles task complete' }));
    });

    // Scripts
    gulp.task('scripts', function() {
        return gulp.src([
                'bower_components/foundation-apps/js/angular/foundation.js',
                'bower_components/foundation-apps/js/angular/app.js',
                'bower_components/angular/angular.js',
                'resources/assets/scripts/app.js'
            ])
            .pipe(concat('app.js'))
            .pipe(gulp.dest('public/js'))
            .pipe(uglify())
            .pipe(rename({
                suffix: '.min'
            }))
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
        gulp.start('styles', 'scripts', 'images', 'watch');
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
        gulp.watch(['public/**']).on('change', livereload.changed);
    });
