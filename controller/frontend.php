<?php
//session_start();

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

//get listMember


//addmenber
function addMember($nickname, $pass){
    $memberManager = new LogManager();
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $addMember = $memberManager->createMember($nickname, $pass_hash);

    //ajouter un message de confirmation d'ajout
    $success = null;

    if ($addMember === true){
        header("Location: view/frontend/login.php");
        $success = "Membre ajouté !";     
    } else{
        die("Erreur ajout du membre"); 
    }
}

