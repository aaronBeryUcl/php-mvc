<?php
	/*
	Build array with the arguments as below

	array($id,$title,$imageRelLink,$description,$link)

    escape quotes in quotes with a backslash e.g. 'I am coding on Aaron\'s computer'

	*/
    class CaseStudiesModel{
        private $caseStudiesTmpArr = array(
            array(
                'ug'
                ,'UCL Undergraduate Prospectus'
                ,'undergraduate.jpg'
                ,'The new undergraduate site was the first UCL site to use the new and improved Indigo \'release 2\''
                ,'//ucl.ac.uk/prospective-students/undergraduate/'
            ),
            array(
                'isd'
                ,'UCL Information Services Division'
                ,'isd.jpg'
                ,'The ISD website went live in autumn 2014. The site was a migration of the existing site.'
                ,'//ucl.ac.uk/isd/'
            ),
            array(
                'impacts'
                ,'UCL Research Impact'
                ,'impact.jpg'
                ,''
                ,'//ucl.ac.uk/impact/'
            ),
            array(
                'teaching-learning'
                ,'UCL Teaching and Learning'
                ,'teaching-learning.jpg'
                ,''
                ,'//ucl.ac.uk/teaching-learning/'
            ),
            array(
                'maps'
                ,'UCL Teaching and Learning'
                ,'maps.jpg'
                ,''
                ,'//ucl.ac.uk/mathematical-physical-sciences/'
            )
        );
        public function getCaseStudiesArr(){
            return $this->caseStudiesTmpArr;
        } 
    }
	
?>