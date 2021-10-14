<?php
// Dit bestand hoort bij de router, en bevat nog een aantal extra functies je kunt gebruiken
// Lees meer: https://github.com/skipperbent/simple-php-router#helper-functions
require_once __DIR__ . '/route_helpers.php';

// Hieronder kun je al je eigen functies toevoegen die je nodig hebt
// Maar... alle functies die gegevens ophalen uit de database horen in het Model PHP bestand

/**
 * Verbinding maken met de database
 * @return \PDO
 */
function dbConnect() {

	$config = get_config( 'DB' );

	try {
		$dsn = 'mysql:host=' . $config['HOSTNAME'] . ';dbname=' . $config['DATABASE'] . ';charset=utf8';

		$connection = new PDO( $dsn, $config['USER'], $config['PASSWORD'] );
		$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$connection->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

		return $connection;

	} catch ( \PDOException $e ) {
		echo 'Fout bij maken van database verbinding: ' . $e->getMessage();
		exit;
	}

}

/**
 * Geeft de juiste URL terug: relatief aan de website root url
 * Bijvoorbeeld voor de homepage: echo url('/');
 *
 * @param $path
 *
 * @return string
 */
function site_url( $path = '' ) {
	return get_config( 'BASE_URL' ) . $path;
}

function get_config( $name ) {
	$config = require __DIR__ . '/config.php';
	$name   = strtoupper( $name );

	if ( isset( $config[ $name ] ) ) {
		return $config[ $name ];
	}

	throw new \InvalidArgumentException( 'Er bestaat geen instelling met de key: ' . $name );
}

/**
 * Hier maken we de template engine en vertellen de template engine waar de templates/views staan
 * @return \League\Plates\Engine
 */
function get_template_engine() {

	$templates_path = get_config( 'PRIVATE' ) . '/views';

	$template_engine = new League\Plates\Engine( $templates_path );
	$template_engine->addFolder('layouts', $templates_path . '/layouts');

	return $template_engine;

}

/**
 * Geef de naam (name) van de route aan deze functie, en de functie geeft
 * terug of dat de route is waar je nu bent
 *
 * @param $name
 *
 * @return bool
 */
function current_route_is( $name ) {
	$route = request()->getLoadedRoute();

	if ( $route ) {
		return $route->hasName( $name );
	}

	return false;

}

function validateRegisrtatoinData($data){
	$errors = [];

	$voornaam	= trim( $data['voornaam']);
	$achternaam = trim( $data['achternaam']);
	$email 		= filter_var( $data['email'], FILTER_VALIDATE_EMAIL );
	$wachtwoord = trim( $data['wachtwoord'] );
	$leeftijd 	= trim( $data['leeftijd']);
	$HKJO		= trim( $data['HKJO']);
	$WWJHUDC	= trim( $data['WWJHUDC']);
	$WWJLOHGVPO = trim( $data['WWJLOHGVPO']);

	// Checks: valideren of email echt eeen geldig email is
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

	$data = [
		'email' => $data['email'],
		'wachtwoord' => $wachtwoord,
		'voornaam' => $voornaam,
		'achternaam' => $achternaam,
		'leeftijd' => $leeftijd,
		'HKJO' => $HKJO,
		'WWJHUDC' => $WWJHUDC,
		'WWJLOHGVPO' => $WWJLOHGVPO

	];
	
	return[
		'data' => $data,
		'errors' => $errors
	];
	
}

function UserNotRegistered($email){
	
	//Checken of de gebruiker al bestaat
	$connection = dbConnect();
	$sql 		= "SELECT * FROM `users` WHERE `email` = :email";
	$statement	= $connection->prepare( $sql );
	$statement->execute( [ 'email' => $email ] );

	return ($statement->rowCount() === 0);
}

function createUser($voornaam, $achternaam, $email, $wachtwoord, $leeftijd, $HKJO, $WWJHUDC, $WWJLOHGVPO){
	
	$connection = dbConnect();

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
	
}