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
    
    <section class="row">
        <p><a href="index.php">Retour à la liste des chapitres</a></p>

            <?php
            $db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'AsakuraCl+4', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts WHERE id = ?');
            $req->execute(array($_GET['post']));
            $dataPosts = $req->fetch();
            ?>
            
            <div class="col-6 offset-3">
                <h3>
                    <?php echo htmlspecialchars($dataPosts['title']); ?>
                </h3>
                
                <p>
                <?php 
                echo nl2br(htmlspecialchars($dataPosts['content']));
                ?>
                </p>
            </div>
    </section>
        <?php
        $req->closeCursor();

        $req = $db ->prepare('SELECT author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date');
        $req->execute(array($_GET['post']));

        while($dataComments = $req->fetch())
        {
        ?>
            <p><?php echo htmlspecialchars($dataComments['author'].':'); ?>
            le <?php echo $dataComments['comment_date_fr']; ?></p>
            <p><?php echo nl2br(htmlspecialchars($dataComments['comment'])); ?></p>
        <?php
        }
        $req->closeCursor();
        ?>

<!-- script -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>