module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'css/style.css' : 'css/style.sass'
				}
			}
		},
		postcss: {
    	options: {
				processors: [
		        require('pixrem')(), // add fallbacks for rem units
		        require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
		      ]
				},
				dist: {
		      src: './css/*.css'
		    }
			},
		cssnano: {
        options: {
            sourcemap: false
        },
        dist: {
            files: {
                './css/style.min.css': './css/style.css',
                './css/top.min.css': './css/top.css'
            }
        }
    },
		penthouse: {
	    extract : {
	        outfile : './css/top.css',
	        css : './css/style.css',
	        url : 'http://localhost/brandon2',
	        width : 1920,
	        height : 900,
	        skipErrors : false // this is the default
	    },
	  },
		watch: {
			css: {
				files: 'css/*.sass',
				tasks: ['sass','postcss','penthouse','cssnano']
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-penthouse');
	grunt.loadNpmTasks('grunt-cssnano');
	grunt.registerTask('default',['watch']);
}
