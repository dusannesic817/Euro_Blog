<?php



class Post{

    protected $connection;


    public function __construct(){
        global $connection;
        $this->connection=$connection;
    }


    public function create($user_id,$title,$text,$tag){

        $sql="INSERT INTO `posts` (`user_id`, `title`,`text`,`tag`)
            VALUES(?,?,?,?)
        ";

        $stmt=$this->connection->getConnection()->prepare($sql);
        $stmt->bind_param("isss",$user_id,$title,$text,$tag);

        return $stmt->execute();

        
    }


    public function show($id){
        $sql="SELECT * FROM posts WHERE id = ?";
        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows>0){

            return $result->fetch_assoc();
        }

}

    public function update($id){
        $sql="UPDATE `posts` SET `title`=?, `text`=?, `tag`=? WHERE `id`=?";
        $stmt=$this->connection->getConnection()->prepare($sql);
        $stmt->bind_param("i",$id);
        $stmt->execute();
    }

    public function delete($id){
        $sql="DELETE FROM `posts` WHERE id`=?";

        $stmt=$this->connection->getConnection()->prepare($sql);

        $stmt->bind_param("i", $id);
        $stmt->execute();
    }

}
