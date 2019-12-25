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
            loginPage();
            //require('view\frontend\login.php');
        }
        
        //checklogin

        /* bon code
       elseif ($_GET['action'] == 'checkLogin'){
            if(!empty($_POST['nickname']) && !empty($_POST['pass'])){
            checkLogin($_POST['nickname'], $_POST['pass']);
            require("view/backend/adminView.php");
            }
            else {
            throw new Exception("merci de renseigner tous les champs");
            }
        }
        */

        /* test code 
       
        elseif ($_GET['action'] == 'checkLogin'){
            if(!empty($_POST['nickname']) && !empty($_POST['pass'])){
            checkLogin($_POST['nickname'], $_POST['pass']);
            //require("view/backend/adminView.php");
            }
            else {
            throw new Exception("merci de renseigner tous les champs");
            }
        }
        */

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
        //editPostView
        elseif ($_GET['action'] == 'updatePostView'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                editPostView();
            }
        }
        // updatePost
        elseif ($_GET['action'] == 'updatePost'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                updatePost($_GET['id'], $_POST['title'], $_POST['content']);
            }
            else {
            throw new Exception("Erreur : pas de id !");
            }
        }
        //moderateCommentView
        elseif ($_GET['action'] == 'moderateCommentView'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                moderateCommentView();
            }
        }
        //moderateComment
        elseif ($_GET['action'] == 'moderateComment'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                moderateComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
            throw new Exception("Erreur : pas de id !");
            }
        }
        //warningComment
        elseif ($_GET['action'] == 'warningComment'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                warningComment($_GET['id']);
            }
            else {
            throw new Exception("Erreur : pas de id !");
            }
        }
        // deletePost
        elseif ($_GET['action'] == 'deleteComment'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                deleteComment($_GET['id']);
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

