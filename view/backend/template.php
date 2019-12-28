<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <title><?=$title?></title>
</head>

<body class="main-body container">
    <header>
        <div class="row">
            <p class="col">Admin</p>
            <ul class="nav">
                <li>
                    <a class="nav-link text-dark">
                        <?php
                            if (isset($_SESSION['nickname'])) {
                                echo "Bonjour " . $_SESSION['nickname'];
                            }
                        ?>
                    </a>
                </li>
                <li>
                    <a class="nav-link text-dark underline-effect" href="/projet4/index.php">Accueil</a>
                </li>
                <li>
                    <a class="nav-link text-dark underline-effect" href="/projet4/index.php?action=adminPage">Accueil
                        Administration</a>
                </li>
                <li>
                    <a class="nav-link text-dark underline-effect" href="/projet4/view/frontend/logout.php">Se
                        déconnecter</a>
                </li>
            </ul>
        </div>

        <?=$content?>

        <!-- script -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>