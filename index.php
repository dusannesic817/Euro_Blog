<?php
require_once 'inc/header.php';
require_once 'app/classes/Home.php';

  $home=new Home();

  $index=$home->index();

?>
 <?php
      if(isset($_SESSION['succsses_reg']) || isset($_SESSION['login_success']) || isset($_SESSION['succsses_delete'])):?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <?php 
        if(isset($_SESSION['succsses_reg'])){
          echo $_SESSION['succsses_reg'];
          unset($_SESSION['succsses_reg']);
          }elseif(isset($_SESSION['login_success'])){
            echo $_SESSION['login_success'];
          unset($_SESSION['login_success']);
          }elseif(isset($_SESSION['succsses_delete'])){
            echo $_SESSION['succsses_delete'];
            unset($_SESSION['succsses_delete']);
          }
  ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif?>

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
        <?php
        $first = true; 
        foreach ($index as $value) {
        ?>
          <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
            <a href="show_post.php?id=<?php echo $value['id']?>"> 
              <img class="d-block w-100" src="public/images/euro_finalists.jpeg" alt="Slide"> 
            </a>
          </div>
        <?php
          $first = false; 
        }
        ?>
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
   <?php
            foreach($index as $value){

              $time=strtotime($value['created_at']);
              $format_date=date('j M, Y',$time);
                 
        ?>
      <div class="col-12 col-md-6" style='margin-bottom: 100px;'>
        <div class="card h-100">
            <div class="card-header bg-transparent">
                <small><?php echo $format_date?> | </small>
                  <small>By <a href="show_profile.php?id=<?php echo $value['user_id']?>"><?php echo $value['name']. ' '. $value['surname']?></a></small>
            </div>
            <?php
              if($value['img']==NULL){             
            ?>
            <img class="card-img-top" src="public/images/euro_finalists.jpeg" alt="Card image cap">
            <?php
            }else{
            ?>
            <img class="card-img-top" src="public/images/<?php echo $value['img']?>" alt="Card image cap">
            <?php }?>
            <div class="card-body">
                <h5 class="card-text"><?php echo $value['title']?></h5>
                <p id="short-text" class="card-text short-text"><?php echo $value['text']?></p>
                <div><a href="show_post.php?id=<?php echo $value['id']?>" class="btn btn-link" style="text-decoration: none;">READ MORE</a></div>
            </div>
            <div class="card-footer bg-transparent d-flex align-items-end justify-content-end">
                <small style="margin-right: 0.5rem;">Like(<?php echo $value['count_mark_1']?>)</small>
                <small> Dislike (<?php echo $value['count_mark_0']?>)</small>
            </div>
        </div>
      </div>
      <?php }?>
    </div>
</div>
<?php
require_once 'inc/footer.php';
?>