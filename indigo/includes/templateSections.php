<?php
	class Templates{
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
			return new Templates($id,$label,$header,$description,$blurb);
		}
	}

	$templatesArr = array(
		TempFactory::create(
			"template"
			,"Vertical navigation with 2 content columns (default)"
			,""
			,''
			,''
		)
		,TempFactory::create(
			"template-1col-vertical-nav"
			,"Vertical Navigation with Central Column"
			,""
			,''
			,''
		)
		,TempFactory::create(
			"template-combi-nav-2-col"
			,"Vertical and Horizontal navigation with 1 main content column"
			,""
			,''
			,''
		)
		,TempFactory::create(
			"template-combi-nav-3-col"
			,"Vertical and Horizontal navigation with 2 content columns"
			,""
			,''
			,''
		)
		,TempFactory::create(
			"template-horizontal-nav-one-col"
			,"Horizontal Navigation 1 central column"
			,""
			,''
			,''
		)
		,TempFactory::create(
			"template-horizontal-nav"
			,"Horizontal navigation 2 content columns"
			,""
			,''
			,''
		)
		,TempFactory::create(
			"template-carousel"
			,"Carousel in default template"
			,"Notes"
			,'<p>A carousel can be used to display a slideshow of images.</p>'
			,'<p>See <a href="patterns-carousel.php?pattern=carousel&requirejs=true">carousel pattern</a> for usage</p>'
		)
		,TempFactory::create(
			"template-video-listing"
			,"Video listing in default template"
			,""
			,''
			,''
		)
		,TempFactory::create(
			"template-video"
			,"Video in default template"
			,"Notes"
			,""
			,'<p>You will need some basic familiarity with using JavaScript plugins to use the video pattern</p><p>We use a requirejs module loader. You can copy this example and make adjustments to the code to show your chosen video. By changing the properties of the the  <code>setup()</code> method you can replace the holder image and the file for the video asset</p>'
		)
	);
?>