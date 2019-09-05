<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Billet simple pour l'Alaska</h1>
    </header>
    
    <section>
        <p><a href="index.php">Retour à la liste des chapitres</a></p>

            <?php
            $db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'AsakuraCl+4', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts WHERE id = ?');
            $req->execute(array($_GET['post']));
            $dataPosts = $req->fetch();
            ?>
            
            <div class="news">
                <h3>
                    <?php echo htmlspecialchars($dataPosts['title']); ?>
                    <br>le <?php echo $dataPosts['creation_date_fr']; ?>
                </h3>
            </div>
    </section>
        <?php
        }
        $req->closeCursor();
        ?>
</body>
</html>