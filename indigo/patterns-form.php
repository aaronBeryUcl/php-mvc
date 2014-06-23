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
					<h1>Form</h1>
					
					<p>A form is required when you need a user to fill in and submit data. There are a lot of input options and you will need to pick and choose so that you succeed in obtaining all the information you require.</p>
					
					<p>HTML5 allows for more flexible input types to be applied that provide far better experiences for users - so try to use the most appropriate one where possible.</p>
				
				</div>
			
			</header>
			
			<div class="pattern interaction form">
				
				<iframe id="form-view" class="frame dl2-dl3" src="./git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Forms should stay as consistent as possible throughout the site, however button styles can be customised:</p>
						
						<ul>
							<li>Adding the desired UCL colour name e.g. 'brightgreen' (as explained on the Colour page of Indigo) to the button <code>class</code> will give you a styled button that fits with your site colours.</li>
							<li>Buttons can also be styled differently, if you are expanding the foundation. Add your css styles to the <code>&lt;input&gt;</code> tag by either adding to the <code>class="btn-gradient"</code> or adding your own class name.</li>
						</ul>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>