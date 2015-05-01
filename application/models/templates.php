<?php
	/*
	Build array with the arguments as below

	array($id,$label,$header,$description,$blurb)
	*/
	class TemplateModel{

		private $templatesArr = array(
		    array(
		        "template"
		        ,"Vertical navigation with 2 content columns (default)"
		        ,""
		        ,''
		        ,''
		    )
		    ,array(
		        "template-1col-vertical-nav"
		        ,"Vertical Navigation with Central Column"
		        ,""
		        ,''
		        ,''
		    )
		    ,array(
		        "template-combi-nav-2-col"
		        ,"Vertical and Horizontal navigation with 1 main content column"
		        ,""
		        ,''
		        ,''
		    )
		    ,array(
		        "template-combi-nav-3-col"
		        ,"Vertical and Horizontal navigation with 2 content columns"
		        ,""
		        ,''
		        ,''
		    )
		    ,array(
		        "template-horizontal-nav-one-col"
		        ,"Horizontal Navigation 1 central column"
		        ,""
		        ,''
		        ,''
		    )
		    ,array(
		        "template-horizontal-nav"
		        ,"Horizontal navigation 2 content columns"
		        ,""
		        ,''
		        ,''
		    )
		    ,array(
		        "template-cta"
		        ,"Call to action template"
		        ,"Notes"
		        ,''
		    	,''    
		    )
		    ,array(
		        "template-carousel"
		        ,"Carousel in default template"
		        ,"Notes"
		        ,'<p>A carousel can be used to display a slideshow of images.</p>'
		        ,'<p>See <a href="patterns-carousel.php?pattern=carousel&requirejs=true">carousel pattern</a> for usage</p>'
		    )
		    ,array(
		        "template-video-listing"
		        ,"Video listing in default template"
		        ,""
		        ,''
		        ,''
		    )
		    ,array(
		        "template-video"
		        ,"Video in default template"
		        ,"Notes"
		        ,""
		        ,'<p>You will need some basic familiarity with using JavaScript plugins to use the video pattern</p><p>We use a requirejs module loader. You can copy this example and make adjustments to the code to show your chosen video. By changing the properties of the the  <code>setup()</code> method you can replace the holder image and the file for the video asset</p>'
		    )
		);
		public function getTemplatesArr(){
			return $this->templatesArr;
		} 
	}

?>