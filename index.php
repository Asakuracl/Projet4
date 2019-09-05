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
        <?php
        $db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'AsakuraCl+4', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
        
        while($dataPosts= $req->fetch())
        {
        ?>
        <div class="news">
        <a class="link-content" href=comment.php?post=<?php echo $dataPosts['id']
        ?></a>
            <h3>
                <?php echo htmlspecialchars($dataPosts['title']); ?>
                <br>le <?php echo $dataPosts['creation_date_fr']; ?>
            </h3>
            
            <p>
                <?php 
                echo nl2br(htmlspecialchars($dataPosts['content']));
                ?>
            </p>
        </div>
    </section>
        <?php
        }
        $req->closeCursor();
        ?>
</body>
</html>