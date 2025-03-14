import gulp from "gulp";
import terser from "gulp-terser"; // Minifies JavaScript
import concat from "gulp-concat"; // Combines JS files
import babel from "gulp-babel"; // Transpile ES Modules
import rename from "gulp-rename"; // ✅ Import gulp-rename
import browserSync from "browser-sync";
import gulpSass from "gulp-sass";
import * as dartSass from "sass";
import cleanCSS from "gulp-clean-css"; // Minifies CSS
import tailwindcss from "tailwindcss";
import autoprefixer from "autoprefixer";
import postcss from "gulp-postcss"; // ✅ Add this import
import imagemin from "gulp-imagemin";
import mozjpeg from "imagemin-mozjpeg"; // ✅ Import separately
import optipng from "imagemin-optipng"; // ✅ Import separately
import svgo from "imagemin-svgo"; // ✅ Import separately

// Set gulp-sass compiler
const sassCompiler = gulpSass(dartSass);

// Paths
const paths = {
    js: "resources/js/**/*.js",
    jsDest: "public/js",
    views: "resources/views/**/*.blade.php",
    alpineSrc: "node_modules/alpinejs/dist/cdn.min.js", // Alpine.js source
    alpineDest: "public/js/", // Destination for Alpine.js
    css: "resources/css/**/*.css",
    scss: "resources/scss/**/*.scss",
    cssDest: "public/css",
    images: "resources/images/**/*.{png,jpg,jpeg,gif,svg}", // ✅ Image source
    imagesDest: "public/images", // ✅ Destination
};



// ✅ Optimize and Copy Images
export const images = () => {
    return gulp
        .src(paths.images)
        .pipe(imagemin([
            mozjpeg({ quality: 75, progressive: true }),
            optipng({ optimizationLevel: 5 }),
            svgo({
                plugins: [
                    { name: 'removeViewBox', active: false } // ✅ Correct way to specify svgo plugin
                ]
            })
        ]))
        .pipe(gulp.dest(paths.imagesDest));
};


// ✅ Process JavaScript (Minify and Bundle)
export const js = () => {
    return gulp
        .src(["resources/js/dark-mode.js", "resources/js/app.js"])
        .pipe(babel())
        .pipe(concat("app.min.js"))
        .pipe(terser())
        .pipe(gulp.dest(paths.jsDest))
        .pipe(browserSync.stream());
};

// ✅ Copy Alpine.js Separately
export const alpine = () => {
    return gulp.src(paths.alpineSrc)
        .pipe(rename("alpine.min.js")) // ✅ Now rename() will work
        .pipe(gulp.dest(paths.alpineDest));
};

export const css = () => {
    return gulp
        .src(paths.css)
        .pipe(concat("style.min.css"))
        .pipe(cleanCSS())
        .pipe(gulp.dest(paths.cssDest))
        .pipe(browserSync.stream());
};

// ✅ Process SCSS (Compile, Minify, and Bundle)
// ✅ Process SCSS with Tailwind CSS
export const scss = () => {
    return gulp
        .src("resources/scss/style.scss") // Your main SCSS file
        .pipe(sassCompiler().on("error", sassCompiler.logError))
        .pipe(postcss([tailwindcss(), autoprefixer()])) // Process Tailwind & Autoprefixer
        .pipe(concat("style.min.css"))
        .pipe(cleanCSS()) // Minify CSS
        .pipe(gulp.dest("public/css"))
        .pipe(browserSync.stream());
};

// ✅ Watch files & reload
export const serve = () => {
    browserSync.init({
        proxy: "127.0.0.1:8000",
        notify: false,
    });

    gulp.watch(paths.css, css);
    gulp.watch(paths.scss, scss);
    gulp.watch(paths.js, js);
    gulp.watch(paths.images, images);
    gulp.watch(paths.views).on("change", browserSync.reload);
};

// ✅ Default Task (Processes JS and Alpine.js)
export default gulp.parallel(js, alpine, css, scss, images, serve);
