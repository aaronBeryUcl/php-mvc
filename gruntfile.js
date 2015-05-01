module.exports = function(grunt) {
	grunt.config.init({
		pkg: grunt.file.readJSON('package.JSON')
		,sass: {
			dist: {
				options: {
					style: 'expanded'
				},
				files: [{
					expand: true,
					cwd: 'public/src',
					src: ['*.scss'],
					dest: '<%= pkg.styleDestDir %>',
					ext: '.css'
				}],
				sourcemap: 'none'
			}
		}
		,cssmin: {
			my_target: {
				files: [{
					expand: true,
					cwd: '<%= pkg.styleDestDir %>',
					src: ['*.css', '!*.min.css'],
					dest: '<%= pkg.styleDestDir %>',
					ext: '.min.css'
				}]
			}
		}
		,watch: {
			sass:{
				files: [
					'src/*.scss'
					,'src/**/*.scss'
				],
				tasks: ['sass:dist','cssmin','watch']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');

	grunt.registerTask('default', ['sass','cssmin','watch']);
	//grunt.registerTask('default', ['sass','cssmin']);
};