<?php $title = 'template';
			
			include 'includes/head.php';
				
			include 'includes/masthead.php';
			
			include 'includes/subnav.php'; ?>
	
	<main id="main-site" class="t2-t3 dl2-dl5">
		
		<section id="main-content" class="clearfix">
				
				<h2 class="slug">Design System</h2>
				<h1>Principles</h1>
				
				<h3>Responsive Design Principles</h3>
				
				
				<p class="standfirst">The UCL Design Language is built as responsive from the ground up. This approach brings with it a certain way of approaching responsive design.</p>
				
				<p>The responsive web design strategy for UCL properties will be guided by these goals:</p>
				
				<ol>
					<li>All core functionality and content must be accessible in all environments. This does not mean all content will be visible in the same way, or that the technical implementation will be the same in all environments.</li>
					<li>All interactions must perform quickly with timely feedback in all environments. Buttons must show immediate reaction. Page load times must be minimized as much as possible. On-page actions, javascript, and ajax should be speedy in all environments.</li>
					<li>Brand aesthetics should be obvious in all environments.</li>
				</ol>
				
				<p>To achieve these goals we propose a strategy that includes these key focal points:</p>
				
				<ol>
					<li>Macro and micro breakpoints</li>
					<li>Page assets (including images)</li>
				</ol>
				
				<hr />
				
				<h4>1. Macro and micro breakpoints</h4>
				
				<p>Breakpoints are literally where the layout or page elements break due to changes in screen size. We usually try identify two types of breakpoints:</p>
				
				<ul>
					<li><strong>Macro</strong> - Major layout shifts based on targeted screen sizes. Macro breakpoints are usually based on common screen resolutions.</li>
					<li><strong>Micro</strong> - Minor adjustments at screen sizes where page elements (such as headlines or navigation links) break, but the overall layout stays sound.</li>
				</ul>
				
				<p>We will use Gridset (https://grisetapp.com) to identify Macro breakpoints for the grid and layout, then prototype changes based on these sizes. Once the design and layout are close to finalized, we will comb through the pages to identify micro breakpoints and screen size optimizations.</p>
				
				<p>At certain macro breakpoints, we should also look for content that can be left out and added at other resolutions. For example: an image for every story is great on desktop, but maybe only featured stories load images at mobile sizes.</p>
				
				
				<h4>2. Page assets (including images)</h4>
				
				<p>Anything loaded on a page of a site must be optimized first for low bandwidth environments, then progressively enhanced for higher bandwidths. This includes images, fonts, javascript, and any other asset loaded to a page.</p>
				
				<h5>Images</h5>
				<p>For example, images could be saved in the CMS and generated at various resolutions. Perhaps:</p>
				<ul>
					<li>Small ~12kb</li>
					<li>Medium ~40kb</li>
					<li>Large ~100kb</li>
				</ul>
				
				<p>Every page would first be loaded with the small image, then Javascript can detect screen size and make educated guess as to which other sizes to load. The effect will be low-res images at first that quickly switch hi-res in the appropriate environments.</p>
				
				<h5>Other assets</h5>
				<p>CSS, Javascript, fonts, and images can all be further compressed using gzip. Any fonts should have their weights, styles, and character sets reduced to only what is used on a specific site.</p>
				
				<h5>Javascript</h5>
				<p>Due to the page weight of most libraries (currently, jQuery is around 100kb), and the relative simplicity of Javascript actions assumed on UCL sites, we suggest also avoiding libraries and using pure Javascript.</p>
				
				<hr />
				
				<h4>Experience Summary</h4>
				
				<p>By focusing on these three areas, we can design and build all UCL properties so that they are fast, responsive, and easy to use in all types of environments. Mobile screens, large desktops, bad 3g connections, and lightning-fast broadband will all receive convenient layouts, quick performance, and the essential elements of the UCL brand.</p>

										
			</section>
			
		</main>
		
		<?php include 'includes/footer.php'; ?>
		
	</div>
</body>
</html>