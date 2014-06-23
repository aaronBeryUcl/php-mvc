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
					<h1>Pullquote</h1>
					
					<p>A pull quote element is used to display a quotation or excerpt from an article in a larger or distinctive typeface on the same page, serving to highlight a key topic.</p>
				
				</div>
			
			</header>
			
			<div class="pattern interaction pullquote">
				
				<iframe id="pullquote-view" class="frame dl2-dl3" src="./git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Assign css styles for customisation to:</p>
						
						<ul>
							<li>Add the class quote-left or quote-right to <code>&lt;div class="pullquote"&gt;</code> to float the quote to the left or the right, respectively within the article.</li> 
						</ul>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>