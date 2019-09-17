<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <header class="row">
        <div class=col>
            <h1>Billet simple pour l'Alaska</h1>
        </div>
    </header>
    
    <section class="row post">
   
            
            <div class="col-6 offset-3">
                <h3>
                    <?php echo htmlspecialchars($post['title']); ?>
                </h3>
                
                <p>
                    <?php 
                    echo nl2br(htmlspecialchars($post['content']));
                    ?>
                </p>
            </div>
                <p class="col-6 offset-3"><a href="index.php">Retour à la liste des chapitres</a>
                </p>
    </section>
        <?php
    
        while($dataComments = $req->fetch())
        {
        ?>
            <section class="row comment">
                <div class="col-6 offset-3">
                    <p>
                        <?php echo htmlspecialchars($dataComments['author'].':'); ?>
                        le <?php echo $dataComments['comment_date_fr']; ?>
                    </p>
                    <p>
                        <?php echo nl2br(htmlspecialchars($dataComments['comment'])); ?>
                    </p>
                        <?php
                        }
                        $req->closeCursor();
                        ?>
                </div>
            </section>
<!-- script -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>