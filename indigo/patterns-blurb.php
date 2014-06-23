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
					<h1>Article blurb</h1>
					
					<p>A blurb is the name given to the short synopsis of text, sometimes accompanied by an image that links through to a full content article, news article, event or other content item.</p>
					
					<p>Use blurbs when you need to list articles, or to summarise content items and encourage users to click through and read further.</p>
				
				</div>
			
			</header>
			
			<h2>Blurb</h2>
			
			<div class="pattern interaction blurb">
				
				<iframe id="blurb-view" class="frame dl2-dl3" src="./git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe>
				
				<aside class="main-sidebar dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Blurbs should remain consistent in style, as they are such an important part of the content structure. However there are some variations:</p>
						
						<ul>
							<li>Add <code>&lt;p class="meta photo"&gt;&lt;a href="#" class="flag uclnews"&gt;UCL News&lt;/a&gt;&lt;/p&gt;&lt;/code&gt;</code> above the <code>&lt;img&gt;</code> to add a flag on news items, that links through to further news content under this category.</li> 
						</ul>
					
					</section>
				
				</aside>
				
			</div>
			
			<h2 class="patterns">Blurb (wide)</h2>
			
			<div class="pattern interaction blurb">
				
				<iframe id="blurb-wide-view" class="frame dl2-dl3" src="./git-proxy.php?file=blurb-wide.html"></iframe>
				
				<aside class="main-sidebar dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>The wide variation allows the image to sit to the left of the blurb text and will default back to the normal blurb style under screen resolutions of 767px to ensure readability.</p>
						
						<ul>
							<li>Amend the <code>&lt;article class="blurb"&gt;</code> to <code>class="blurb-wide"</code></li> 
							<li>Wrap the blurb text in its own <code>&lt;div&gt;</code> to endure the correct alignment of the content.</li>
						</ul>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>