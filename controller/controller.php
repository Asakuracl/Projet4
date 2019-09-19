<?php
    require('model.php');

    function listPosts(){
        $posts = getPosts();

        require('view.php');
    }

    function post(){
        $post = getPost($_GET['id']);
        $comments = getComments($_GET['id']);

        require('postView.php');
    }