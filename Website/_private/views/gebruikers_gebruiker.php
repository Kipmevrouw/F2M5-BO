<?php $this->layout('layouts::adminwebsite');?>
<head>

</head>

<body>
    <div class="gebruiker_container">
        <div class="gebruiker_border">
            <h1><?php echo $account['voornaam'];?> <?php echo $account['achternaam']?></h1>
            <div>
                <div>
                    <p class="vragen">Voornaam: <?php echo $account['voornaam']?></p>
                    <p class="vragen">Achternaam: <?php echo $account['achternaam']?></p>
                    <p class="vragen">Email: <?php echo $account['email']?></p>
                    <p class="vragen">Leeftijd: <?php echo $account['leeftijd']?></p>
                    <p class="vragen">Hoe ken je ons? <?php echo $account['hoe_ken_je_ons']?></p>
                    <p class="vragen">Wat wil je halen uit de community? <?php echo $account['wat_wil_je_halen_uit_de_community']?></p>
                    <p class="vragen">Wat wil je leren op het gebied van persoonlijke ontwikkeling? <?php echo $account['wat_wil_je_leren_op_het_gebied_van_persoonlijke_ontwikkeling']?></p>
                </div>
            </div>

            <?php if($account['active'] == 1){ ?>
                <div class="gebruikers_buttons_container">
                    <form action="<?php echo url('blokeer.gebruiker', ['slug' => $account['id']])?>" method="POST">
                        <input class="gebruikers_buttons" type="submit" name="blokeren" value="Blokeer">
                    </form>
                    <form action="<?php echo url('verwijder.gebruiker', ['slug' => $account['id']])?>" method="POST">
                        <input class="gebruikers_buttons" id="verwijderen" type="submit" name="verwijderen" value="Verwijderen">
                    </form>
                </div>
            <?php }?>

            <?php if($account['active'] == 0){ ?>
                <div class="gebruikers_buttons_container">
                    <form action="<?php echo url('accepteer.gebruiker', ['slug' => $account['id']])?>" method="POST">
                        <input class="gebruikers_buttons" id="accepteer" type="submit" name="accepteer" value="Accepteer">
                    </form>
                    <form action="<?php echo url('verwijder.gebruiker', ['slug' => $account['id']])?>" method="POST">
                        <input class="gebruikers_buttons" id="verwijderen" type="submit" name="verwijderen" value="Verwijderen">
                    </form>
                </div>
            <?php }?>
        </div>
    </div>
</body>