<?php $title = "View administration"; ?>

<?php ob_start(); 

if (isset($_SESSION)){

?>

    <div class="row">
        <h1 class="col-6 offset-3">Selectionner</h1>
    </div>
</header>

<section class="first-section row">
    <div class="news col-md-4 rounded  border">
        <a class="link-comment" href="#">
            <h3 class="offset-3">
                Creer un chapitre
            </h3>
        </a>   
    </div>

    <div class="news col-lg-4 rounded  border">
        <a class="link-comment" href="#">
            <h3 class="offset-1">
                mise à jour de billets
            </h3>
        </a>
    </div>

    <div class="news col-lg-4 rounded  border">
        <a class="link-comment" href="#">
            <h3 class="offset-3">
                suppression de billets
            </h3>
        </a>
    </div>
</section>

<?php
}
?>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>