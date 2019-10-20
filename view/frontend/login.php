<?php $title = "Administration"; ?>

<?php ob_start(); ?>

</header>
<section class="row">
<!-- creer le lien menant au controler dans action--> 
    <form class="col-6 offset-3" action="" method="post">
        <p>Entrez vos identifiants :</p>
            <div class="form-group">
                <input class="form-control" type="text" name="name" placehoclass="form-control lder="nom d'utilisateur">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="mot de passe">
            </div>
            <button type="submit" class="button-login"> Se connecter</button>
    </form>
</section>
<?php $content = ob_get_clean(); ?>

<?php require("template.php"); ?>