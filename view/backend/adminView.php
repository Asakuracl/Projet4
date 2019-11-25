<?php $title = "View administration"; ?>

<?php ob_start(); 

if (isset($_SESSION)){

?>

    <div class="row">
        <h1 class="col-6 offset-4">Selectionner votre action</h1>
    </div>
</header>


<ul class="nav justify-content-center">
    <li class="nav-item">
        <h3>
            <a class="nav-link" href="#">
                Creer un chapitre
            </a>
        </h3>
    </li>
    <li class="nav-item">
        <h3>
            <a class="nav-link" href="#">
                mise à jour de billets
            </a>
        </h3>
    </li>
    <li class="nav-item">
        <h3>
            <a class="nav-link" href="#">
                suppression de billets
            </a>
        </h3>
    </li>
</ul>


<?php
}
?>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>