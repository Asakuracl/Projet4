<?php $title = "Short storie"; ?>

<?php ob_start() ?>

    <div class="row">
        <h1 class="col-6 offset-3">Billet simple pour l'Alaska</h1>
    </div>
</header>

<section class="first-section row">
    <?php
    while($dataPosts= $posts->fetch())
    {
    ?>
    <div class="news col-lg-4 rounded  border">
        <a class="link-comment" href="index.php?action=post&amp;id=<?= $dataPosts['id']; ?>">
            <h3>
                <?= htmlspecialchars($dataPosts['title']); ?>
            </h3>
        </a>
        <p>
            <br>le <?= $dataPosts['creation_date_fr']; ?>
        </p>
    </div>
    <?php
    }
    $posts->closeCursor();
    ?>
</section>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>