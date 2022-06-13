<!-- <?php

        include('../models/function.php');
        ?> -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/274ac46116.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
    <section class="cover">
        <h1 class="cover-title">Burger Company</h1>
        <button type="button" class="btn btn-danger"><a href="#" class="Button1">Voir tout nos produits</a></button>
        <p class="cover-description"> Commandez vos plats préférés en quelques clics !</p>
    </section>

    <section class="section2">
        <div class="troiscube">
            <div class="cube">
                <ul class="icon">
                    <i class="fa-regular fa-clock"></i>
                </ul>
                <h2>RAPIDITÉ</h2>
                <p class="textcube">Nous préparons votre commande le plus rapidement possible</p>
            </div>
            <div class="cube">
                <ul class="icon">
                    <i class="fa-regular fa-clock"></i>
                </ul>
                <h2>CLICK & COLLECT</h2>
                <p class="textcube">Commandez et emporter, on s'occupe de tout pour vous.</p>
            </div>
            <div class="cube">
                <ul class="icon">
                    <i class="fa-regular fa-clock"></i>
                </ul>
                <h2>PAIEMENT SÉCURISÉ</h2>
                <p class="textcube">N'ayez aucune crainte pour votre argent. Payement sécuriser via notre site </p>
            </div>
        </div>
    </section>

    <section class="section3">
        <div class="categorie">
            <h2>Categories</h2>
            <p>A ne surtout pas rater</p>
        </div>

        <div class="rectangles">

            <div class="rectangle">
                <div class="choix">
                    <img class="img_cat" src="img\burger\triple cheese.png" alt="" name="burger">
                    <h5>Nos Burgers</h5>
                    <p class="prix">A partir de 4,50 €</p>
                    <button button type="button" class="btn btn-danger"><a href="#" class="btn_burger">Choisissez</a></button>
                </div>
            </div>
            <div class="rectangle">
                <div class="choix">
                    <h5>Nos Salades</h5>
                    <p class="prix">A partir de 8,00 €</p>
                    <button button type="button" class="btn btn-danger"><a href="#" class="btn_burger">Choisissez</a></button>
                </div>
            </div>
            <div class="rectangle">
                <div class="choix">
                    <h5>Nos Boissons</h5>
                    <p class="prix">A partir de 2,50 €</p>
                    <button button type="button" class="btn btn-danger"><a href="#" class="btn_burger">Choisissez</a></button>
                </div>
            </div>
            <div class="rectangle">
                <div class="choix">
                    <h5>Nos Desserts</h5>
                    <p class="prix">A partir de 3,90 €</p>
                    <button button type="button" class="btn btn-danger"><a href="#" class="btn_burger">Choisissez</a></button>
                </div>
            </div>
        </div>
        </div>
        </div>

    </section>

    <section class="section4">
        <div class="container">
            <div class="droite">
                <h2>Notre Restaurant</h2>
                <p>Retrouvez-nous proche de chez vous</p>
                <h4>Burger Company</h4>
                <hr class="hrcontact">
                <p>25 Av. de Saintignon, 54400 Longwy</p>
            </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5856.693460030353!2d5.769374379029065!3d49.52055102686542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47eac83037aa5dc9%3A0x61180d9167b45ca5!2sCCI%20FORMATION%20EESC%20-%20LONGWY!5e0!3m2!1sfr!2sfr!4v1654073624529!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


    <footer>

        <nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
            <div class="container">

                <a href="#" class="navbar-brand">

                    &copy; Loic & Mustapha
                    </i>
                </a>
                <a href="#" class="navbar-brand">

                    <i class='fab fa-facebook fa-2x'></i><br />

                </a>

                <a href="#" class="navbar-brand">

                    <i class='fab fa-instagram fa-2x'></i>
                    </i>
                </a>
            </div>
        </nav>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>