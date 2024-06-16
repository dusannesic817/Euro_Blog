<?php
require_once 'inc/header.php';
?>
<div class="container mt-5">  
    <div class="row">

      <div id="myModal"></div>
      <div class="col-md-12">
          <h5>Top Topics</h5>
          <div class="border-bottom"></div>
      </div>
    </div>
   <div class="row mt-2">
      <div class="col-md-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="public/images/euro_finalists.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="public/images/profil_logos.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="public/images/profil_logos.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
   </div>
   <div class="row mt-5">
    <div class="col-md-12">
        <h5>Euro Topics</h5>
        <div class="border-bottom"></div>
    </div>
  </div>
   <div class="row mt-5 justify-content-center">
      <div class="col-12 col-md-6 mb-3">
        <div class="card h-100">
            <div class="card-header bg-transparent">
                <small>19 May, 2024 | </small>
                <a href="#"><small>By Dusan Nesic</small></a>
            </div>
            <img class="card-img-top" src="public/images/euro_finalists.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-text">Putovanje u Pariz</h5>
                <p id="card-text" class="card-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                    with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Contrary to popular belief,
                    Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                    making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, </p>
                <div><a href="show_blog.php" class="btn btn-link" style="text-decoration: none;">READ MORE</a></div>
            </div>
            <div class="card-footer bg-transparent d-flex align-items-end justify-content-end">
                <small style="margin-right: 0.5rem;">Like(42)</small>
                <small> Dislike (3)</small>
            </div>
        </div>
      </div>
  
      <div class="col-12 col-md-6 mb-3">
          <div class="card h-100">
              <div class="card-header bg-transparent">
                  <small>19 May, 2024 | </small>
                  <a href="#"><small>By Dusan Nesic</small></a>
              </div>
              <img class="card-img-top" src="public/images/profil_logos.jpg" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-text"></h5>
              </div>
              <div class="card-footer bg-transparent d-flex align-items-end justify-content-end">
                  <small style="margin-right: 0.5rem;">Like(42)</small>
                  <small> Dislike (3)</small>
              </div>
          </div>
      </div>
    </div>
</div>
<?php
require_once 'inc/footer.php';
?>