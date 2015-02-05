<?php
	function uCaseEachWord($str){
		$str = " " . $str;

		$arr = split("\s[a-z0-9]+(?!\s)",$str);

		$newStr = "";
		foreach ($arr as $key => $value) {
			$spaceVar = " ";
			if($key===0)$spaceVar = "";
			$newStr = $newStr . $spaceVar . ucfirst($value);
		}
		return $newStr;
	}

	function prettyTemplateLabel($str){
		//remove template prepend
		$str = preg_replace("/template\-(.+)/i", "$1",$str);

		//remove hyphens
		$str = preg_replace("/\-/i"," ",$str);

		//replace common abbreviations
		$str = preg_replace("/nav/i","navigation",$str);
		$str = preg_replace("/([0-9]+)(\s*)col/i","$1 column",$str);

		//special case
		if(strtolower($str)==='template')$str="Default";

		//return uCaseEachWord($str);
		return ucfirst($str);
	}
?>