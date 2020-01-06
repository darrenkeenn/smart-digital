/* Required packages */
var gulp = require("gulp");
var util = require("gulp-util");

var sass = require("gulp-sass");

var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var sorter = require("postcss-sorting");
var cssnano = require("cssnano");

var is_production = util.env && util.env === 'prod';

/* Gulp tasks */

function compilePostcss() {
  console.log("PostCSS ran");
  var postcss_tools = [
   autoprefixer({
     cascade: false
   }),
   sorter({
     "sort-order": "csscomb"
   })
  ];

  if (is_production) {console.log('running');postcss_tools.push(cssnano())};

  return gulp
   .src("./assets/style.css")
   .pipe(postcss(postcss_tools))
   .pipe(gulp.dest("."));
}

function compileSass() {
  return gulp
    .src("./assets/sass/style.scss")
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(gulp.dest("./assets"));
}

function watchSass() {
  return gulp.watch("**/*.scss", gulp.series(compileSass));
}
function watchCss() {
  return gulp.watch("./assets/style.css", gulp.series(compilePostcss));
}

var watch = gulp.series(compileSass, compilePostcss, gulp.parallel(watchSass, watchCss));

module.exports = { watch: watch };
