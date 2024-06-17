<?php

class Rating{

    protected $connection;


    public function __construct(){
        global $connection;
        $this->connection=$connection;
    }


    public function create($user_id,$post_id,$mark){

        $mark = $mark ? 1 : 0;
        $sql="INSERT INTO `ratings` (`user_id`, `post_id`,`mark`)
        VALUES(?,?,?)";

        $stmt=$this->connection->getConnection()->prepare($sql);
        $stmt->bind_param("iii",$user_id,$post_id,$mark);

        return $stmt->execute();
        
    }

}