'use strict';
module.exports = function (grunt) {


  require('load-grunt-config')(grunt, {
    data: { //data passed into config.  Can use with <%= test %>
      src: {
        bootstrap: [
//        'assets/vendor/bootstrap/js/*.js',
          'assets/vendor/bootstrap/js/transition.js',
          'assets/vendor/bootstrap/js/alert.js',
          'assets/vendor/bootstrap/js/button.js',
          'assets/vendor/bootstrap/js/carousel.js',
          'assets/vendor/bootstrap/js/collapse.js',
          'assets/vendor/bootstrap/js/dropdown.js',
          'assets/vendor/bootstrap/js/modal.js',
          'assets/vendor/bootstrap/js/tooltip.js',
          'assets/vendor/bootstrap/js/popover.js',
          'assets/vendor/bootstrap/js/scrollspy.js',
          'assets/vendor/bootstrap/js/tab.js',
          'assets/vendor/bootstrap/js/affix.js',
          'assets/vendor/greensock/src/uncompressed/TweenMax.js',
          'assets/vendor/rangeslider.js/dist/rangeslider.js',
          'assets/vendor/sidr/jquery.sidr.min.js',
          'assets/vendor/jquery-touchswipe/jquery.touchSwipe.js',

          'assets/js/plugins/*.js',
          'assets/js/_*.js'
        ]
      }
    }
  });

  // Load all tasks
  require('load-grunt-tasks')(grunt);

  // Show elapsed time
  require('time-grunt')(grunt);


  // Register tasks
  grunt.registerTask('default', [
    'dev'
  ]);

  grunt.registerTask('dev', [
    'jshint',
    'less:dev',
    'autoprefixer:dev',
    'concat',
    'watch'
  ]);

  grunt.registerTask('dev-less', [
    'less:dev',
    'autoprefixer:dev',
    'concat',
    'watch'
  ]);

  grunt.registerTask('build', [
    'jshint',
    'less:build',
    'autoprefixer:build',
    'uglify',
    'modernizr',
    'version'
  ]);
};
