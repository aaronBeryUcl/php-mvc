<?php

class principles
{
    public function index(){
        $title = "Principles";
        $helpers = new Helpers;
        
        $patternsArr = $helpers->buildPattersArr();
        $templatesArr = $helpers->buildTemplatesArr();

        require 'application/views/_templates/header.php';
        require 'application/views/_templates/masthead.php';
        require 'application/views/_templates/subnav.php';
        require 'application/views/principles/index.php';
        require 'application/views/_templates/footer.php';
    }
    
    public function css(){
        $title = "CSS";
        $helpers = new Helpers;

        $patternsArr = $helpers->buildPattersArr();
        $templatesArr = $helpers->buildTemplatesArr();

        require 'application/views/_templates/header.php';
        require 'application/views/_templates/masthead.php';
        require 'application/views/_templates/subnav.php';
        require 'application/views/principles/css.php';
        require 'application/views/_templates/footer.php';
    }

    public function expansion(){
        $title = "Expanding the Foundation";
        $helpers = new Helpers;

        $patternsArr = $helpers->buildPattersArr();
        $templatesArr = $helpers->buildTemplatesArr();

        require 'application/views/_templates/header.php';
        require 'application/views/_templates/masthead.php';
        require 'application/views/_templates/subnav.php';
        require 'application/views/principles/expansion.php';
        require 'application/views/_templates/footer.php';
    }

    public function foundation(){
        $title = "UCL Design Foundation";
        $helpers = new Helpers;
        
        $patternsArr = $helpers->buildPattersArr();
        $templatesArr = $helpers->buildTemplatesArr();

        require 'application/views/_templates/header.php';
        require 'application/views/_templates/masthead.php';
        require 'application/views/_templates/subnav.php';
        require 'application/views/principles/foundation.php';
        require 'application/views/_templates/footer.php';
    }

    public function responsive(){
        $title = "Responsive Design Principles";
        $helpers = new Helpers;
        
        $patternsArr = $helpers->buildPattersArr();
        $templatesArr = $helpers->buildTemplatesArr();

        require 'application/views/_templates/header.php';
        require 'application/views/_templates/masthead.php';
        require 'application/views/_templates/subnav.php';
        require 'application/views/principles/responsive.php';
        require 'application/views/_templates/footer.php';
    }

}
