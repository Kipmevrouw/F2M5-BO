<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class RegistratieController {

	public function signup() {

		$template_engine = get_template_engine();
		echo $template_engine->render('signuppage');

	}
    
	public function handleSignup(){
		// Hier wordt zo het form afgehandeld

		$result = validateRegisrtatoinData($_POST);

		if (count ($result['errors']) === 0 ){
			// Opslaan van gebruiker

			if (userNotRegistered($result['data']['email'])) {

				createUser( $result['data']['voornaam'], $result['data']['achternaam'], $result['data']['email'], $result['data']['wachtwoord'],  $result['data']['leeftijd'],  $result['data']['HKJO'],  $result['data']['WWJHUDC'],  $result['data']['WWJLOHGVPO']);

				//Doorsturem naar de bedankt pagina
				$bedanktUrl = url('signup.thankyou');
				redirect($bedanktUrl);

			}else{
				// Anders foutmelding tonen
				$errors['email'] = 'Dit account bestaat al';
			}
		}

		$template_engine = get_template_engine();
		echo $template_engine->render( 'signuppage', ['errors' => $result['errors']]);
		
	}

	public function registrationThankYou(){

		$template_engine = get_template_engine();
		echo $template_engine->render( 'register_thankyou' );

	}
}