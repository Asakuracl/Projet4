<?php $title = "View administration"; ?>

<?php ob_start(); ?>

    <div class="row">
        <h1 class="col-6 offset-4">Creer un chapitre</h1>
    </div>
</header>

<section>
    <form action="index.php?action=addPost" method="post">
        <div>
            <label for="title">Titre</label><br>
            <input type="text" id="title" name="title" />
        </div>
        <div>
            <label for="content">Contenu</label><br>
            <textarea id="content" name="content"></textarea>
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>
</section>

<?php
//}
?>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>