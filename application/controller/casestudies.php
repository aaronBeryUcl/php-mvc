<?php

class casestudies
{
    public function index(){
        $title = "Case studies";
        $helpers = new Helpers;
        
        $patternsArr = $helpers->buildPattersArr();
        $templatesArr = $helpers->buildTemplatesArr();
        
        $caseStudiesArr = $helpers->buildCaseStudyArr();

        require 'application/views/_templates/header.php';
        require 'application/views/_templates/masthead.php';
        require 'application/views/_templates/subnav.php';
        require 'application/views/case-studies/index.php';
        require 'application/views/_templates/footer.php';
    }

}
