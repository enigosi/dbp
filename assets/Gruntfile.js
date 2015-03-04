'use strict';
module.exports = function(grunt) {

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        // let us know if our JS is sound
        jshint: {
            options: {
                "bitwise": true,
                "browser": true,
                "curly": true,
                "eqeqeq": true,
                "eqnull": true,
                "es5": true,
                "esnext": true,
                "immed": true,
                "jquery": true,
                "latedef": true,
                "newcap": true,
                "noarg": true,
                "node": true,
                "strict": false,
                "trailing": true,
                "undef": true,
                "globals": {
                    "jQuery": true,
                    "alert": true
                }
            },
            all: [
                'Gruntfile.js',
                'javascripts/source/*.js'
            ]
        },

        // concatenation and minification all in one
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
        '<%= grunt.template.today("yyyy-mm-dd") %> */'
            },
            dist: {
                files: {
                    'javascripts/build/app.min.js': [
                        'javascripts/vendor/*.js',
                        'javascripts/source/*.js'
                    ]
                }
            }
        },

        // style (Sass) compilation via Compass
        compass: {
            dist: {
                options: {
                    require: ['susy','breakpoint'],
                    sassDir: 'styles/source',
                    cssDir: 'styles/build',
                    imagesDir: 'images',
                    images: 'images',
                    javascriptsDir: 'javascripts/build',
                    fontsDir: 'fonts',
                    environment: 'production',
                    outputStyle: 'nested',
                    relativeAssets: true,
                    noLineComments: true,
                    force: true
                }
            }
        },

        // vendor browser prefixes
        autoprefixer: {
          dist: {
            files: {
              'styles/build/style.css': 'styles/build/style.css'
            }
          }
        },

         // image optimization
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7,
                    progressive: true
                },
                files: [{
                    expand: true,
                    cwd: 'assets/images/',
                    src: '**/*',
                    dest: 'assets/images/'
                }]
            }
        },


        // watch our project for changes
        watch: {
            options: {
                livereload: true,
            },
            compass: {
                files: [
                    'styles/source/*',
                    'styles/source/**/*',
                    'styles/vendor/*',
                    'styles/vendor/**/*'
                ],
                tasks: ['compass']
            },
            js: {
                files: [
                    '<%= jshint.all %>'
                ],
                tasks: ['jshint', 'uglify']
            }
        },
            // deployment
        ftpush: {
          build: {
            auth: {
              host: 'wojciechromanski.com',
              port: 21,
              authKey: 'one'
            },
            src: '../',
            dest: '/domains/enigosi.ayz.pl/public_html/wordpress/wp-content/themes/dbp',
            exclusions: ['assets/.sass-cache', 'assets/javascripts/source', 'assets/javascripts/vendor', 'assets/styles/source', 'assets/node_modules', '.gitignore', 'assets/.ftppass', 'assets/Gruntfile.js', 'assets/package.json', 'assets/.grunt', '.git']
          }
        }
    });

    require('time-grunt')(grunt);
    require('load-grunt-tasks')(grunt);

    // register task
    grunt.registerTask('default', [
        'jshint',
        'compass',
        'uglify',
        'imagemin',
        'autoprefixer',
        'watch'
    ]);

    grunt.registerTask('deployment', [
        'jshint',
        'compass',
        'uglify',
        'imagemin',
        'autoprefixer',
        'ftpush'
    ]);

};