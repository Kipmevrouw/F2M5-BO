<?php

namespace Website\Controllers;

class AdminController {

    public function admin(){
        $template_engine = get_template_engine();
        echo $template_engine->render( 'adminpage' ); 
    }
}