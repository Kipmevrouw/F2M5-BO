<?php

namespace Website\Controllers;

class AdminController {

    public function admin(){
        $template_engine = get_template_engine();
        echo $template_engine->render( 'adminpage', ['user' => request()->user] ); 
    }

    public function feed(){
        $template_engine = get_template_engine();
        echo $template_engine->render( 'adminpage_feed', ['user' => request()->user] );
    }

    public function gebruikers(){
        $template_engine = get_template_engine();
        echo $template_engine->render( 'adminpage_gebruikers', ['user' => request()->user] );
    }
}