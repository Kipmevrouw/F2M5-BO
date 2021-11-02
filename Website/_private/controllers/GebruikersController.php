<?php 
namespace Website\Controllers;

class GebruikersController{

    public function users(){
        $template_engine = get_template_engine();
        echo $template_engine->render( 'adminpage_gebruikers', ['user' => request()->user] );
    }

    public function showUsers($slug){
        
        echo $slug;

    }

}