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
    // login
    public function logIn($nickname){
        $db =  $this->dbConnect();
        $login = $db->prepare('SELECT id, nickname, pass, DATE_FORMAT( registration_date, \'%d/%m/%Y à %Hh%imin\') AS registration_date_fr FROM admins WHERE nickname= :nickname');
        $checkLog = $login->execute(array(
            'nickname' => $nickname));

        return $checkLog;
    }
}