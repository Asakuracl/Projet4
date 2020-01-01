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
        <p>Short Story</p>
        <div class="my-3">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-0 justify-content-end">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                    <ul class="navbar-nav mb-2 text-right">
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
                        <?php
                        if (isset($_SESSION['nickname'])) {
                    ?>
                        <li>
                            <a class="nav-link text-dark underline-effect" href="/projet4/index.php?action=adminPage">
                                Administration
                            </a>
                        </li>
                        <?php
                        }
                    ?>
                        <li>
                            <?php
                            if (isset($_SESSION['id']) and isset($_SESSION['nickname'])) {
                        ?>
                            <a class="nav-link text-dark underline-effect" href="/projet4/view/frontend/logout.php">
                                Se déconnecter
                            </a>
                            <?php
                            } else {
                        ?>
                            <a class="nav-link text-dark underline-effect" href="/projet4/index.php?action=loginPage">
                                Se connecter
                            </a>
                            <?php
                            }
                        ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <?=$content?>

        <footer class="border-top border-dark mt-5 text-right">
            <p>
                <img src="public\images\miniLivre2.jpg" class="rounded-top" />
                Jean Forteroche, prenez votre plume !
                <a href="https://twitter.com/neographe_org" target="_blank" class="text-dark text-decoration-none"
                    style="font-size: 25px;">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/asakura.cl/?hl=fr" target="_blank"
                    class="text-dark text-decoration-none" style="font-size: 25px;">
                    <i class="fab fa-instagram"></i>
                </a>
            </p>
            <p>
                <a href="http://neographe.org/" class="text-dark text-decoration-none mr-1">
                    <i class="fas fa-circle text-warning border rounded border-dark"></i>À propos
                </a>
                <a href="http://neographe.org/" class="text-dark text-decoration-none mr-1">
                    <i class="fas fa-circle text-warning border rounded border-dark"></i>Mentions légales
                </a>
                <a href="http://neographe.org/" class="text-dark text-decoration-none mr-1">
                    <i class="fas fa-circle text-warning border rounded border-dark"></i>Contact
                </a>
            </p>
            <p> Projet 4 formation OC </p>
        </footer>
        <!-- script -->
        <script src=" https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>