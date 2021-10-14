<?php

namespace Website\Controllers;

/**
 * Class LoginController
 *
 * Deze handelt de logica van de login af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
*/
class LoginController {

	public function login() {

		$template_engine = get_template_engine();
		echo $template_engine->render('loginpage');

	}

    public function handleLogin() {
        
        // Form valideren: email en wachtwoord ingevult?
        $result = validateLoginData($_POST);

        // Checken: bestaat gebruiker met dat email wel?
        if(UserNotRegistered($result['data']['email'])){
            $result['errors']['email'] = 'Deze gebruiker bestaat niet';
        } else{
            // Controleren of wachtwoord klopt (password_verify)
            $user = getUserByEmail($result['data']['email']);

            if(password_verify($result['data']['wachtwoord'], $user['wachtwoord'])){
                // Gebruiker inloggen
                $_SESSION['user_id'] = $user['id'];

                // Gebruiker doorsturen nar een eigen dashbord (alleen ingelogde gebruikers)
                redirect(url('login.dashboard'));
                
            }else{
                $result['errors']['wachtwoord'] = 'Wachtwoord is niet correct';
            }
            
            // Anders foutmelding tonen in inlogformulier
        }

        $template_engine = get_template_engine();
        echo $template_engine->render('loginpage', ['errors' => $result['errors']]);

	}

    public function userDashboard(){

        echo "Ingelogd";

    }

}
