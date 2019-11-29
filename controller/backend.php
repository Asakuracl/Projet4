<?php

require_once('model\PostManager.php');
require_once('model\CommentManager.php');

//addmenber
function addMember($nickname, $pass){
    $memberManager = new LogManager();
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $addMember = $memberManager->createMember($nickname, $pass_hash);

    //trying have a succes message, if add ok
    $success = null;

    if ($addMember === true){
        header("Location: view/frontend/login.php");
        $success = "Membre ajouté !";     
    } else{
        die("Erreur ajout du membre"); 
    }
}

// addpost
function addPost($title, $content){
    $postManager = new PostManager();
    $addPost = $postManager->newPost($title, $content);

    if ($addPost === false){
        die("Erreur d'ajout du billet");
    } else{
        header("Location: index.php");
    }
}