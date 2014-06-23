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
					<h1>Longform content</h1>
					
					<p>Some pages within your website may contain long articles that you feel may require too much scrolling at smaller resolutions. This can be managed using this pattern, which will cause the content to fold up into sections, giving an easier reading experience.</p>
				
				</div>
			
			</header>
			
			<div class="pattern interaction image">
				
				<iframe id="longform-view" class="frame dl2-dl3" src="./git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Content needs to be split into suitable sections, with headings that can form the navigation for the content at smaller resolutions.</p>
						
						<ul>
						
							<li>Headings need the <code>class="accordion-header"</code> added.</li>
							<li>The content underneath the heading needs to be wrapped in <code>&lt;div class="accordion-content"&gt;&lt;/div&gt;</code></li>
						
						</ul>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>