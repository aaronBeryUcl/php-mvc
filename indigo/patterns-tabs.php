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
					<h1>Tabbed content</h1>
					
					<p>Tabs display content panels. They are used when presenting related information together in a limited space.</p>
					
					<p>Click tab headings to navigate through the content. This uses jQuery, but the underlying html ensures the content is still accessible without javascript.</p>
				
				</div>

			</header>
			
			<div class="pattern interaction tabbed">
				
				<iframe id="tabs-view" class="frame dl2-dl3" src="./git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Assign css styles for customisation to:</p>
						
						<ul>
							<li><code>.tabs li</code> and <code>.tabs li.active</code> to style the tabs</li> 
							<li><code>.tabbed > div</code> a to style the content areas</li>
						</ul>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>