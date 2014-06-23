<?php extract($_GET);

			$title = ucfirst($pattern);

			include 'includes/head.php';
				
			include 'includes/masthead.php';
			
			include 'includes/subnav.php'; ?>
	
	<main id="main-site" class="t2-t3 dl2-dl5">
		
		<section id="main-content" class="clearfix">
			
			<header id="header-page" class="clearfix">
				
				<div class="dl2-dl3">
				
					<h2 class="slug">Patterns</h2>
					<h1>Map</h1>
					
					<p>If you need to display the location of something use this code to embed a Google map in your site.</p>
					
					<p>Search for the desired location within the Google maps website and replace the link as appropriate in the code.</p>
				
				</div>
			
			</header>
			
			<div class="pattern interaction map">
				
				<iframe id="map-view" class="frame dl2-dl3" src="./git-proxy.php?file=<?php echo $pattern; ?>.html" scrolling="no"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Keep the width of the map's <code>&lt;iframe&gt;</code> as 100% but you can change the height as needed.</p>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>