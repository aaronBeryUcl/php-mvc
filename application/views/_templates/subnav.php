<nav id="nav-site" class="t1 dl1">

<a id="nav-mobile-back" href="#"><img src="<?php echo SITE_ASSET_PATH; ?>/img/close.png" alt="X" /> Close</a>
	<ul>
		<li><a href="<?php echo SITE_PATH; ?>/home">Home</a></li>
		<li><a href="<?php echo SITE_PATH; ?>/casestudies">Case studies</a></li>
	</ul>
	<dl>
		<dt><p>Design system</p></dt>
		<dd>
			<ul>
				<li><a href="<?php echo SITE_PATH; ?>/principles/">Principles</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/principles/foundation">UCL Design Foundation</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/principles/expansion">Expanding the Foundation</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/principles/responsive">Responsive Design</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/principles/css">CSS and Markup</a></li>
			</ul>
		</dd>
		
		<dt><p>Foundation</p></dt>
		<dd>
			<ul>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=navigation">Navigation</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/foundation/grid">Grid system</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/foundation/typography">Typography</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/foundation/colour">Colour</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/foundation/iconography">Iconography</a></li>
			</ul>
		</dd>
		
		<dt><p>Patterns</p></dt>
		<dd>
			<!-- <ul>
				<li><a class="active" href="<?php echo SITE_PATH; ?>/patterns?pattern=accordion">Accordion</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=audio">Audio</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=blurb">Blurbs</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=box">Box</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=breadcrumb">Breadcrumb</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=carousel">Carousel</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=code">Code</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=footer">Footer</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=form">Form</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=image">Images</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=longform">Longform content</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=map">Map</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=pre">Pre</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=pullquote">Quotes</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=table">Tables</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=tabs">Tabs</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=vcard">Vcard</a></li>
				<li><a href="<?php echo SITE_PATH; ?>/patterns?pattern=video">Video</a></li>
			</ul> -->
			<?php
				if(isset($helpers) && isset($patternsArr)){
					$helpers->buildPattTemplListings($patternsArr,'patterns');
				}
			?>
		</dd>

		<dt><p>Templates</p></dt>
		<dd>
			<?php
				if(isset($helpers) && isset($templatesArr)){
					$helpers->buildPattTemplListings($templatesArr,'templates');
				}
			?>
		</dd>

	</dl>
	
	<?php 
	echo '<p class="about">Indigo is maintained by the UCL web team, if you have any comments or questions please contact ' . INDIGO_CONTACT. ' by emailing <a href="mailto:' . INDIGO_CONTACT_EMAIL . '">' . INDIGO_CONTACT_EMAIL . '</a></p>';
	?>
	
</nav><!-- end #nav-site -->