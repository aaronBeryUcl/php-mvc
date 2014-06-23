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
					<h1>Global masthead</h1>
					
					<p>The global masthead must be included in your site design. It is intended to give user somewhere consistent to refer back to whilst navigating the UCL sites. It also houses the UCL search.</p>
				
				</div>
			
			</header>
			
			<div class="pattern interaction global-masthead">
				
				<iframe id="global-masthead-view" class="frame dl2-dl3" src="/proxy/<?php echo $pattern; ?>"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>There are no options for customisation for the Global masthead.</p>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<?php include 'includes/footer.php'; ?>
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>