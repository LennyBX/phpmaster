<?php
require_once '../../config/appConfig.php';

/*if(!(isset($_SESSION['user']))) {
    header("location: ../controller/connexion_control.php");
}*/

?>
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/images/FSI_logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/connexion.css">
    <title>Connexion FSI</title>
    <link rel="icon" type="image/pngn" href="../../public/img/FSI_logo.png">
</head>
<body>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <img src="../../public/img/Login-amico__1_-removebg-preview%20(1).png" alt="Image" class="img-fluid">
            </div>

            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-4">
                            <h3>Connectez-Vous à <strong>  <img src="../../public/img/FSI_logo.png" style="width: 66px"></strong></h3>
                        </div>

                        <form action="../controller/connexion_trait_control.php" method="post">
                            <div class="form-group first">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Identifiant">
                            </div>

                            <div class="form-group last mb-4">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Mot de Passe">
                            </div>

                            <div class="form-group last mb-4">
                                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Comfirmer le Mot de Passe">
                            </div>
                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Se souvenir de moi</span>
                                    <input type="checkbox" checked="checked"/>
                                    <div class="control__indicator"></div>
                                </label>
                                <span class="ml-auto"><a href="#" class="forgot-pass">Mot de passe oublié ?</a></span>
                            </div>

                            <input type="submit" value="Connectez-Vous" class="btn text-black btn-block btn-success">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
