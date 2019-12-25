<?php $title = "Short storie";?>

<?php ob_start()?>

    <div class="row bg-dark text-light rounded">
        <h1 class="mx-auto px-5 my-2 ">Billet simple pour l'Alaska</h1>
    </div>
</header>

<section class="first-section row">
<?php
while ($dataPosts = $posts->fetch()) {
    ?>
    <div class="news col-lg-3 rounded bg-white">
        <a class="text-dark text-decoration-none" href="index.php?action=post&amp;id=<?=$dataPosts['id'];?>">
            <h3>
                <?=htmlspecialchars($dataPosts['title']);?>
            </h3>
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