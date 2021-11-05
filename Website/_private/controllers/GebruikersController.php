<?php 
namespace Website\Controllers;

class GebruikersController{

    public function users(){
        $template_engine = get_template_engine();
        echo $template_engine->render( 'adminpage_gebruikers', ['user' => request()->user] );
    }

    public function showUsers($slug){
        
        $account = getUserAccount($slug);

        $template_engine = get_template_engine();
        return $template_engine->render( 'gebruikers_gebruiker', ['account' => $account]);

    }

    public function verwijderen($slug){

        $account = getUserAccount($slug);
        
        deleteUser($slug);

        $home_url = url('admin.gebruikers');
	    redirect($home_url);

    }

    public function accepteren($slug){

        $account = getUserAccount($slug);

        acceptUser($slug);

        $home_url = url('admin.gebruikers');
	    redirect($home_url);

    }

    public function blokeer($slug){

        $account = getUserAccount($slug);

        blockUser($slug);

        $home_url = url('admin.gebruikers');
        redirect($home_url);

    }

}