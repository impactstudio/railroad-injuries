module.exports = function(grunt){

  grunt.initConfig({
    concat: {
      options: {
        seperator: ';'
      },
      js: {
        src: ['assets/js/**/*.js'],
        dest: 'assets/build/js/scripts.js',
      },
      css: {
        src: ['assets/css/**/*.css', 'assets/css/**/*.min.css'],
        dest: 'assets/build/css/styles.css',
      },
    },

    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'compressed',
          precision: 10,
          compass: true,
        },
        files: {                         // Dictionary of files
          'assets/build/css/styles.css': 'assets/sass/styles.scss',       // 'destination': 'source'
        }
      }
    },

    postcss: {
      options: {
        processors: [
          require('autoprefixer')({browsers: 'last 2 versions'}),
          require('cssnano')(),
        ]
      },
      dist: {
        src: 'assets/build/css/styles.css'
      }
    },

    watch: {
      sass: {
        files: ['assets/sass/*.scss'],
        tasks: ['sass'],
        options: {
          livereload: true
        }
      },
    },
  });

  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.registerTask('default', ['watch']);

};
