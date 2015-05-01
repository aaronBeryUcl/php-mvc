<main id="main-site" class="t2-t3 dl2-dl5">
		
	<section id="main-content" class="clearfix">
		
		<h2 class="slug">Patterns</h2>
		<h1>Introduction to patterns</h1>
		
		<p class="standfirst">The UCL Design Language has a number of patterns available. They are built modularly, so that as long as you have the core design language files linked you can use them anywhere within your site without worrying about extra code.</p>
		
		<p>Each pattern has an introduction, which covers when it should be used. It then has a preview of the pattern and the html code that you can copy and paste into your site.</p>
		
		<p>Where necessary there are notes which explain which elements can be customised and the correct classes to target with your styles.</p>
		
		<h2>UCL Patterns</h2>
		
		<?php

			if(isset($helpers) && isset($patternsArr)){
				$helpers->buildPattTemplListings($patternsArr,'patterns');
			}

		?>			
	</section>
	
</main>
