<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	// START: Zet hier al eigen routes (alle URL's die je op je website hebt) en welke controller en functie deze pagina afhandelt
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get( '/', 'WebsiteController@home' )->name( 'home' );
	SimpleRouter::get( '/overons', 'OveronsController@overons' )->name( 'overons' );

	// Registratie routes
	SimpleRouter::get( '/signup', 'RegistratieController@signup' )->name( 'signup' );
	SimpleRouter::post( '/signup/handle', 'RegistratieController@handleSignup' )->name( 'signup.handle' );
	SimpleRouter::get( '/signup/bedankt', 'RegistratieController@registrationThankYou' )->name( 'signup.thankyou' );

	// Login Routes
	SimpleRouter::get( '/login', 'LoginController@login' )->name( 'login' );
	SimpleRouter::post( '/login/handle', 'LoginController@handleLogin' )->name( 'login.handle' );

	SimpleRouter::get( '/ingelogd/dashboard', 'LoginController@userDashboard' )->name( 'login.dashboard' );
	


	// STOP: Tot hier al je eigen URL's zetten, dit stukje laat de 4040 pagina zien als een route/url niet kan worden gevonden.
	SimpleRouter::get( '/not-found', function () {
		http_response_code( 404 );

		return '404 Page not Found';
	} );

} );


// Dit zorgt er voor dat bij een niet bestaande route, de 404 pagina wordt getoond (die hierboven als route staat ingesteld)
SimpleRouter::error( function ( Request $request, \Exception $exception ) {
	if ( $exception instanceof NotFoundHttpException && $exception->getCode() === 404 ) {
		response()->redirect( site_url() . '/not-found' );
	}

} );

