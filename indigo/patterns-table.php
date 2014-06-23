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
					<h1>Tables</h1>
					
					<p>Tables are defined with the <code>&lt;table&gt;</code> tag.</p>
					<p>A table is divided into rows with the <code>&lt;tr&gt;</code> tag, and each row is divided into data cells with the <code>&lt;td&gt;</code> tag.</p>
					
					<p>Tables are to be used only to display tabular data, but not to format the layout of  content within a site.</p>
					
				
				</div>

			</header>
			
			<h2>Basic table</h2>
			
			<div class="pattern interaction table dl-all">

				<iframe id="table-view" class="frame dl2-dl3" src="./git-proxy.php?file=<?php echo $pattern; ?>.html"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Assign css styles for customisation to:</p>
						
						<ul>
							<li><code>th</code> to style the table headers</li> 
							<li><code>td</code> to style the table cells</li>
							<li><code>table</code> to style the containing table</li>
						</ul>
					
					</section>
				
				</aside>
				
			</div>
			
			
			<h2 class="patterns">Responsive table</h2>
			
			<div class="pattern interaction table dl-all">
			
				<iframe id="table-responsive-view" class="frame dl2-dl3" src="./git-proxy.php?file=table-responsive.html"></iframe>
				
				<aside id="main-sidebar" class="dl4-dl5">
					
					<section>
					
						<h1>Notes</h1>
						
						<p>Assign css styles for customisation to:</p>
						
						<ul>
							<li><code>#rt1 th</code> to style the table headers</li> 
							<li><code>#rt1 td</code> to style the table cells</li>
							<li><code>#rt1</code> to style the containing table</li>
							<li>Additional responsive tables should be named with ids increasing in number to distinguish them</li>
						</ul>
					
					</section>
				
				</aside>
				
			</div>
		
		</section>
				
	</main><!-- end #main-site -->
	
	<script src="https://get.gridsetapp.com/21065/overlay/"></script>
		
</body>
</html>