<?php

namespace Website\Controllers;

class BlogController{
    public function savecomment(){

        $conn = mysqli_connect("localhost", "root", "", "transformers" );



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
        
        $home_url = url("login.dashboard");

        redirect($home_url);

    }

}

