module.exports = function(grunt){
    grunt.initConfig({
        sass: {
            dist: {
                files: {
                    "css/layout.css": "scss/layout.scss"
                }
            }
        },
        cssmin: {
            compress: {
                files: {
                    "css/layout.min.css": ["css/layout.css"]
                }
            }
        },
        watch : {
            scripts : {
                files : [
                    'css/layout.css',
                    'scss/layout.scss'
                ],
                tasks : ['sass','cssmin']
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-sass');

    grunt.registerTask('default', ['watch']);
};