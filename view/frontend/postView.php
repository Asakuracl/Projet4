<?php $title = "storie chapter";?>

<?php ob_start()?>

        <div class=row>
            <h1 class="col bg-dark text-light rounded">Billet simple pour l'Alaska</h1>
        </div>
    </header>

<section class="row post">
    <div class="col-6 offset-3">
        <h3>
            <u>
                <?=htmlspecialchars($post['title']);?>
            </u>
        </h3>

        <p>
            <?=nl2br(htmlspecialchars($post['content']));?>
        </p>

        <h2 class="my-3">Commentaires</h2>

        <form action="index.php?action=addComment&amp;id=<?=$post['id']?>" method="post">
            <div class="form-group">
                <label for="author">Auteur</label>
                <input type="text" id="author" class="bg-light form-control" name="author" placeholder="Auteur"/>
            </div>
            <div class="form-group">
                <label for="comment">Commentaire</label>
                <textarea id="comment" class="bg-light form-control" name="comment"></textarea>
            </div>
            <div>
                <input type="submit" class="btn btn-dark mb-3"/>
            </div>
        </form>
    </div>

        <p class="col-6 offset-3"><a href="index.php" class="text-dark">Retour à la liste des chapitres</a>
        </p>
</section>
<section class="row">
    <div class="col-6 offset-3">
<?php
while ($comment = $comments->fetch()) {
    ?>
        <p class="header-comment">
            <span class="text-secondary">
                <i class="fas fa-circle text-warning border rounded border-dark"></i> le <?=$comment['comment_date_fr'] . ' par ';?>
            </span>
            <span class="text-white bg-dark px-1 rounded">
                <?=htmlspecialchars($comment['author']);?>
            </span>
            <a href="index.php?action=warningComment&amp;id=<?=$comment['id'];?>">
                <button type="submit" id="alarm" class="btn btn-outline-warning">
                    <i class="fas fa-bullhorn"></i>
                </button>
            </a>
        </p>
        <p class="content-comment text-dark bg-light border-bottom border-secondary ml-4 px-2 pb-4">
            <?=nl2br(htmlspecialchars($comment['comment']));?>
        </p>
<?php
}
?>
    </div>
</section>
<?php $content = ob_get_clean()?>

<?php require "template.php";?>