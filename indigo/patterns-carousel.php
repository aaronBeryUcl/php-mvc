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
				
				<iframe id="carousel-view" class="frame dl2-dl3" src="./git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Assign css styles for customisation to:</p>
						
						<ul>
							<li>Change the image <code>src</code> to link to your image and amend the <code>alt</code> text to briefly describe the image.</li>
							<li>Add further <code>&lt;li&gt;</code> elements to add more images to your slideshow</li>
							<li>Wrap the <code>&lt;img&gt;</code> in an <code>&lt;a href="#"&gt;&lt;/a&gt;</code> to add a link to the image</li>
						</ul>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
</body>
</html>