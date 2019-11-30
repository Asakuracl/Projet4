<?php $title = "View administration"; ?>

<?php ob_start(); ?>

    <div class="row">
        <h1 class="col-6 offset-4">Supprimer un chapitre</h1>
    </div>
</header>

<section class="row post">
    <?php
    while($dataPosts= $posts->fetch())
    {
    ?>
    <h3>
        <?= htmlspecialchars($dataPosts['title']); ?>
    </h3>
    <p>
        <br>le <?= $dataPosts['creation_date_fr']; ?>
    </p>
    <?php
    }
    $posts->closeCursor();
    ?>
</section>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>