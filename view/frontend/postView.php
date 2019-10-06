<?php $title = "storie chapter"; ?>

<?php ob_start() ?>
<body>
    <header class="row">
        <div class=col>
            <h1>Billet simple pour l'Alaska</h1>
        </div>
    </header>
    
    <section class="row post">
        <div class="col-6 offset-3">
            <h3>
                <?= htmlspecialchars($post['title']); ?>
            </h3>
            
            <p>
                <?= nl2br(htmlspecialchars($post['content'])); ?>
            </p>

            <h2>Commentaires</h2>

            <form action="index.php?action=addComment&id=<?php echo $post['id'] ?>" method="post">
                <div>
                    <label for="author">Auteur</label><br>
                    <input type="text" id="author" name="author" />
                </div>
                <div>
                    <label for="comment">Commentaire</label><br>
                    <textarea id="comment" name="comment"></textarea>
                </div>
                <div>
                    <input type="submit" />
                </div>
            </form>
        </div>

            <p class="col-6 offset-3"><a href="index.php">Retour à la liste des chapitres</a>
            </p>
    </section>
    <section class="row comment">
        <div class="col-6 offset-3">
            <?php
            while($comment = $comments->fetch())
            {
            ?>
                <!--<section class="row comment">
                    <div class="col-6 offset-3">-->
                <p>
                    <?= htmlspecialchars($comment['author'].':'); ?>
                    le <?= $comment['comment_date_fr']; ?>
                </p>
                <p>
                    <?= nl2br(htmlspecialchars($comment['comment'])); ?>
                </p>
            <?php
            }
            ?>
        </div>
    </section>
<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>