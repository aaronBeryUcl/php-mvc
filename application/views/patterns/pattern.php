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
		

		<section class="dl2-dl3">
			<?php
				echo "<h3>" . $currentTemplate->getCol('templHeader') . "</h3>" . $currentTemplate->getCol('templBlurb');
			?>
		</section>
		
		<div class="template interaction carousel">
			<iframe id="gitProxyIframe" class="frame dl2-dl5" src="<?php echo SITE_PATH; ?>/gitproxy?file=<?php echo $pattern . $domainParam; ?>"></iframe>
		</div>

	</section>
			
</main><!-- end #main-site -->