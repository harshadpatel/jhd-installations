module.exports = function (grunt) {
    grunt.initConfig({
        watch: {
            src: {
                files: ['**/*.scss'],
                tasks: ['compass:dev']
            },
            options: {
                livereload: true
            }
        },
        compass: {
            dev: {
                options: {
                    sassDir: 'wp-content/themes/jhd/lib/src/scss',
                    cssDir: 'wp-content/themes/jhd/lib/dist/css',
                    imagesPath: 'assets/img',
                    noLineComments: false,
                    outputStyle: 'compressed'
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
};