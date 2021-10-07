
<?php $this->layout('layouts::website');?>
<link rel="stylesheet" href="<?php echo site_url( '/css/signupstyle.css' ) ?>" media="all">
<div class="Body">
    <form action="#" class="form">
        <h1 class="text-center">Registreren</h1>
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>
            <div class="progress-step progress-step-active" data-title="Naam"></div>
            <div class="progress-step" data-title="Gebruikersnaam"></div>
            <div class="progress-step" data-title="Leeftijd"></div>
            <div class="progress-step" data-title="Kennen"></div>
            <div class="progress-step" data-title="UitCommunityHalen"></div>
            <div class="progress-step" data-title="Ontwkkeling"></div>
        </div>
        <!-- Steps -->
        <div class="form-step form-step-active">
            <div class="input-group">
                <label for="username">Naam</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="input-group">
                <label for="position">Achternaam</label>
                <input type="text" name="position" id="position">
            </div>
            <div class="">
                <a class="btn btn-next width-50 ml-auto">Volgende</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="input-group">
                <label for="wachtwoord">Wachtwoord</label>
                <input type="text" name="wachtwoord" id="wachtwoord">
            </div>
            <div class="input-group">
                <label for="bevestigWachtwoord">Bevestig Wachtwoord</label>
                <input type="text" name="bevestigWachtwoord" id="bevestigWachtwoord">
            </div>
            <div class="btns-group">
                <a class="btn btn-previous">Vorige</a>
                <a class="btn btn-next">Volgende</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="leeftijd">Wat is je Leeftijd?</label>
                <input type="number" name="leeftijd" id="leeftijd">
            </div>
            <div class="btns-group">
                <a class="btn btn-previous">Vorige</a>
                <a class="btn btn-next">Volgende</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="HKJO">Hoe ken je ons?</label>
                <input type="text" name="HKJO" id="HKJO">
            </div>
            <div class="btns-group">
                <a class="btn btn-previous">Vorige</a>
                <a class="btn btn-next">Volgende</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="WWJHUDC">Wat wil je halen uit de <br> community?</label>
                <input type="text" name="WWJHUDC" id="WWJHUDC">
            </div>
            <div class="btns-group">
                <a class="btn btn-previous">Vorige</a>
                <a class="btn btn-next">Volgende</a>
            </div>
        </div>
        <div class="form-step">
            <div class="input-group">
                <label for="persoonlijkeOntwikkeling">Wat wil je leren op het gebied van<br> persoonlijke ontwikkeling?</label>
                <input type="text" name="persoonlijkeOntwikkeling" id="persoonlijkeOntwikkeling">
            </div>
            <div class="btns-group">
                <a class="btn btn-previous">Vorige</a>
                <input type="submit" value="Versturen" class="btn">
            </div>
        </div>
        <div class="al-een-acc">
            <p>Heb je al een account? <a href="/login">Log hier in</a>.</p>
        </div>
    </form>
    <script src="js/Signup.js"></script>
</div>