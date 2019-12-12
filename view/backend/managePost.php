<?php $title = "View administration"; ?>

<?php ob_start(); 

if (isset($_SESSION['nickname'])){

?>

    <div class="row bg-dark text-light rounded">
        <h1 class="mx-auto px-5 my-1">Administrer les chapitres</h1>
    </div>
</header>

<section class="row post mt-3">
    <?php
    while($dataPosts= $posts->fetch())
    {
    ?>
        <div class="col-lg-4 rounded border border-dark bg-white">
            <div>
                <h3 class="text-dark">
                    <?= htmlspecialchars($dataPosts['title']); ?>
                </h3>
                <p class="text-black-50">
                    <br>le <?= $dataPosts['creation_date_fr']; ?>
                </p>
            </div>
            <div>
                <a class="text-info text-dark" href="index.php?action=updatePostView&amp;id=<?php echo $dataPosts['id']; ?>">
                Modifier chapitre
                </a>
            </div>
            <div>
                <a class="text-info text-dark" href="index.php?action=moderateCommentView&amp;id=<?php echo $dataPosts['id']; ?>">
                Modérer commentaire
                </a>
            </div>
            <div>
                <a class="text-danger" href="index.php?action=deletePost&amp;id=<?php echo $dataPosts['id']; ?>"onclick="return confirm('attention suppression définitive !')">
                    Supprimer ?
                </a>
            </div>
        </div>
    <?php
    }
    $posts->closeCursor();
    ?>
</section>

<?php
}
?>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>