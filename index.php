<?php
session_start();
require('controller\frontend.php');
require('controller\backend.php');

try{
 if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts'){
            listPosts();
        } 
        elseif ($_GET['action'] == 'post'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                post();
            }
            else {
            throw new Exception("Erreur : aucun identifiant de billet envoyé");
            }
        }
        elseif ($_GET['action'] == 'addComment'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                if(!empty($_POST['author']) && !empty($_POST['comment'])){
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                throw new Exception("Erreur : merci de renseigner tous les champs");
                }
            }
            else {
            throw new Exception("Erreur : aucun identifiant de billet envoyé");
            }
        }
        // addMember
        elseif ($_GET['action'] == 'addMember'){
            if(!empty($_POST['nickname']) && !empty($_POST['pass'])){
                addMember($_POST['nickname'], $_POST['pass']);
            }
            else {
            throw new Exception("Erreur : merci de renseigner tous les champs");
            }
        }
        //loginPage
        elseif ($_GET['action'] == 'loginPage'){
             require('view\frontend\login.php');
        }
        //checklogin
       elseif ($_GET['action'] == 'checkLogin'){
            if(!empty($_POST['nickname']) && !empty($_POST['pass'])){
            checkLogin($_POST['nickname'], $_POST['pass']);
            require("view/backend/adminView.php");
            }
            else {
            throw new Exception("merci de renseigner tous les champs");
            }
        }

        //ADMIN//

        //adminPage
        elseif ($_GET['action'] == 'adminPage'){
            require("view/backend/adminView.php");
        }

        // addPost
        elseif ($_GET['action'] == 'createPost'){
            require("view/backend/CreatePost.php");
        }

        elseif ($_GET['action'] == 'addPost'){
            if(!empty($_POST['title']) && !empty($_POST['content'])){
                addPost($_POST['title'], $_POST['content']);
            }
            else {
            throw new Exception("Erreur : merci de renseigner tous les champs");
            }
        }
        // postInBackend
        elseif ($_GET['action'] == 'erasePost'){
            postInBackend();
        }
        // deletePost
        elseif ($_GET['action'] == 'deletePost'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                deletePost($_GET['id']);
            }
            else {
            throw new Exception("Erreur : merci de renseigner tous les champs");
            }
        }
        // updatePost
        elseif ($_GET['action'] == 'updatePost'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                updatePost($_GET['id'], $_POST['title'], $_POST['content']);
            }
            else {
            throw new Exception("Erreur : merci de renseigner tous les champs");
            }
        }

        
    } else { 
        listPosts();
    }

}
catch(Exception $e){
    echo 'Erreur : ' .$e ->getMessage();
}

