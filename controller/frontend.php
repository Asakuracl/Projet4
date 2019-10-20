<?php
require_once('model\PostManager.php');
require_once('model\CommentManager.php');
require_once('model\LogManager.php');

function listPosts(){
    $postManager = new PostManager();
    $posts = $postManager->getPosts();
   
    require('view\frontend\view.php');
}

function post(){
    $postManager = new PostManager();
    $commentManager = new CommentManager();
    
    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view\frontend\postView.php');
}

function addComment($postId, $author, $comment){
    $commentManager = new CommentManager();
    $addComment = $commentManager->postComment($postId, $author, $comment);

    if ($addComment === false){
        die("Erreur d'ajout du commentaire");
    } else{
        header("Location: index.php?action=post&id=" . $postId);
    }
}

// pour ajouter un post
function addPost($title, $content){
    $postManager = new PostManager();
    $addPost = $postManager->newPost($title, $content);

    if ($addPost === false){
        die("Erreur d'ajout du billet");
    } else{
        header("Location: index.php");
    }
 }
//

// vérifier qu'on est connecté
function login($nam, $pass){
    $logManager = new LogManager();
    $login = $logManager->checkLog($nam, $pass);

    if ($login === false){
        die("identifiant ou mot de passe, incorrect");
    } else{
        header("Location: index.php");
        // à modifier pour aller vers la page admin
    }
 }
//