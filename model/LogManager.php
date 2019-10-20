<?php

require_once('Manager.php');

class LogManager extends Manager{

   /*
    public function postComment($postId, $author, $comment){
        $db = $this->dbConnect();

        $comments = $db->prepare('INSERT INTO comments (post_id, author, comment, comment_date) VALUES(?, ?, ?, Now())');
        $addComment = $comments->execute(array($postId, $author, $comment));

        return $addComment;
    }
    */

    public function checkLog($nam, $pass){
        $db = $this->dbConnect();

        $admins = $db->prepare('INSERT INTO admins (nam, pass, registration_date) VALUES(?, ?, Now())');
        $login = $admin->execute(array($name, $pass));

        return $login;
    }
}