<?php
     require_once 'app/database/DbConnection.php';
     require_once 'app/classes/Comment.php';

    $comment=new Comment();

    if($_SERVER['REQUEST_METHOD']=='POST'){

        $text=$_POST['text'];

        $user_id=$_SESSION['id'];
        $comment_id=$_SESSION['comment_id'];

        $update=$comment->update($text,$user_id,$comment_id);
    }


?>

<form action="show_post.php" method="POST">
<p class="card-text">
<textarea 
        name="comment" 
        id="description"
        class="form-control"
    rows="6"></textarea>
</p>   
</form>