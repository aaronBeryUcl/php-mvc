<?php 
	
	extract($_GET);
	
	$repo = 'http://ucl-wams.github.io/indigo/';
	
	$url = $repo.$file;
	$html = file_get_contents($url);
	
	$html = preg_replace('/(href|src)=(\"|\')\.*\//i', "$1=$2$repo", $html);
	
	$jsassets = "<!--PATTERN-JS only necessary for #view-source -->\n";

	$jsassets .= "<!-- end #view-source links -->\n\n";
	
	$jsassets .= "<script src=\"./js/pattern.js\" type=\"text/javascript\"></script>\n";
	
	$jsassets .= "<!--END-PATTERN-JS-->";
	
	$cssassets .= "<link href=\"./css/pattern.css\" media=\"screen, projection\" rel=\"stylesheet\" type=\"text/css\" />\n";
	
	$html = str_ireplace('</head>', "$cssassets\n</head>", $html);
	
	$html = str_ireplace('</body>', "$jsassets\n</body>", $html);
	
	echo $html;

?>