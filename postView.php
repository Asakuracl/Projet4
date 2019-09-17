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
            </div>
                <p class="col-6 offset-3"><a href="index.php">Retour à la liste des chapitres</a>
                </p>
    </section>
        <?php
        while($comment = $comments->fetch())
        {
        ?>
            <section class="row comment">
                <div class="col-6 offset-3">
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