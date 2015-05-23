/**
 * Created by lisabruney on 3/12/15.
 */
var gulp  = require('gulp'),
    gutil   = require('gulp-util'),
    watch   = require('node-watch'),
    exec = require('child_process').exec,
    basePath = './tools/';

gulp.task('jade-all', function() {
    exec('jade --pretty --extension php '+basePath+'views --out ./app/views', function(err, stdout, stderr) {
        gutil.log(stdout);
    });
});

gulp.task('jade', function() {
  var staticPath = './app/views/';
  watch(basePath+'views/', function(fileJade) {
    console.log('Jade changed...'+fileJade);
    exec('jade --pretty --extension php ./'+fileJade+' --out '+staticPath, function(err, stdout, stderr) {
      gutil.log(stdout);
    });
  });
});

gulp.task('stylus', function() {
  watch(basePath+'stylus/', function(file) {
    console.log('Stylus changed...');
    exec('stylus '+basePath+'stylus/app*.styl -c --out ./assets/css/', function(err, stdout, stderr) {
      gutil.log(stdout);
    });
  });
});

gulp.task('default', ['jade', 'stylus']);