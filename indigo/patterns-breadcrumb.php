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
					<h1>Breadcrumb</h1>
					
					<p>Breadcrumbs are navigational devices to provide links back to the previous page the user navigated through to get to the current page.</p>
				
				</div>
			
			</header>
			
			<div class="pattern interaction breadcrumb">
				
				<iframe id="breadcrumb-view" class="frame dl2-dl3" src="./git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe>
							
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>The breadcrumb should remain consistent with the rest of the UCL site for consistency. The link colour will adopt the colour you set for you site.</p>
						
						<p>Include links to the homepage of your website and the pages you need to navigate through to get to the current page.</p>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<?php include 'includes/footer.php'; ?>
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>