module.exports = function (grunt) {
  'use strict';
  // Project configuration
  grunt.initConfig({
    // Metadata
    pkg: grunt.file.readJSON('package.json'),
    banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
      '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
      '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
      '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
      ' Licensed <%= props.license %> */\n',
    // SCSS Lint
    // =========
    scsslint: {
      allFiles: [
        '../sass/*.scss',
        '../sass/elements/*.scss',
        '../sass/forms/*.scss',
        '../sass/layout/*.scss',
        '../sass/media/*.scss',
        '../sass/mixins/*.scss',
        '../sass/modules/*.scss',
        '../sass/navigation/*.scss',
        '../sass/site/*.scss',
        '../sass/typography/*.scss',
        '../sass/variables-site/*.scss'
      ],
      options: {
      config: '../sass/.scss-lint.yml',
      colorizeOutput: true
    }
    },
    // ============
    // SASS Compile
    // ============
    sass: {
      options: {
        style: 'expanded',
        sourcemap: 'auto'
      },
      dist: {
        files: {
          '../style.css' : '../sass/style.scss',
          '../style-admin.css' : '../sass/style-admin.scss'
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-scss-lint');
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Default task
  grunt.registerTask('default', [
    'scsslint',
    'sass'
  ]);
};