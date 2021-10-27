<?php

namespace Website\Controllers;

class SecureController{

    public function secure(){

        loginCheck();

        $template_engine = get_template_engine();
        echo $template_engine->render( 'securepage' ); 

    }

}