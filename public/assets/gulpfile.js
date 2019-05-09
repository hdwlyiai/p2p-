const gulp = require('gulp');
// js压缩
const uglify = require('gulp-uglify');
// 重命名
const rename = require('gulp-rename');
// css编译
const less = require('gulp-less');
// css压缩
const cleanCss = require('gulp-clean-css');
// 图片压缩
const imagemin = require('gulp-imagemin');
// 服务器
const browserSync = require('browser-sync').create();
const reload = browserSync.reload;

/**
 * 编译并压缩css
 */
gulp.task('css', () =>
    gulp.src('less/*.less')
        .pipe(less())
        .pipe(cleanCss({ compatibility: 'ie8' }))
        .pipe(rename(function (path) {
            path.extname = '.min.css'
        }))
        .pipe(gulp.dest('css'))
);

// 开启服务
gulp.task('serve', function () {
    gulp.watch('assets/scripts/*.js', gulp.series('js'));
    gulp.watch('assets/styles/less/*.less', gulp.series('css'));
    gulp.watch('assets/images/*', gulp.series('img'));
});
