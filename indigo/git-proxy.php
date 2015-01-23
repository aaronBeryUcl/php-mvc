<?php 
	extract($_GET);

	$repo = 'http://ucl-wams.github.io/indigo/';
	//$repo = 'http://aaronBeryUcl.github.io/indigo/';

	$url = $repo.$file;

	$html = file_get_contents($url);

	$jsassets = "";
	$cssassets = "";

	$html = str_ireplace('<head>', "<head>\n<base href='//static.ucl.ac.uk/indigo/'>", $html);
	$html = str_ireplace('</head>', "$cssassets\n</head>", $html);
	$html = str_ireplace('</body>', "$jsassets\n</body>", $html);
	
	echo $html;
?>