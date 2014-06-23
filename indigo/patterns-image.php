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
					<h1>Image</h1>
					
					<p>Images are defined with the <code>&lt;img&gt;</code> tag. The tag is empty, which means that it contains attributes only, and has no closing tag.</p>
					
					<p>To display an image on a page, you need to use the <code>src</code> attribute, which stands for "source". The value should be the URL of the image you want to display.</p>
				
				</div>
			
			</header>
			
			<div class="pattern interaction image">
				
				<iframe id="image-view" class="frame dl2-dl3" src="./git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Assign css styles for customisation to:</p>
						
						<ul>
							<li>If you need to include a heading or caption for the image, include the <code>&lt;figcaption&gt;</code> to hold and style the text.</li>
							<li>Add the class float-left or float-right to the <code>&lt;img&gt;</code> tag to float the image to the left or the right, respectively within the content.</li> 
						</ul>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>