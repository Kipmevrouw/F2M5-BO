<?php

namespace Website\Controllers;

class contactController {

    public function contact(){
        $template_engine = get_template_engine();
        echo $template_engine->render( 'contact' ); 
    }
}