<?php

class patterns
{
    public function index(){
        $view = "pattern";
        extract($_GET);
        $pattern = (isset($pattern)) ? $pattern : "";
        $domain = (isset($domain)) ? $domain : "cdn";
        $title = "Patterns - " . $pattern;

        $helpers = new Helpers;

        $patternsArr = $helpers->buildPattersArr();
        $templatesArr = $helpers->buildTemplatesArr();

        $currTempRow = $helpers->getTemplObjRowNumById($patternsArr,$pattern);
        if($currTempRow > -1){
            $currentTemplate = $patternsArr[$currTempRow];
        }else{
            $view = "index";
        }
//print_r($view);exit;
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/masthead.php';
        require 'application/views/_templates/subnav.php';
        require 'application/views/patterns/' . $view . '.php';
        require 'application/views/_templates/footer.php';
    }

}
