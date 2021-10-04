<?php $this->layout('layouts::website');?>
<?php $this->start('sidebar');?>

<div>
    
</div>

<?php $this->stop()?>

<div>
    <h2>Login</h2>
    <p>Vul hieronder je email en wachtwoord in.</p>
    <form action="">
        <div>
            <label>Email</label>
            <input type="text" name="email">
            <span></span>
        </div>
        <div>
            <label>Wachtwoord</label>
            <input type="text" name="wachtwoord">
            <span></span>
        </div>
        <div>
            <button>Login</button>
        </div>
        <p>Heb je geen account? <a href="">Maak hier een account</a>.</p>
    </form>
</div>