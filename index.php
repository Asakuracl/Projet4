<?php
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
        // addPost
        elseif ($_GET['action'] == 'addPost'){
            if(!empty($_POST['title']) && !empty($_POST['content'])){
                addPost($_POST['title'], $_POST['content']);
            }
            else {
            throw new Exception("Erreur : merci de renseigner tous les champs");
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
        //login
       elseif ($_GET['action'] == 'checkLogin'){
            if(!isset($_SESSION)){
                if(!empty($_POST['nickname']) && !empty($_POST['pass'])){
                checkLogin($_POST['nickname'], $_POST['pass']);
                require("view/backend/adminView.php");
                }
                else {
                throw new Exception("Erreur : merci de renseigner tous les champs");
                }
            } 
        }

    } else { 
        listPosts(); 
    }

    // test zone
    /*
    session_start();
    if(!empty($_SESSION)){
        var_dump('lol');
        //header("Location: index.php");
    }
    */
}
catch(Exception $e){
    echo 'Erreur : ' .$e ->getMessage();
}

