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
class LoginController {

    public function login() {

		$template_engine = get_template_engine();
		echo $template_engine->render('loginpage');

	}

	public function signup() {

		$template_engine = get_template_engine();
		echo $template_engine->render('signuppage');

	}
    
	public function handleSignup(){
		// Hier wordt zo het form afgehandeld

		$errors = [];

		// Checks: valideren of email echt eeen geldig email is

		$voornaam	= trim( $_POST['voornaam']);
		$achternaam = trim( $_POST['achternaam']);
		$email 		= filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL );
		$wachtwoord = trim( $_POST['wachtwoord'] );
		$leeftijd 	= trim( $_POST['leeftijd']);
		$HKJO		= trim( $_POST['HKJO']);
		$WWJHUDC	= trim( $_POST['WWJHUDC']);
		$WWJLOHGVPO = trim( $_POST['WWJLOHGVPO']);

		if ( $email === false ) {
			$errors['email'] = 'Geen geldig email ingevult';
		}
		// Checks: wachtwoord minimaal 6 tekens
		if ( strlen( $wachtwoord ) < 6 ){
			$errors['wachtwoord'] = 'Geen geldig wachtwoord, minimaal 6 tekens';
		}
		// Checks: of de rest is ingevult
		if ( strlen( $voornaam ) < 1 ){
			$errors['voornaam'] = 'Geen voornaam ingevult';
		}
		
		if ( strlen( $achternaam) < 1 ){
			$errors['achternaam'] = 'Geen voornaam ingevult';
		}

		if ( strlen( $leeftijd) < 1 ){
			$errors['leeftijd'] = 'Geen leeftijd ingevult';
		}

		if ( strlen( $HKJO) < 1 ){
			$errors['HKJO'] = 'Geen antwoord gegeven';
		}

		if ( strlen( $WWJHUDC) < 1 ){
			$errors['WWJHUDC'] = 'Geen antwoord gegeven';
		}

		if ( strlen( $WWJLOHGVPO) < 1 ){
			$errors['WWJLOHGVPO'] = 'Geen antwoord gegeven';
		}

		if (count ($errors) === 0 ){
			// Opslaan van gebruiker

			//Checken of de gebruiker al bestaat
			$connection = dbConnect();
			$sql 		= "SELECT * FROM `users` WHERE `email` = :email";
			$statement	= $connection->prepare( $sql );
			$statement->execute( [ 'email' => $email ] );



			if ( $statement->rowCount() === 0 ) {
				$sql			= "INSERT INTO `users` (`voornaam`, `achternaam`, `email`, `wachtwoord`, `leeftijd`, `hoe_ken_je_ons`, `wat_wil_je_halen_uit_de_community`, `wat_wil_je_leren_op_het_gebied_van_persoonlijke_ontwikkeling`) VALUES (:voornaam, :achternaam, :email, :wachtwoord, :leeftijd, :HKJO, :WWJHUDC, :WWJLOHGVPO)";
				$statement 		= $connection->prepare( $sql );
				$safe_password 	= password_hash( $wachtwoord, PASSWORD_DEFAULT);
				$params 		= [
					'voornaam'	 => $voornaam,
					'achternaam' => $achternaam,
					'email'		 => $email,
					'wachtwoord' => $safe_password,
					'leeftijd'	 => $leeftijd,
					'HKJO'		 => $HKJO,
					'WWJHUDC'	 => $WWJHUDC,
					'WWJLOHGVPO' => $WWJLOHGVPO

				];
				$statement->execute( $params );
				echo "Klaar!";
				exit;
			}else{
				// Anders foutmelding tonen
				$errors['email'] = 'Dit account bestaat al';
			}
		}

		
	}
}

