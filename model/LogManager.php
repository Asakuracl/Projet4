<?php

require_once('Manager.php');

class LogManager extends Manager{
    // addmenber
    public function createMember($nickname, $pass){
        $db =  $this->dbConnect();

        $newMember = $db->prepare('INSERT INTO admins (nickname, pass, registration_date) VALUES(?, ?, Now())');
        $addMember = $newMember->execute(array($nickname, $pass));

        return $addMember;
    }

    /*
      public function newPost($title, $content){
        $db = $this->dbConnect();

        $addPosts = $db->prepare('INSERT INTO posts (title, content, creation_date) VALUES(?, ?, Now())');
        $addPost = $addPosts->execute(array($title, $content));

        return $addPost;
    }
    */
}