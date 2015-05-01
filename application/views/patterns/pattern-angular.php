<main id="main-site" class="t2-t3 dl2-dl5">
	
	<section id="main-content" class="clearfix">
		
		<header id="header-page" class="clearfix">
			
			<div class="dl2-dl3">
			
				<h2 class="slug">Templates</h2>
				<?php 
					echo "<h1>" . $currentTemplate->getCol('templLabel') . "</h1>" . $currentTemplate->getCol('templDescription');
				?>
			</div>
		
		</header>
		
		<div class="template interaction carousel">
			
			
			<div ng-app="git" ng-controller="gitRepoController">
				<span ng-bind-html="gitHtml | sanitize" ng-style="width: 100%;overflow:hidden"></span>
			</div>
			<script>
				(function(){
					var app = angular.module('git', []);
					app.controller('gitRepoController', function($scope, $http) {
					    $http.get("<?php echo SITE_PATH; ?>/gitproxy?file=<?php echo $pattern; ?>&json=1")
					    .success(function(response) {
					    	$scope.gitHtml= "";
					    	var x = 0;
					    	for(x in response.code){
					    		$scope.gitHtml += response.code[x].snippet;
					    		console.log($scope.gitHtml);
					    	}
					    });
					});
					app.filter("sanitize", ['$sce', function($sce) {
					  return function(gitHtml){
					    return $sce.trustAsHtml(gitHtml);
					  }
					}]);
					
				})();
			</script>
			<noscript>
				<iframe id="carousel-view" class="frame dl2-dl5" src="<?php echo SITE_PATH; ?>/gitproxy?file=<?php echo $pattern; ?>"></iframe>
				
				<aside id="main-sidebar" class="dl2-dl5">
					
					<section>
						<?php
							echo "<h3>" . $currentTemplate->getCol('templHeader') . "</h3>" . $currentTemplate->getCol('templBlurb');
						?>
					</section>
				
				</aside>
			</noscript>
			
		</div>
	
	</section>
			
</main><!-- end #main-site -->