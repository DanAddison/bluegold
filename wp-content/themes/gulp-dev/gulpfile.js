var gulp = require("gulp"),
  sass = require("gulp-sass"),
  sassGlob = require("gulp-sass-glob"),
  postcss = require("gulp-postcss"),
  autoprefixer = require("autoprefixer"),
  cssnano = require("cssnano"),
  concat = require("gulp-concat"),
  uglify = require("gulp-uglify");

var browserSync = require("browser-sync").create();

var paths = {
  styles: {
    src: ["../wheelbarrow/assets/scss/style.scss"],
    dest: "../wheelbarrow/assets/compiled"
  },
  js: {
    src: [
      "../wheelbarrow/assets/js/functions-lib.js",
      "../wheelbarrow/assets/js/lib/*.js",
      "../wheelbarrow/assets/js/modules/dropdownMenu.js",
      //	 		"../wheelbarrow/assets/js/modules/expandable.js",
      "../wheelbarrow/assets/js/modules/cookieConsent.js",
      "../wheelbarrow/assets/js/modules/responsiveMenu.js",
      "../wheelbarrow/assets/js/*.js",
      "!../wheelbarrow/assets/js/_*.js"
    ],
    dest: "../wheelbarrow/assets/compiled"
  },
  browsersync: {
    watch: [
      "../wheelbarrow/*.php",
      "../wheelbarrow/parts/blocks/*.php",
      "../wheelbarrow/parts/*.php",
      "../wheelbarrow/functions/*.php",
      "../wheelbarrow/functions/**/*",
      "../wheelbarrow/template-pages/*.php",
      "../wheelbarrow/template-parts/*.php",
      "../wheelbarrow/template-parts/**/*"
    ]
  }
};

function handleError(err) {
  console.log(err.toString());
  this.emit("end");
}

function style() {
  return gulp
    .src(paths.styles.src)
    .pipe(sassGlob())
    .pipe(sass())
    .on("error", sass.logError)
    .pipe(postcss([autoprefixer("last 2 versions", "ie >= 9"), cssnano()]))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

function scripts() {
  return gulp
    .src(paths.js.src)
    .pipe(concat("footer.js"))
    .pipe(uglify())
    .on("error", handleError)
    .pipe(gulp.dest(paths.js.dest))
    .pipe(browserSync.stream());
}

function reload() {
  browserSync.reload();
}

function watch() {
  browserSync.init({
    proxy: "bluegold.localhost",
    notify: false
  });

  style();
  scripts();

  gulp.watch("../wheelbarrow/assets/scss/**/*.scss", style);
  gulp.watch(paths.browsersync.watch).on("change", browserSync.reload);
  gulp.watch(paths.js.src, scripts);
}

function defaultTask() {
  watch();
}

exports.style = style;
exports.scripts = scripts;
exports.default = defaultTask;
