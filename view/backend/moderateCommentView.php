<?php $title = "View administration"; ?>

<?php ob_start(); 

if (isset($_SESSION['nickname'])){

?>
    <div class="row">
        <h1 class="col-6 offset-4">Modérer commentaire</h1>
    </div>
</header>


 <h2>Commentaires : </h2>
 <section>
    <?php
    while($comment = $comments->fetch())
    {
    ?>
        <form action="index.php?action=moderateComment&amp;id=<?= $comment['id']; ?>" method="post">
            <div>
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
                <input type="text" id="author" name="author" value="<?= $comment['author']; ?>"/>
            </div>
            <div>
                <label for="comment">Commentaire</label><br>
                <textarea id="comment" name="comment"><?= $comment['comment']; ?></textarea>
            </div>
            <div>
                <input type="submit" />
            </div>
        </form>
    <?php
    }
    ?>
</section>
<?php
}
?>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>