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
					<h1>Navigation</h1>
					
					<p>The left navigation is required to layout the structure of your site. It should be meaningful and clear for users to find what they are looking for.</p>
				
				</div>
			
			</header>
			
			<div class="pattern interaction leftnav">
				
				<iframe id="leftnav-view" class="frame dl2-dl3" src="/proxy/<?php echo $pattern; ?>"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Assign css styles for customisation to:</p>
						
						<ul>
							<li><code>.leftnav</code> to style navigation container</li> 
							<li><code>.leftnav ul</code> to style the whole list</li>
							<li><code>.leftnav li</code> to style the individual list items</li>
							<li>Structure nested lists as <code>.leftnav li ul li</code> etc. as appropriate.</li>
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