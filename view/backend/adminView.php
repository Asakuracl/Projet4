<?php $title = "View administration"; ?>

<?php ob_start(); 

if (isset($_SESSION['nickname'])){

?>

    <div class="row">
        <h1 class="offset-3 col-6">Selectionner votre action</h1>
    </div>
</header>


<ul class="nav">
    <li class="nav-item">
        <h3>
            <a class="nav-link" href="index.php?action=createPost">
                Creer un chapitre
            </a>
        </h3>
    </li>
    <li class="nav-item">
        <h3>
            <a class="nav-link" href="index.php?action=erasePost">
                administrer les billets
            </a>
        </h3>
    </li>
</ul>


<?php
}
?>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>