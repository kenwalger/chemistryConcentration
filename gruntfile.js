module.exports = function(grunt) {

    // Project configuration - configure task(s)
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            build: {
                src: 'src/js/*.js',
                dest: 'js/script.min.js'
            },
            dev: {
                options: {
                    beautify: true,
                    mangle: false,
                    compress: false,
                    preserveComments: 'all'
                },
                src: 'src/js/*.js',
                dest: 'js/script.min.js'
            }
        },
        watch: {
            js: {
                files: ['src/js/*.js'],
                tasks: ['uglify:dev']
            },
            css: {
                files: ['src/scss/**/*.scss'],
                tasks: ['sass:dev']
            }
        },
        sass: {
            dev: {
                options: {
                    outputStyle: 'expanded'
                },
                files: {
                    'css/style.css' : 'src/scss/application.scss'
                }
            },
            build: {
                options: {
                    outputStyle: 'compressed'
                },
                files: {
                    'css/style.scss' : 'src/scss/application.scss'
                }
            }
        }
    });

    // Load the plugins
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-livereload');
        

    // Register task(s)
    grunt.registerTask('default', ['uglify:dev', 'sass:dev']);
    grunt.registerTask('build', ['uglify:build', 'sass:build']);


}