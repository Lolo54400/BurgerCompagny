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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../public/assets/style.css">
    <script src="https://kit.fontawesome.com/742768abf7.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../public/img/BURGER_COMPANY_Logo-Favicon.png" type="image/x-icon">

    <title>Burger Compagny</title>
</head>

<body>
    <header>
        <!-- NAVBAR-->
        <nav class="navbar navbar-expand-lg py-3 mb-3 navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="../public/index.php" class="navbar-brand">
                    <!-- Logo Image -->
                    <img src="../public/img/BURGER_COMPANY_Logoriginal.svg" width="150" alt="" class="d-inline-block align-middle mr-2">
                    <!-- Logo Text -->
                    <!-- <span class="text-uppercase font-weight-bold">Burger Company</span> -->
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
                        <li class="nav-item"><a href="../traitement/login.php" class="nav-link">Connexion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="d-flex justify-content-center">
        <div class="card " style="width: 20rem;">
            <!-- Logo Image -->
            <img src="../public/img/BURGER_COMPANY_Logoriginal.svg" width="200" alt="" class="d-inline-block align-middle mr-2">
            <!-- Logo Text -->
            <h2 class="text-uppercase py-4">Inscription</h2>
            <form class="px-2 py-2">
                <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Nom </label>
                    <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="Nom" required>
                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Prénom </label>
                    <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="prénom" required>
                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Date de naissance </label>
                    <input type="date" class="form-control" id="exampleDropdownFormEmail1" placeholder="date naissance" required>
                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Adresse </label>
                    <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="adresse" required>
                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Ville </label>
                    <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="ville" required>
                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormEmail1" class="form-label">Code postal </label>
                    <input type="text" class="form-control" id="exampleDropdownFormEmail1" placeholder="code postal" required>
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="exampleDropdownFormEmail1" class="form-label">Téléphone </label>
                        <input type="tel" class="form-control" id="exampleDropdownFormEmail1" placeholder="télephone" required>
                    </div>
                    <label for="exampleDropdownFormEmail1" class="form-label">Adresse Email </label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormPassword1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <label for="exampleDropdownFormPassword1" class="form-label">Confirmer mot de passe</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Confirmer Password" required>
                </div>
                <div class="mb-3">

                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                    <div class="form-check">
                    </div>
                </div>

            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../traitement/login.php">Déjà client? Connectez-vous ici</a>
        </div>
    </section>



    <footer>
        <nav class="navbar navbar-expand-lg py-3 mt-3 navbar-dark bg-dark shadow-sm">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>