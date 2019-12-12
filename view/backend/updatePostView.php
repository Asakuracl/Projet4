<?php $title = "View administration"; ?>

<?php ob_start(); 

if (isset($_SESSION['nickname'])){

?>


    <div class="row bg-dark text-light rounded">
        <h1 class="mx-auto px-5 my-1">Modifier les chapitres</h1>
    </div>
</header>

<section class="row mx-auto">
    <form action="index.php?action=updatePost&amp;id=<?php echo $post['id']; ?>" class="col-sm-6 mx-auto" method="post">
        <div class="form-group mt-3">
            <label for="title">Titre</label><br>
            <input type="text" id="title" name="title" class="bg-light form-control" value="<?php echo $post['title']; ?>"/>
        </div>
        <div class="form-group mx-auto">
            <label for="content">Contenu</label><br>
            <textarea id="content" class="bg-light form-control" name="content"><?php echo $post['content']; ?></textarea>
        </div>
        <div>
            <input type="submit" class="btn btn-dark mt-1" value="Modifier"/>
        </div>
    </form>
    <p class="col-6 offset-3 mt-1">
        <a href="index.php?action=erasePost" class="text-dark">Retour</a>
    </p>
</section>

<?php
}
?>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>