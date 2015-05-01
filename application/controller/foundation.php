<?php

class foundation
{
    public function navigation(){
        header( 'Location: ' .  URL . '/patterns/navigation/') ;
    }
    
    public function grid(){
        $title = "Grid System";
        $helpers = new Helpers;
        
        $patternsArr = $helpers->buildPattersArr();
        $templatesArr = $helpers->buildTemplatesArr();

        require 'application/views/_templates/header.php';
        require 'application/views/_templates/masthead.php';
        require 'application/views/_templates/subnav.php';
        require 'application/views/foundation/grid.php';
        require 'application/views/_templates/footer.php';
    }

    public function typography(){
        $title = "Typography";
        $helpers = new Helpers;
        
        $patternsArr = $helpers->buildPattersArr();
        $templatesArr = $helpers->buildTemplatesArr();

        require 'application/views/_templates/header.php';
        require 'application/views/_templates/masthead.php';
        require 'application/views/_templates/subnav.php';
        require 'application/views/foundation/typography.php';
        require 'application/views/_templates/footer.php';
    }

    public function colour(){
        $title = "Colour";
        $helpers = new Helpers;
        
        $patternsArr = $helpers->buildPattersArr();
        $templatesArr = $helpers->buildTemplatesArr();

        require 'application/views/_templates/header.php';
        require 'application/views/_templates/masthead.php';
        require 'application/views/_templates/subnav.php';
        require 'application/views/foundation/colour.php';
        require 'application/views/_templates/footer.php';
    }

    public function iconography(){
        $title = "Iconography";
        $helpers = new Helpers;
        
        $patternsArr = $helpers->buildPattersArr();
        $templatesArr = $helpers->buildTemplatesArr();
        
        require 'application/views/_templates/header.php';
        require 'application/views/_templates/masthead.php';
        require 'application/views/_templates/subnav.php';
        require 'application/views/foundation/iconography.php';
        require 'application/views/_templates/footer.php';
    }

}
