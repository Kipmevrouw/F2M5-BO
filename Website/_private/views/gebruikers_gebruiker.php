<?php $this->layout('layouts::adminwebsite');?>

<h1><?php echo $account['voornaam'];?> <?php echo $account['achternaam']?></h1>

<div>
    <h2>Gegevens:</h2>
    <div>

        <p>Voornaam: <?php echo $account['voornaam']?></p>
        <p>Achternaam: <?php echo $account['achternaam']?></p>
        <p>Email: <?php echo $account['email']?></p>
        <p>Leeftijd: <?php echo $account['leeftijd']?></p>
        <p>Hoe ken je ons? <?php echo $account['hoe_ken_je_ons']?></p>
        <p>Wat wil je halen uit de community? <?php echo $account['wat_wil_je_halen_uit_de_community']?></p>
        <p>Wat wil je leren op het gebied van persoonlijke ontwikkeling? <?php echo $account['wat_wil_je_leren_op_het_gebied_van_persoonlijke_ontwikkeling']?></p>
    </div>
</div>

<?php if($account['active'] == 1){ ?>
    <form action="<?php echo url('verwijder.gebruiker', ['slug' => $account['id']])?>" method="POST">
        <input type="submit" name="verwijderen" value="Verwijderen">
    </form>
    <form action="<?php echo url('blokeer.gebruiker', ['slug' => $account['id']])?>" method="POST">
        <input type="submit" name="blokeren" value="Blokeer">
    </form>
<?php }?>

<?php if($account['active'] == 0){ ?>
    <form action="<?php echo url('accepteer.gebruiker', ['slug' => $account['id']])?>" method="POST">
        <input type="submit" name="accepteer" value="Accepteer">
    </form>
    <form action="<?php echo url('verwijder.gebruiker', ['slug' => $account['id']])?>" method="POST">
        <input type="submit" name="verwijderen" value="Verwijderen">
    </form>
<?php }?>