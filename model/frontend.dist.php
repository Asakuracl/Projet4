// to replace model

<?php
function getPosts(){
    $db =  dbConnect();
    $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

    return $req;
}

function getPost($postId){
    $db =  dbConnect();
    $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts WHERE id=?');
    $req->execute(array($postId));
    $post = $req->fetch();

    return $post;
}

function getComments($postId){
    $db =  dbConnect();
    $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments WHERE post_id=? ORDER BY comment_date DESC');
    $comments->execute(array($postId));

    return $comments;
}

function postComment($postId, $author, $comment){
    $db = dbConnect();

    $comments = $db->prepare('INSERT INTO comments (post_id, author, comment, comment_date) VALUES(?, ?, ?, Now())');
    $addComment = $comments->execute(array($postId, $author, $comment));

    return $addComment;
}

function dbConnect(){
     $db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', '***', '***');

      return $db;
}