<?php $this->layout('layouts::adminwebsite');?>

<h1><?php echo $account['voornaam'];?> <?php echo $account['achternaam']?></h1>

<?php



?>

<?php if($account['active'] == 1){ ?>
    <form action="<?php echo url('verwijder.gebruiker', ['slug' => $account['id']])?>" method="POST">
        <input type="submit" name="verwijderen" value="verwijderen">
    </form>
<?php }?>

<?php if($account['active'] == 0){ ?>
    <form action="<?php echo url('accepteer.gebruiker')?>" method="POST">
        <input type="submit" name="accepteer" value="Accepteer">
    </form>
    <form action="<?php echo url('verwijder.gebruiker', ['slug' => $account['id']])?>" method="POST">
        <input type="submit" name="verwijderen" value="verwijderen">
    </form>
<?php }?>