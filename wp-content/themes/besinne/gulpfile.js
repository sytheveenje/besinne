var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create();

// Set paths for tasks
var paths = {
    html: ['*.php', '*.html'],
    scss: ['assets/sass/*.scss', 'assets/sass/**/*.scss']
};

gulp.task('scss', function() {
    gulp.src(paths.scss)
    .pipe(sass())
    .pipe(autoprefixer({ 
        browsers: ['last 2 versions'],
        cascade: false
    }))
    .pipe(gulp.dest('assets/css/.'))
    .pipe(browserSync.stream());
});

// Static server
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: 'localhost/besinne' // Add your own domain here
    });
});

gulp.task('watch', function() {
    gulp.watch(paths.scss, ['scss']);
    gulp.watch(paths.html).on('change', browserSync.reload);
});

gulp.task('default', ['watch', 'scss', 'browser-sync']);