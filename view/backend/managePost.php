<?php $title = "View administration"; ?>

<?php ob_start(); 

if (isset($_SESSION['nickname'])){

?>

    <div class="row">
        <h1 class="col-6 offset-4">Administrer les chapitres</h1>
    </div>
</header>

<section class="row post">
    <?php
    while($dataPosts= $posts->fetch())
    {
    ?>
        <div class="col-lg-4 rounded border">
            <div>
                <h3>
                    <?= htmlspecialchars($dataPosts['title']); ?>
                </h3>
                <p>
                    <br>le <?= $dataPosts['creation_date_fr']; ?>
                </p>
            </div>
            <div>
                <a class="text-info" href="index.php?action=updatePostView&amp;id=<?php echo $dataPosts['id']; ?>">
                Modifier chapitre
                </a>
            </div>
            <div>
                <a class="text-info" href="index.php?action=moderateComment&amp;id=<?php echo $dataPosts['id']; ?>">
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