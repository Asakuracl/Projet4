<?php $title = "Administration"; ?>

<?php ob_start() ?>
</header>
<section>
    <form action="" method="post">
        <div class="form-nom">
            <input type="text" name="name" placeholder="nom d'utilisateur">
        </div>
        <div class="form-groupe">
            <input type="password" name="password" placeholder="mot de passe">
        </div>
        <button type="submit" class="button-login"> Se connecter</button>
    </form>
</section>

</div>
<?php $content = ob_get_clean() ?>

<?php require("template.php"); ?>