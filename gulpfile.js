var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
      return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'])
            .pipe(sass())
            .pipe(gulp.dest('src/css'));
});

gulp.task('watch', function () {
      gulp.watch(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss']);
});

gulp.task('default', ['sass', 'watch']);