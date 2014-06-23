<?php $title = 'template';
			
			include 'includes/head.php';
				
			include 'includes/masthead.php';
			
			function get_content_from_github($url) {
				$ch = curl_init();
				curl_setopt($ch,CURLOPT_URL,$url);
				curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
				curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,1);
				$content = curl_exec($ch);
				curl_close($ch);
				return $content;
			}
			
			$content = json_decode(get_content_from_github('https://api.github.com/repos/markboultondesign/ucl-dl/contents/accordion.html'),true);
			
			$content = base64_decode($content['content']);
			
			?>


	<div class="wrapper">
	
			<section class="d1-d3">
				
				<h2 class="slug">Patterns</h2>
				<h1>Interaction</h1>
				
				<p class="standfirst">Design patterns are the building blocks of the UCL design language.</p>
				
				<!-- begin pattern -->
				<div class="pattern interaction accordian">
				
					<link rel="stylesheet" href="http://markboultondesign.github.io/ucl-dl/css/screen.css" type="text/css" />
					<script src="http://markboultondesign.github.io/ucl-dl/js/jquery.css" type="text/javascript"></script>
					<script src="http://markboultondesign.github.io/ucl-dl/js/ucl.js" type="text/javascript"></script>
				
					<h4>Accordian</h4>
					
					<?php echo $content; ?>
					
					<!-- HTML -->
					<h4>Markup</h4>
					
				
				<!-- end pattern -->			
				</div>
						
			</section>
			
			<aside class="d4 d-padin">
				
				<?php include 'includes/subnav.php'; ?>
			
			</aside>
		
		<?php include 'includes/footer.php'; ?>
		
	</div>	
</body>
</html>