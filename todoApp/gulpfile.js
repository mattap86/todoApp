var gulp = require('gulp')
var sass = require('gulp-sass');
var babel = require('gulp-babel')

gulp.task('sass', function() {
    return gulp.src('public/scss/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
        .pipe(sass())
        .pipe(gulp.dest('public/css'))
})

gulp.task('watch', function(){ //will watch for gulpfile
    gulp.watch('public/scss/**/*.scss', ['sass']);
    // Other watchers
})

gulp.task('babel', function () { //converts ES6 to ES5
    return gulp.src("public/js/display.js")
        .pipe(babel())
        .pipe(gulp.dest("dist"))
})