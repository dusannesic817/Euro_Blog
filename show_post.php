<?php
require_once 'inc/header.php';
require_once 'app/classes/Post.php';
require_once 'app/classes/User.php';

    $post=new Post();
    $user= new User();


    if(isset($_GET['id'])){

        $post_id=$_GET['id'];

       
        $show=$post->show($post_id);
        $user_id=$show['user_id'];
        $users=$user->show($user_id);

     

    }

    
   


?>
    
<div class="container mt-5 mt-5">
    <div class="row">
        <div class="col-md-8" style="border: 1px solid black;">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="..." alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
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
        <div class="col-md-4 profile-card" style=" background-color: #143cda;">
            <!-- Slika koja prelazi preko gornje ivice -->
            <img src="public/images/mascot.jpg" alt="" class="profile-pic">
        
            <!-- Tekst unutar diva -->
            <div class="mt-5">
                <h5 class="mb-5 text-center"><?php echo $users['first_name']." " . $users['last_name']?></h5>
                <small><?php echo $users['about']?></small>
            </div>
        </div>

    </div>

    <div class="row mt-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" style="color:#ffca00;"><?php echo $show['title']?></h5>
                    <p class="card-text"><?php echo $show['text']?></p>
                </div>
              </div>
        </div>       
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <div class="d-flex justify-content-end">
                <div class="like-button" style="margin-right: 10px;"><i class="far fa-thumbs-up fa-lg"></i>(32)</div>
                <div class="dislike-button"><i class="far fa-thumbs-down fa-lg"></i>(2)</div>
            </div>
        </div>
    </div>
    
    
    <form action="##" method="POST">
    <div class="row mt-2">
        <div class="col-md-8">
            <div class="card  border-0">
                <div class="card-body">
                    <div class="card-title">Leave Comment</div>            
                        <textarea 
                        name="comment" 
                        id="description"
                        class="form-control"
                        rows="6"></textarea>
                </div>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="card  border-0">
                <div class="card-body">
                    <div class="mt-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name">
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
    <button type="submit" class=" mt-2 buttons" style="margin-left: 20px;">Leave Comment</button>
</form>
    <div class="row mt-5">
        <div class="col-md-12">
            <h5 class="mb-2" style="color:#ffca00;">285 COMMENTS</h5>
            <div class="border-bottom"></div>
           
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <div class="card custom-border">
                    <div class="card-body">
                        <div class="card-title">Dusan Nesic</div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <small class="card-text">19 May, 2024</small>
                    </div>
                </div>        
                <div class="card custom-border">
                    <div class="card-body">
                        <div class="card-title">Dusan Nesic</div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <small class="card-text">19 May, 2024</small>
                    </div>
                </div>
                
            </div>
        </div>
</div>
<?php
require_once 'inc/footer.php';
?>
    