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
					<h1>Carousel</h1>
					
					<p>A carousel can be used to display a slideshow of images.</p>
				
				</div>
			
			</header>
			
			<div class="pattern interaction carousel">
				<iframe id="carousel-view" class="frame dl2-dl3" src="git-proxy.php?file=<?php echo $pattern; ?>.html&require=true"></iframe>

				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Add/remove slides</p>
						
						<ul>
							<li>Add remove figure elements in the 'owl-carousel' <code>div</code></li>
							<li>Edit the <code>src</code> to change the image source</li>
							<li>Edit the header and paragraph tags to change the copy</li>
						</ul>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
</body>
</html>