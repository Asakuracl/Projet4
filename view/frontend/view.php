<?php $title = "Short storie";?>

<?php ob_start()?>

<div class="row bg-dark text-light rounded">
    <h1 class="mx-auto">Billet simple pour l'Alaska</h1>
</div>
</header>

<section class="first-section backgroundImage row">
    <?php
        while ($dataPosts = $posts->fetch()) {
    ?>
    <div class="news col-lg-3 rounded bg-white">
        <a class="text-dark text-decoration-none" href="index.php?action=post&amp;id=<?=$dataPosts['id'];?>">
            <h2>
                <?=htmlspecialchars($dataPosts['title']);?>
            </h2>
        </a>
        <p class="text-black-50">
            <br>le <?=$dataPosts['creation_date_fr'];?>
        </p>
    </div>
    <?php
        }
        $posts->closeCursor();
    ?>
</section>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>