<?php

require_once('Manager.php');

class PostManager extends Manager{ 
    public function getPosts(){
        $db =  $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId){
        $db =  $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts WHERE id=?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    //
    public function newPost($title, $content){
        $db = $this->dbConnect();

        $addPosts = $db->prepare('INSERT INTO addPosts(title, content, creation_date) VALUES(?, ?, ?, Now())');
        $addPost = $createPost->execute(array($title, $content));

        return $addPost;
    }
    //
}
