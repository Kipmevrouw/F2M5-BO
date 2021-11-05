<?php

namespace Website\Controllers;

class SecureController{

    public function secure(){

        $template_engine = get_template_engine();
        echo $template_engine->render( 'securepage' ); 

    }
    public function savecomment(){
        $comment = input("comment");
        echo $comment;

    }

}

