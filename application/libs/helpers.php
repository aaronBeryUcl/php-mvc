<?php
	class Helpers{
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

		function buildPattTemplListings($arrOfTemplObj,$type){
			$listing = '<ul>';

			foreach ($arrOfTemplObj as $templateKey => $templateEntry) {
				echo '<li><a href="' . SITE_PATH . '/' . $type . '?pattern=' . $templateEntry->getCol('templId') . '">' . $templateEntry->getCol('templLabel') . '</a></li>';
			}

			$listing .= '</ul>';

			return $listing;
		}

		function getTemplObjRowNumById($arr,$id){
			$key = -1;
			foreach ($arr as $tmpKey => $value) {
				if($value->getCol('templId')===$id){
					$key = $tmpKey;
					break;
				}
			}
			return $key;
		}

		/* Templates Array
	    -------------------------------------------------------------*/
	    public function buildTemplatesArr(){
	    	$templatesArr = array();
	    	require 'application/models/templates.php';
	    	$templateModel = new TemplateModel;
	    	$templatesTmpArr = $templateModel->getTemplatesArr();
	    	if(isset($templatesTmpArr)){
				foreach ($templatesTmpArr as $templateKey => $templateVal){
		    		array_push($templatesArr, TempFactory::create(
		    				$templateVal[0]
		    				,$templateVal[1]
		    				,$templateVal[2]
		    				,$templateVal[3]
		    				,$templateVal[4]
		    			)
		    		);
		    	}    		
	    	}

	    	return $templatesArr;
	    }	

	    public function buildPattersArr(){
	    	$patternsArr = array();
	    	require 'application/models/patterns.php';
	    	$pattModel = new PatternsModel;
	    	$patternsTmpArr = $pattModel->getPatternsArr();
	    	if(isset($patternsTmpArr)){
				foreach ($patternsTmpArr as $patternKey => $patternVal){
		    		array_push($patternsArr, TempFactory::create(
		    				$patternVal[0]
		    				,$patternVal[1]
		    				,$patternVal[2]
		    				,$patternVal[3]
		    				,$patternVal[4]
		    			)
		    		);
		    	}    		
	    	}

	    	return $patternsArr;
	    }
	    /*Case Study
	    -------------------------------------------------*/
	    public function buildCaseStudyArr(){
	    	$arr = array();
	    	require 'application/models/caseStudies.php';
	    	$model = new CaseStudiesModel;
	    	$tmpArr = $model->getCaseStudiesArr();
	    	if(isset($tmpArr)){
				foreach ($tmpArr as $key => $val){
		    		array_push($arr, CaseStudyFactory::create(
		    				$val[0]
		    				,$val[1]
		    				,$val[2]
		    				,$val[3]
		    				,$val[4]
		    			)
		    		);
		    	}    		
	    	}

	    	return $arr;
	    }
	}
	/* Bae Objects and Factories
	------------------------------------------------------------------*/

	class IndigoCodeSource{
	    private $templId;
	    private $templLabel;
	    private $templHeader;
	    private $templDescription;
	    private $templBlurb;

	    public function __construct($id,$label,$header,$description,$blurb){
	        $this->templId = $id;
	        $this->templLabel = $label;
	        $this->templHeader = $header;
	        $this->templDescription = $description;
	        $this->templBlurb = $blurb;
	    }

	    public function getCol($col){
	        if(isset($this->$col)){
	            return $this->$col;
	        }else{return '';}
	    }
	}

	class TempFactory{
	    public static function create($id,$label,$header,$description,$blurb){
	        return new IndigoCodeSource($id,$label,$header,$description,$blurb);
	    }
	}

	class CaseStudyObj{
	    private $caseStudyId;
	    private $caseStudyTitle;
	    private $caseStudyImageRelLink;
	    private $caseStudyDescription;
	    private $caseStudyLink;

	    public function __construct($id,$title,$imageRelLink,$description,$link){
	        $this->caseStudyId = $id;
	        $this->caseStudyTitle = $title;
	        $this->caseStudyImageRelLink = $imageRelLink;
	        $this->caseStudyDescription = $description;
	        $this->caseStudyLink = $link;
	    }

	    public function getCol($col){
	        if(isset($this->$col)){
	            return $this->$col;
	        }else{return '';}
	    }
	}

	class CaseStudyFactory{
	    public static function create($id,$title,$imageRelLink,$description,$link){
	        return new CaseStudyObj($id,$title,$imageRelLink,$description,$link);
	    }
	}
?>
