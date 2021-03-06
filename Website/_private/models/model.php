<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

function getUsers() {
	$connection = dbConnect();
	$sql        = "SELECT * FROM `users`";
	$statement  = $connection->query( $sql );

	return $statement->fetchAll();
}

function getAllTopics(){

	$connection = dbConnect();
	$sql = 'SELECT * FROM `topics`';
	$statement = $connection->query($sql);

	return $statement->fetchALL();
}

function getUserByEmail($email){

	$connection = dbConnect();
	$sql		= "SELECT * FROM `users` WHERE email = :email";
	$statement	= $connection->prepare( $sql );
	$statement->execute( [ 'email' => $email ] );

	if($statement->rowCount() === 1) {
		return $statement->fetch();
	}

	return false;
}

function getUserById($id){
	$connection = dbConnect();
	$sql		= "SELECT * FROM `users` WHERE `id` = :id";
	$statement	= $connection->prepare( $sql );
	$statement->execute( [ 'id' => $id ]);

	if($statement->rowCount() === 1){
		return $statement->fetch();
	}

	return false;
}

function getUserAccount($slug){
	
	$connection = dbConnect();

	$sql = "SELECT * FROM `users` WHERE voornaam = :slug";

	$statement = $connection->prepare($sql);
	$statement->execute(
		[ 
			'slug' => $slug
		]
	);

	return $statement->fetch();
}