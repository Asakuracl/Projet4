<?php $title = "View administration"; ?>

<?php ob_start(); 

if (isset($_SESSION['id']) AND isset($_SESSION['nickname'])){

?>

    <div class="row">
        <h1 class="col-6 offset-3">Selectionner</h1>
    </div>
</header>

<section class="first-section row">
  
</section>

<?php
}
?>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>