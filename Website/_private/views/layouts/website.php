<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
    <link rel="stylesheet" href="<?php echo site_url( '/css/NavbarStyle.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>
</head>
<body>
<div>
    <header>
        <div class="item1">
            <img src="images/logo letters.png">
        </div>
        <div class="item item2">
            <nav>
                <div class="topnav" id="myTopnav">
                    <?php if ( $this->section( 'navigation' ) ): ?>
                        <?php echo $this->section( 'navigation' ) ?>
                    <?php else: ?>
                        <?php echo $this->fetch( '_navigation' ) ?>
                    <?php endif ?>  
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fas fa bars" style="font-size:24px;color:black;">></i>
                    </a>
                </div>
            </nav>
        </div>    
        <div class="item item3"> 
        <!-- Hier komt sign up en log in knop -->
        </div>
    </header>
    <main>
        <section class="content">
			<?php echo $this->section( 'content' ) ?>
        </section>
        <aside>
			<?php echo $this->section( 'sidebar' ) ?>
        </aside>
    </main>
    <footer>
        &copy; <?php echo date('Y')?>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/navbar.js"></script>
<script src="js/Signup.js"></script>
</body>
</html>

