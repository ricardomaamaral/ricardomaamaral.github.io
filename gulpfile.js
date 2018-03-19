var gulp = require('gulp');
var sass = require('gulp-sass');
var imagemin = require('gulp-imagemin');
var svgSprite = require('gulp-svg-sprite');
var browserSync = require('browser-sync');
var connectPHP  = require('gulp-connect-php');

var path = {
  watch: [
    './resources/views/**/*.php',
    'app/**/*'
  ],
  sass: {
    src: ['./resources/src/sass/**/*.sass'],
    dest: ['./public/assets/css'],
  },
  js: {
    src: ['./resources/src/js/**/*.js'],
    dest: ['./public/assets/js'],
  },
  images: {
    src: ['./resources/src/img/**/*'],
    dest: ['./public/assets/img/']
  },
  sprites: {
    src: ['./resources/src/icons-svg/**/*.svg'],
    dest: ['./public/']
  }
}

var basePath = './public/'

//Criação de sprites SVG
var config = {
	mode: {
		symbol:{
			dest: 'sprite-svg',
			sprite: 'sprite.svg',
			example: true
		},
		svg: {
			xmlDeclaration: false,
			doctypeDeclaration: false,
		},
		shape:{
			dimension: {
				maxWidth	: 32,
				maxHeight	: 32
			}
		},
	}
};
gulp.task('sprites',function(){
	gulp.src(path.sprites.src)
		.pipe(svgSprite(config))
		.pipe(gulp.dest(path.sprites.dest.toString()))
});

// Compilar e minificar Sass
gulp.task('sass', function () {
  gulp.src(path.sass.src)
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest(path.sass.dest.toString()))
    .pipe(browserSync.stream());
});

//Compactando imagens
gulp.task('imagemin', function(){
    gulp.src(path.images.src)
        .pipe(imagemin())
        .pipe(gulp.dest(path.images.dest.toString()))
        .pipe(browserSync.stream());
});


gulp.task('html',function(){
	gulp.src('./public/*.html')
	.pipe(browserSync.reload())
})

//Verificar alteração em arquivos js
gulp.task('js',function(){
	gulp.src(path.js.dest+'/*.js')
	    .pipe(browserSync.stream());
})

//Verificar se algum arquivo foi alterado e regarregar o browser
gulp.task('watch',function(){
    gulp.watch(path.sass.src, ['sass']);
    gulp.watch(path.js.src, ['js']);
    gulp.watch(path.watch).on('change', function () {
      browserSync.reload();
    });
});


//Inicia servidor php
gulp.task('php', function() {
  connectPHP.server({
  	base: basePath
  }, function (){
    browserSync({
      proxy: 'localhost:8000'
    });
  });
});

// Executa tarefas
gulp.task('serverphp', ['php', 'watch']);
