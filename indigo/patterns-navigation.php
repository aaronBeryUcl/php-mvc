<?php extract($_GET);

			$title = ucfirst($pattern);
			
			include 'includes/head.php';
				
			include 'includes/masthead.php';
			
			include 'includes/subnav.php'; ?>
	
	<main id="main-site" class="t2-t3 dl2-dl5">
		
		<section id="main-content" class="clearfix">
		
			<header id="header-page" class="clearfix">
				
				<h2 class="slug">Foundation</h2>
				<h1>Navigation</h1>
				
				<h2>Introduction</h2>
						
						<p class="standfirst">The global masthead, UCL banner must be included in your site design. They are intended to give user somewhere consistent to refer back to whilst navigating the UCL sites. They also house the UCL search and logo.</p>
						
						<p>Assign a <code>background-color</code> to the <code>&lt;div class="photograph"&gt;</code> to add a colour that will fill the UCL logo and add a colour bar underneath the banner.</p> 
						
						<p>Add the class <code>'photograph-on'</code> to the <code>&lt;div class="photograph"&gt;</code> and assign CSS for a <code>background-image</code> and <code>background-position</code> as appropriate.</p>
					
					</div>
				
				</header>
				
				<div class="pattern interaction navigation">
					
					<iframe id="navigation-view" class="frame" src="git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe> 
					
				</div>
										
			</section>
			
		</main>
		
	</div>
	
</body>
</html>