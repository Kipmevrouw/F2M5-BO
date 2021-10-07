<?php $this->layout('layouts::website');?>

<?php $this->start('content')?>
<div class="homepage1">
<h1>Welkom</h1>

<p>Dit is de start van jullie project website!</p>
</div>
<div class="homepage2">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/lisa.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Lisa (24 jaar):</h5>
        <p>Ik kan mij zo gemakkelijk aanpassen aan anderen, dat ik mijzelf op een gegeven moment kwijt was geraakt.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/elwin.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Elwin (29 jaar):</h5>
        <p>Ik ben opgegroeid met de overtuiging dat wat ik vond er toch niet toe deed, maar ook dat wat ik voelde niet gehoord hoefde te worden.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/yasmine foto.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h5>Yasmine (22 jaar):</h5>
        <p>Ik heb gewoon bijna het gevoel dat het niet meer oké is om eerst jezelf op nummer één te zetten.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>
<?php $this->stop()?>




