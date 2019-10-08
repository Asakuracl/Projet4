<?php

require_once('Manager.php');

class CommentManager{
    public function getComments($postId){
        $db =  $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments WHERE post_id=? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId, $author, $comment){
        $db = $this->dbConnect();

        $comments = $db->prepare('INSERT INTO comments (post_id, author, comment, comment_date) VALUES(?, ?, ?, Now())');
        $addComment = $comments->execute(array($postId, $author, $comment));

        return $addComment;
    }

}