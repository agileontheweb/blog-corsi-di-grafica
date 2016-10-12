module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    watch: {
      css:{
        files:['**/*.scss'],
        tasks:['sass'],
      }
    },
    sass:{
      dist:{
        files:{
          'style.css' : 'assets/sass/style.scss'
       } 
      }
    },
    cssmin: {
      options: {
        shorthandCompacting: false,
        roundingPrecision: -1
      },
      target: {
        files: {
          'style.min.css': ['style.css']
        }
      }
    },
    concat: {
      options: {
        // define a string to put between each file in the concatenated output
        separator: ';'
      },
      dist: {
        // the files to concatenate
        src: [
              'assets/js/jquery-1.11.min.js',
              'assets/vendor/GreenSock/src/minified/TweenMax.min.js',
              'assets/js/bootstrapmin.js',
              'assets/js/mailchimp.js',
              'assets/js/navigation.js',
              'assets/js/fastclick.js',
              'assets/js/social-likes.min.js',
              'assets/js/cookies',
              'assets/js/main.js'
              ],
        // the location of the resulting JS file
        dest: 'assets/build/build.js'
      }
    },
    uglify: {
      my_target: {
        files: {
          'assets/build/build.min.js': ['assets/build/build.js']
        }
      }
    },
    
    // uncss:{
    //   dist:{
    //     files:{
    //       'style.css' : ['index.php']
    //     } 
    //   }
    // },

    
    // jshint: {
    //   files: [//'assets/js/jquery-1.11.min.js',
    //           //'assets/vendor/GreenSock/src/minified/TweenMax.min.js',
    //           //'assets/js/bootstrapmin.js',
    //            'assets/js/mailchimp.js',
    //           // 'assets/js/navigation.js',
    //           // 'assets/js/fastclick.js',
    //           // 'assets/js/social-likes.min.js',
    //           // 'assets/js/cookies',
    //           'assets/js/main.js'],
    //   options: {
    //     globals: {
    //       jQuery: true
    //     }
    //   }
    // },
    

  });

// grunt.loadNpmTasks('grunt-contrib-jshint');
// grunt.loadNpmTasks('grunt-contrib-concat');
// grunt.loadNpmTasks('grunt-contrib-uglify');

grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-sass');
//grunt.loadNpmTasks('grunt-uncss');
grunt.loadNpmTasks('grunt-contrib-cssmin');
// this would be run by typing "grunt test" on the command line
//grunt.registerTask('test', ['jshint','concat']);

// the default task can be run just by typing "grunt" on the command line
//grunt.registerTask('default', ['watch', 'jshint', 'concat']);

//Use un console:
  //grunt
  //grunt watch
  //grunt concat

};