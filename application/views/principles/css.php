<main id="main-site" class="t2-t3 dl2-dl5">
	
	<section id="main-content" class="clearfix">
		
		<h2 class="slug">Design System</h2>
		<h1>Principles</h1>
		
		<h3>CSS</h3>
		
		
		<p class="standfirst">The CSS principles will be built upon the OOCSS principles outlined in Jonathan’s Snook’s methodology, <a href="http://www.smacss.com">SMACSS [Scalable and Modular Architecture for CSS]</a>. </p>
		
		<p>A recap on some of the principles:</p>
		
		<ul>
			<li>Base styles are the default styles for HTML elements (<code>h1, p, pre, etc</code>)</li>
			<li>Layout styles are other reusable layout classes. These are built on top of Gridset classes and help define semantics for layout.</li>
			<li>All other remaining CSS is classified into modules, with classes namespaced by module. For example, an alert module might have the following rules: <code>.alert, .alert-message, .alert-icon</code></li>
			<li>Modules should exist as standalone components, avoid conditional styling based on location (if this is needed, the module should be defined as sub-module)</li>
			<li>State styles describe certain modules in different states or views. They indicate a javascript dependency. Prefixed by ‘<code>is-</code>’, for example, ‘<code>is-collapsed</code>’, or ‘<code>is-active</code>’. This makes for good, readable class structures in the HTML. For example: <code>class=”sidebar watch-live is-active”</code></li>
		</ul>
		
		
		<h4>Guidelines</h4>
		<ul>
			<li>Avoid IDs in the CSS</li>
			<li>Minimise the depth of CSS selectors</li>
			<li>Use classes to define visual presentation patterns</li>
		</ul>
		
		<h4>File structure</h4>
		<ul>
			<li>Use one stylesheet: style.css (as either Sass compiled, or hand written). This cuts down on HTTP requests to allow slower (read: 3G) connections to load faster.</li>
			<li>Deal with Internet Explorer specific styles with ie.css file (for IE 9+), and ie-old.css for IE7 & 8. We recommend IE6 is not supported.</li>
			<li>CSS reset present in style.css</li>
		</ul>
							
	</section>
	
</main>