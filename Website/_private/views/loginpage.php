<?php $this->layout('layouts::website');?>
<?php $this->start('sidebar');?>

<div>
    
</div>

<?php $this->stop()?>
<link rel="stylesheet" href="<?php echo site_url( '/css/signupstyle.css' ) ?>" media="all">
<div class = "Body">
    <form action="<?php echo url('login.handle')?>" method ="POST" class ="form">
        <h2 class="text-center">Login</h2>
        <p class ="text-center">Vul hieronder je email en wachtwoord in.</p>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo input('email')?>">
            <?php if(isset($errors['email'])):?>
                    <?php echo $errors['email']?>
            <?php endif;?>
        </div>
        <div class="input-group">
            <label>Wachtwoord</label>
            <input type="password" name="wachtwoord">
            <?php if(isset($errors['wachtwoord'])):?>
                    <?php echo $errors['wachtwoord']?>
            <?php endif;?>
        </div>
        <div class="">
            <button type="submit" class="btn btn-previous width-50 ml-auto">Login</button>
        </div>
        <p>Heb je geen account? <a href="<?php echo url( 'signup' ) ?>">Maak hier een account</a>.</p>
    </form>
    <script src="<?php echo site_url("/js/navbar.js")?>"></script>
</div>
