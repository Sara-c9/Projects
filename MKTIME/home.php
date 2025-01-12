<?php
include('nav.php');
?>
<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="http://localhost/Projects/MKTIME/Img/women_watch.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <a href="women_watches.php"><button type="button" class="btn btn-success btn-lg w-50" >Women Collection</button></a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="http://localhost/Projects/MKTIME/Img/men_watch.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <a href="men_watches.php"><button type="button" class="btn btn-success btn-lg w-50" >Men Collection</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="http://localhost/Projects/MKTIME/Img/kids_watch.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <a href="kids_watches.php"><button type="button" class="btn btn-success btn-lg w-50" >Kids Collection</button></a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="card mb-3 mt-3">
  <img src="http://localhost/Projects/MKTIME/Img/sales_watch.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  </div>
</div>
<?php
include('footer.php');
?>