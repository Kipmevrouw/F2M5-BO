<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;
use Website\Middleware\IsAuthenticated;
use Website\Middleware\IsSuperAdmin;

SimpleRouter::setDefaultNamespace( 'Website\Controllers' );

SimpleRouter::group( [ 'prefix' => site_url() ], function () {

	// START: Zet hier al eigen routes (alle URL's die je op je website hebt) en welke controller en functie deze pagina afhandelt
	// Lees de docs, daar zie je hoe je routes kunt maken: https://github.com/skipperbent/simple-php-router#routes

	SimpleRouter::get( '/', 'WebsiteController@home' )->name( 'home' );
	SimpleRouter::get( '/overons', 'OveronsController@overons' )->name( 'overons' );
	SimpleRouter::get( '/Wordtransformer', 'WordtransformerController@Wordtransformer' )->name( 'Wordtransformer' );
	SimpleRouter::get( '/contact', 'contactController@contact' )->name( 'contact' );

	// Registratie routes
	SimpleRouter::group(['prefix' => '/registreren'], function(){
		SimpleRouter::get( '/', 'RegistratieController@signup' )->name( 'signup' );
		SimpleRouter::post( '/handle', 'RegistratieController@handleSignup' )->name( 'signup.handle' );
		SimpleRouter::get( '/bedankt', 'RegistratieController@registrationThankYou' )->name( 'signup.thankyou' );
	});
	
	// Login Routes
	SimpleRouter::group(['prefix' => '/login'], function(){
		SimpleRouter::get( '/', 'LoginController@login' )->name( 'login' );
		SimpleRouter::post( '/handle', 'LoginController@handleLogin' )->name( 'login.handle' );
	});
	
	SimpleRouter::get( '/logout', 'LoginController@logout' )->name( 'logout' );

	

	SimpleRouter::group(['prefix' => '/admin', 'middleware' => IsSuperAdmin::class], function(){
		SimpleRouter::get( '/', 'AdminController@admin' )->name( 'admin' );
		SimpleRouter::get( '/feed', 'AdminController@feed' )->name( 'admin.feed' );
		SimpleRouter::get( '/gebruikers', 'GebruikersController@users' )->name( 'admin.gebruikers' );
		SimpleRouter::get( '/gebruiker/{slug}', 'GebruikersController@showUsers' )->name( 'gebruiker.show' );
		SimpleRouter::post( '/gebruiker/verwijderen/{slug}', 'GebruikersController@verwijderen' )->name( 'verwijder.gebruiker' );
	});

	SimpleRouter::group(['prefix' => '/ingelogd', 'middleware' => IsAuthenticated::class], function(){
		SimpleRouter::get( '/', 'SecureController@secure' )->name( 'secure' );
		SimpleRouter::get( '/dashboard', 'LoginController@userDashboard' )->name( 'login.dashboard' );
	});

	


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

