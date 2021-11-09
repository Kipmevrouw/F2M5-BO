<?php

namespace Website\Controllers;

class AdminController {

    public function admin(){
        $template_engine = get_template_engine();
        echo $template_engine->render( 'adminpage', ['user' => request()->user] ); 
    }

    public function feed(){
        $template_engine = get_template_engine();
        echo $template_engine->render( 'admin_user_dashboard', ['user' => request()->user] );
    }

    public function saveAdmincomment(){

        $conn = mysqli_connect("localhost", "root", "", "transformers_community" );



	    $sql 		= "SELECT * FROM data";
        $query = mysqli_query($conn, $sql);

        if(isset($_REQUEST["new_post"])){
            $title = $_REQUEST["title"];
            $content = $_REQUEST["content"];
            $user = loggedInUser();
            $username = $user['voornaam'];


            $sql = "INSERT INTO data(title, content, user) VALUES('$title', '$content', '$username')";
            mysqli_query($conn, $sql);
            
        }
        
        $home_url = url("admin.feed");

        redirect($home_url);

    }
}