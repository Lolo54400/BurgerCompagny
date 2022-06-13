<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/274ac46116.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/style.css">
    <script src="https://kit.fontawesome.com/742768abf7.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://firebasestorage.googleapis.com/v0/b/lys1-e9cd8.appspot.com/o/logos%2Ffoodexpress.png?alt=media&token=f193dfc3-cc60-4f9f-b180-eb623850e74f" type="image/x-icon">
    <title>Burger Compagny</title>
</head>

<body>
    <header>
        <!-- NAVBAR-->
        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <!-- Logo Image -->
                    <img src="https://firebasestorage.googleapis.com/v0/b/lys1-e9cd8.appspot.com/o/logos%2Ffoodexpress.png?alt=media&token=f193dfc3-cc60-4f9f-b180-eb623850e74f" width="40" alt="" class="d-inline-block align-middle mr-2">
                    <!-- Logo Text -->
                    <span class="text-uppercase font-weight-bold">Burger Company</span>
                </a>
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarToggleExternalContent5" aria-controls="navbarToggleExternalContent5" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                </div>

                <!-- <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button> -->

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#" class="nav-link">Panier</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Commande</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Connexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
    if (isset($_GET['page'])) {
        switch ($_GET['page']) {

            case 'page2':
                include('index.php');
                break;
        }
    }
    ?>

    <section class="cover">
        <h1 class="cover-title">Burger Company</h1>
        <button type="button" class="btn btn-danger"><a href="index.php?" class="Button1">Accueil</a></button>
        <p class="cover-description"> Commandez vos plats préférés en quelques clics !</p>
    </section>
    <div class="menupage2">
        <h3 class="menupage2"></h3>Nos burgers</h3>
        <h3>Nos Salades</h3>
        <h3>Nos Desserts</h3>
        <h3>Nos Boissons</h3>
        <hr>
    </div>

    <div>
        Nos burger div
    </div>