<?php $title = "View administration"; ?>

<?php ob_start(); 

if (isset($_SESSION['nickname'])){

?>
    <div class="row bg-dark text-light rounded">
        <h1 class="mx-auto px-5 my-1">Modérer commentaire</h1>
    </div>
</header>


 <h2>Commentaires : </h2>
 <section class="row mx-auto">
    <?php
    while($comment = $comments->fetch())
    {
    ?>
        <form action="index.php?action=moderateComment&amp;id=<?= $comment['id']; ?>" class="col-sm-6 mx-auto" method="post">
            <div class="form-group mt-3">
                <label for="author">Auteur</label>
                <?php
                    if (($comment['warning'])>0){
                ?>
                    <p>
                        Cet auteur a été signalé : <?= $comment['warning'] .' fois'; ?>
                    </p>
                <?php
                    } else {
                ?>
                    <br>
                <?php
                    }
                ?>
                <input type="text" id="author" class="bg-light form-control" name="author" value="<?= $comment['author']; ?>"/>
            </div>
            <div class="form-group mx-auto">
                <label for="comment">Commentaire</label><br>
                <textarea id="comment" class="bg-light form-control" name="comment"><?= $comment['comment']; ?></textarea>
            </div>
            <div>
                <input type="submit" class="btn btn-dark mt-1"/>
            </div>
        </form>
        <p class="col-6 offset-3 mt-1">
            <a href="index.php?action=erasePost" class="text-dark">Retour</a>
        </p>
    <?php
    }
    ?>
</section>
<?php
}
?>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>