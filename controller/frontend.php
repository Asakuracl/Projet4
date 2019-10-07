<?php
require_once('model\PostManager.php');
require_once('model\CommentManager.php');

function listPosts(){
    $posts = getPosts();

    require('view\frontend\view.php');
}

function post(){
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('view\frontend\postView.php');
}

function addComment($postId, $author, $comment){
    $addComment = postComment($postId, $author, $comment);

    if ($addComment === false){
        die("Erreur d'ajout du commentaire");
    } else{
        header("Location: index.php?action=post&id=" . $postId);
    }
}