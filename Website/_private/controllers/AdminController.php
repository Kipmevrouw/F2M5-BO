<?php

namespace Website\Controllers;

class AdminController {

    public function admin(){
        if (isLoggedIn()){
            echo "admin";
        }
    }
}