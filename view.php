
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
<body class="main-body">
    <div class="container">
        <header class="row">
            <div class=col>
                <h1>Billet simple pour l'Alaska</h1>
            </div>
        </header>
        
        <section class="first-section row">
            <?php
            while($dataPosts= $req->fetch())
            {
            ?>
            <div class="news col-lg-4 rounded  border">
                <a class="link-comment" href="comment.php?post=<?php echo $dataPosts['id']; ?>">
                    <h3>
                        <?php echo htmlspecialchars($dataPosts['title']); ?>
                    </h3>
                </a>
                <p>
                    <br>le <?php echo $dataPosts['creation_date_fr']; ?>
                </p>
            </div>
            
            <?php
            }
            $req->closeCursor();
            ?>
        </section>
    </div>
<!-- script -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>