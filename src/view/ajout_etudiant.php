<?php
require_once '../../config/appConfig.php';
if(!(isset($_SESSION['user']))) {
    header("location: ../controller/connexion_control.php");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSI - Ajout étudiant</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/x-icon" href="../../public/img/FSI_logo.png">

</head>
<body>

<!-- header section starts  -->

<?php require_once 'navbar.php'; ?>

<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Ajout étudiant <span>FSI</span></h3>
        </div>

        <div class="image">
            <img src="../../public/img/homg-img.svg" alt="">
        </div>

    </div>

</section>

<!-- home section ends -->

<!-- couter section stars  -->


<!-- couter section ends -->

<!-- about section starts  -->
<section class="about" id="about">

    <div class="row">
        <div class="content">

        <form class="container" method="post" action="../controller/ajout_etudiant_trait_control.php">
            <div class="title">
                <h1>Ajouter étudiant</h1>
            </div>


            <div class="input_field">
                <input type="text" name="nom" id="nom" placeholder="Nom de l'étudiant"/>
            </div>

            <div class="input_field">
                <input type="text" name="prenom" id="prenom" placeholder="Prénom de l'étudiant"/>
            </div>

            <div class="input_field">
                <input type="text" name="mail" id="mail" placeholder="Mail de l'étudiant"/>
            </div>

            <div class="input_field">

                <input type="text" name="specialite" id="specialite" placeholder="Spécialité de l'étudiant"/>
            </div>

            <div class="input_field">
                <input type="text" name="telephone" id="telephone" placeholder="Téléphone de l'étudiant"/>
            </div>

            <div class="input_field">
                <input type="text" name="classe" id="classe" placeholder="Classe de l'étudiant"/>
            </div>

            <div class="input_field">
                <input type="text" name="login" id="login" placeholder="Login de l'étudiant"/>
            </div>

            <div class="input_field">
                <input type="text" name="mdp" id="mdp" placeholder="Mot de passe de l'étudiant"/>
            </div>

            <div class="input_field">
                <input type="text" name="cp" id="cp" placeholder="Code postal de l'étudiant"/>
            </div>

            <div class="input_field">
                <input type="text" name="rue" id="rue" placeholder="Rue de l'étudiant"/>
            </div>

            <div class="input_field">
                <input type="text" name="ville" id="ville" placeholder="Ville de l'étudiant"/>
            </div>

            <div class="input_field">
                <input type="text" name="numrue" id="numrue" placeholder="Numéro de rue de l'étudiant"/>
            </div>

            <div class="input_field">
                <input type="text" name="entreprise" id="entreprise" placeholder="ID d'entreprise de l'étudiant"/>
            </div>

            <div class="input_button">
                <input type="submit" class="btn" value="Ajouter l'étudiant">
            </div>

        </form>

        </div>

    </div>

</section>



<?php require_once 'footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>

</body>
</html>
