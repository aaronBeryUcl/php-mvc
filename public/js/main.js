require.config({
	baseUrl: 'js/lib',
	paths: {
		app: '../app'
		,allsite: 'all-site.min'
		//libaries
		,jquery: globalSiteSpecificVars.pathToJquery
		,underscore: '//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min'
		,backbone: '//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.2/backbone-min'
		,fastclick: 'fastclick'
		,googleAnalyticsLib: 'googleAnalytics.min'
		,owl: 'owl.carousel.min'
		,jwplayer: 'jwplayer'
	}
	,shim:{
		allsite: {
			deps: ['jquery']
			,exports: 'gen'
		}
		,underscore: {
			exports: '_'
		}
		,backbone: {
			deps: ['underscore','jquery']
			,exports: 'B'
		},
		modernizr: {
			exports: 'Modernizr'
		},
		googleAnalyticsLib: {
			exports: 'ga'
		},
		owl: {
			deps: ['jquery']
		},
		jwplayer: {
			exports: 'jwplayer'
		}
	}
});