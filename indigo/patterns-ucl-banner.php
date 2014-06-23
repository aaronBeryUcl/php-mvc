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
					<h1>UCL banner</h1>
					
					<p>The UCL banner must be included in your site. It is constructed using an image where the UCL logo is a transparent SVG over the site.</p>
				
				</div>
			
			</header>
			
			<div class="pattern interaction ucl-banner">
				
				<iframe id="ucl-banner-view" class="frame dl2-dl3" src="/proxy/<?php echo $pattern; ?>"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Options for customisation are:</p>
						
						<ul>
							<li>Assign a <code>background-color</code> to the <code>&lt;div class="photograph"&gt;</code> to add a colour that will fill the UCL logo and add a colour bar underneath the banner.</li> 
							<li>Add the class <code>'photograph-on'</code> to the <code>&lt;div class="photograph"&gt;</code> and assign CSS for a <code>background-image</code> and <code>background-position-y</code> as appropriate.</li>
						</ul>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<?php include 'includes/footer.php'; ?>
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>