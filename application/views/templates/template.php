<?php
	$domainParam = "";
	if(isset($domain) && $domain!='cdn'){
		$domainParam = "&domain=" . $domain;
	}
?>
<main id="main-site" class="t2-t3 dl2-dl5">
	
	<section id="main-content" class="clearfix">
		
		<header id="header-page" class="clearfix">
			
			<div class="dl2-dl3">
			
				<h2 class="slug">Templates</h2>
				<?php 
					echo "<h1>" . $currentTemplate->getCol('templLabel') . "</h1>" . $currentTemplate->getCol('templDescription');
				?>
			</div>
		
		</header>
		
		<div class="template interaction carousel">
			
			<iframe id="carousel-view" class="frame dl2-dl5" src="git-proxy.php?file=<?php echo $pattern . $domainParam; ?>"></iframe>
			
			<aside id="main-sidebar" class="dl2-dl5">
				
				<section>
					<?php
						echo "<h3>" . $currentTemplate->getCol('templHeader') . "</h3>" . $currentTemplate->getCol('templBlurb');
					?>
					
					
				
				</section>
			
			</aside>
			
		</div>
	
	</section>
			
</main><!-- end #main-site -->