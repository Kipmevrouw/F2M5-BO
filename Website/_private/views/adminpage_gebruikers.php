<?php $this->layout('layouts::adminwebsite');?>


<h1>Gebruikers</h1>

<?php 
$connection = dbConnect();
$sql        = "SELECT * FROM users";
$statement  = $connection->query( $sql );
$result     = $statement->fetchAll();

foreach($result as $user):?>
    
    <p><a href="<?php echo url('gebruiker.show', ['slug' => $user['voornaam']])?>"><?php echo $user['voornaam']?></a></p>

<?php endforeach; ?>