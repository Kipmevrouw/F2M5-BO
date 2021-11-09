<?php $this->layout('layouts::adminwebsite');?>
<div class="gebruiker_container">

<h1>Gebruikers</h1>

<?php 
$connection = dbConnect();
$sql        = "SELECT * FROM users";
$statement  = $connection->query( $sql );
$result     = $statement->fetchAll(); ?>

    <div class="gebruiker_border">
        <?php foreach($result as $user):?>
            
            <p><a href="<?php echo url('gebruiker.show', ['slug' => $user['voornaam']])?>" class="gebruiker"><?php echo $user['voornaam']?></a></p>

        <?php endforeach; ?>
    </div>
</div>