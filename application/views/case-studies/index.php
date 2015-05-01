<main id="main-site" class="t2-t3 dl2-dl5">
		
	<section id="main-content" class="clearfix">

		<header id="header-page" class="clearfix">
			
			<h2 class="slug">Design System</h2>
			<h1>Case Studies</h1>

			<p class="standfirst">The case studies section is a gallery of sites already using the UCL Design Language. Use these sites as both a guide and inspiration to using the Design Language in your site design.</p>
			
		</header>
		
		<?php
			function buildCaseStudyListings($arr){
				foreach ($arr as $key => $value) {
					echo '<div class="casestudy dl-all">

							<div class="dl2-dl3">
							
								<h2>' . $value->getCol("caseStudyTitle") . '</h2>
								<a href="' . $value->getCol("caseStudyLink") . '"  target="_blank">
									<img src="' . SITE_ASSET_PATH . '/img/' . $value->getCol("caseStudyImageRelLink") . '" alt="' . $value->getCol("caseStudyTitle") . '" />
								</a>
							
							</div>
							
							<aside id="main-sidebar" class="dl4-dl5">
								
								<section>

									<h3>Notes</h3>'
									; ?> 
									<?php
									if(strlen($value->getCol("caseStudyDescription"))){
									echo 
									'<p>' . $value->getCol("caseStudyDescription") . '</p>';
									}
									echo
									'<p><a href="' . $value->getCol("caseStudyLink") . '" target="_blank">Visit ' . $value->getCol("caseStudyTitle") . '</a></p>

								</section>
							
							</aside>
						
						</div>';
				}
			}

			buildCaseStudyListings($caseStudiesArr);

		?>

	</section>
	
</main>