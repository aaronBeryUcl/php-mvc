<?php 
	extract($_GET);

	$title = ucfirst($pattern);

	include 'includes/templateSections.php';

	include 'includes/head.php';
		
	include 'includes/masthead.php';
	
	include 'includes/subnav.php';

?>
	
	<main id="main-site" class="t2-t3 dl2-dl5">
		
		<section id="main-content" class="clearfix">
			
			<header id="header-page" class="clearfix">
				
				<div class="dl2-dl3">
				
					<h2 class="slug">Templates</h2>
					<?php 

						echo "<h1>" . prettyTemplateLabel($pattern) . "</h1>" . $description;
					?>
				</div>
			
			</header>
			
			<div class="template interaction carousel">
				
				<iframe id="carousel-view" class="frame dl2-dl5" src="git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe>
				
				<aside id="main-sidebar" class="dl2-dl5">
					
					<section>
						<?php
							echo "<h3>" . $header . "</h3>" . $blurb;
						?>
						
						
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
</body>
</html>