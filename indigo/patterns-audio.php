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
					<h1>Audio</h1>
					
					<p>Until now, there has not been a standard for playing audio files on a web page. HTML5 defines a new element which specifies a standard way to embed an audio file on a web page: the <code>&lt;audio&gt;</code> element.</p>
				
				</div>
			
			</header>
			
			<div class="pattern interaction audio">
				
				<iframe id="audio-view" class="frame dl2-dl3" src="./git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Assign css styles for customisation to:</p>
						
						<ul>
							<li>Add a class to the<code>&lt;audio&gt;</code> tag to style the player</li> 
						</ul>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->

	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>