<?php $this->layout('layouts::website');?>
<?php $this->start('sidebar');?>

<div>
    
</div>

<?php $this->stop()?>
<link rel="stylesheet" href="<?php echo site_url( '/css/signupstyle.css' ) ?>" media="all">
<div class = "Body">
    <form action="" class ="form">
        <h2 class="text-center">Login</h2>
        <p class ="text-center">Vul hieronder je email en wachtwoord in.</p>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="input-group">
            <label>Wachtwoord</label>
            <input type="text" name="wachtwoord">
        </div>
        <div class="btns-group">
            <a class="btn btn-previous">Login</a>
        </div>
        <p>Heb je geen account? <a href="/signup">Maak hier een account</a>.</p>
    </form>
</div>