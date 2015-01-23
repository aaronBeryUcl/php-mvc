<?php
	if(isset($pattern)){
		switch($pattern){
			case "template-carousel":
				$header = 'Notes';
				$description = "<p>A carousel can be used to display a slideshow of images.</p>";
				$blurb = '<p>See <a href="patterns-carousel.php?pattern=carousel&requirejs=true">carousel pattern</a> for usage</p>';
			break;
			case "template-video":
				$header = 'Notes';
				$description = "";
				$blurb = '<p>You will need some basic familiarity with using JavaScript plugins to use the video pattern</p><p>We use a requirejs module loader. You can copy this example and make adjustments to the code to show your chosen video. By changing the properties of the the  <code>setup()</code> method you can replace the holder image and the file for the video asset</p>';
			break;
			default:
				$header = '';
				$description = "";
				$blurb = '';
		}
	}
?>