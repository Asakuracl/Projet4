<?php $title = "View administration"; ?>

<?php ob_start(); 

if (isset($_SESSION['nickname'])){

?>


    <div class="row">
        <h1 class="col-6 offset-4">Modifier les chapitres</h1>
    </div>
</header>

<section>
    <form action="index.php?action=updatePost&amp;id=<?php echo $post['id']; ?>" method="post">
        <div>
            <label for="title">Titre</label><br>
            <input type="text" id="title" name="title" value="<?php echo $post['title']; ?>"/>
        </div>
        <div>
            <label for="content">Contenu</label><br>
            <textarea id="content" name="content"><?php echo $post['content']; ?></textarea>
        </div>
        <div>
            <input type="submit" />
        </div>
    </form>
</section>

<?php
}
?>

<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>