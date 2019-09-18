<?php
    require('model.php');

    function listPosts(){
        $posts = getPosts();

        require('view.php');
    }

    function post(){
        $post = getPost($_GET['id']);
        $comments = getComments($_GET['id']);
    }

    //
    /*
    if (isset($_GET['id']) && $_GET['id'] > 0){
        $post = getPost($_GET['id']);
        $comments = getComments($_GET['id']);
        require('postView.php');
    } else {
        echo 'Erreur : aucun identifiant de billet envoyé';
    }
   */