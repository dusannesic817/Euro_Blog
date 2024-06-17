<?php



class Comment{

    protected $connection;


    public function __construct(){
        global $connection;
        $this->connection=$connection;
    }

    public function create($user_id,$visitor_id,$post_id,$text){

        $sql="INSERT INTO `comments` (`user_id`,`visitor_id`, `post_id`,`text`)
            VALUES(?,?,?,?)
        ";

        $stmt=$this->connection->getConnection()->prepare($sql);
        $stmt->bind_param("iiis",$user_id,$visitor_id,$post_id,$text);

        return $stmt->execute();
        
    }


    
    public function show($id){
        $sql="SELECT 
                comments.text as text,
                comments.created_at as created_at,
                users.first_name as user_first_name,
                users.last_name as user_last_name,
                visitors.name as visitor_name
                FROM 
                    comments
                LEFT JOIN 
                    users ON users.id = comments.user_id
                LEFT JOIN 
                    visitors ON visitors.id = comments.visitor_id
                WHERE comments.post_id = ?";

        $stmt = $this->connection->getConnection()->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows>0){

             return $result->fetch_all(MYSQLI_ASSOC);
        }else{
            return [];
        }

}

    public function update($id,$user_id){
        $sql="UPDATE `comments` SET `text`=?, `user_id`=? WHERE `id`=?";

        $stmt=$this->connection->getConnection()->prepare($sql);
        $stmt->bind_param("ii",$id,$user_id);
        $stmt->execute();
    }

    public function delete($id,$user_id){
        $sql="DELETE FROM `comments` WHERE `id`=? AND `user_id`=?
";

        $stmt=$this->connection->getConnection()->prepare($sql);

        $stmt->bind_param("ii", $id,$user_id);
        $stmt->execute();
    }

}