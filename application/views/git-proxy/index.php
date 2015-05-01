<?php 
	extract($_GET);

	$repo = 'http://ucl-wams.github.io/indigo/';
	//$repo = 'http://aaronBeryUcl.github.io/indigo/';

	$url = $repo.$file;

	$html = file_get_contents($url);

	/*if(isset($json) && $json == 1){
		$htmlStr = preg_replace('/"/i',"'",$html);
		$htmlStr = preg_replace('/\n/i',"", $htmlStr);
		$jsonArr = preg_match('/<body[^>]*>(.+)<\/body>/i', $htmlStr,$matches);
		$jsonStr = json_encode($matches[1]);
		
		echo '{"code":[{"snippet":' . $jsonStr . '}]}';
	}else{

	}*/
		$jsassets = "<!--PATTERN-JS only necessary for #view-source -->\n";

		$jsassets .= "<!-- end #view-source links -->\n\n";

		//$jsassets .= "<script src=\"//" . $demoSiteDomain . "/indigo/js/pattern.js\" type=\"text/javascript\"></script>\n";

		$jsassets .= "<script>require(['app/demo-site']);</script>\n";

		$jsassets .= "<!--END-PATTERN-JS-->";
		$cssassets = "<link href=\"//ucl.ac.uk/indigo/public/css/pattern.css\" media=\"screen, projection\" rel=\"stylesheet\" type=\"text/css\" />\n";

		$html = str_ireplace('<head>', "<head>\n<base href='//static.ucl.ac.uk/indigo/'>", $html);
		$html = str_ireplace('</head>', "$cssassets\n</head>", $html);
		$html = str_ireplace('</body>', "$jsassets\n</body>", $html);

		echo $html;
	

?>