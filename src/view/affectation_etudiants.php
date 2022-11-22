<?php
require_once '../../config/appConfig.php';
$mesEtudiants = $repositoryEtudiant->getAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affectation Etudiant</title>
    <link rel="icon" type="image/pngn" href="../../public/img/FSI_logo.png">

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

</head>
<body>


<header class="header">

    <section class="flex">

        <img src="../../public/img/FSI_logo.png" style="width: 60px">
        <nav class="navbar">
            <a href="../controller/accueil_control.php">Accueil</a>
            <a href="../controller/liste_etudiants_control.php">Liste étudiants</a>
            <a href="../controller/administration_control.php">Paramètres</a>
            <a href="../controller/deconnexion_control.php">Déconnexion</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

</header>

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Affectation Etudiant <span>FSI</span></h3>
        </div>

        <div class="image">
            <img src="../../public/img/homg-img.svg" alt="">
        </div>

    </div>

</section>





<section class="about" id="about">

    <div class="row">
        <div class="content">

            <form class="container">
                <div class="title">
                    <h1 class="affec">Affectation Etudiant </h1>
                </div>

                <SELECT name="liste_etudiant" size="1" class="select1">
                    <OPTION selected disabled>Choisir un Etudiant en 3OLEN</OPTION>
                    <?php foreach ($mesEtudiants as $etudiant) { ?>
                    <OPTION><?php echo $etudiant->getPREETU() . ' ' . $etudiant->getNOMETU() ?>
                        <?php } ?>
                </SELECT>

                <SELECT name="liste_etudiant" size="1" class="select2">
                    <OPTION selected disabled>Choisir un Etudiant en 4OLEN</OPTION>
                    <?php foreach ($mesEtudiants as $etudiant) { ?>
                    <OPTION><?php echo $etudiant->getPREETU() . ' ' . $etudiant->getNOMETU() ?>
                        <?php } ?>
                </SELECT>

                <SELECT name="liste_etudiant" size="1" class="select3">
                    <OPTION selected disabled>Choisir un Etudiant en 5OLEN</OPTION>
                    <?php foreach ($mesEtudiants as $etudiant) { ?>
                    <OPTION><?php echo $etudiant->getPREETU() . ' ' . $etudiant->getNOMETU() ?>
                        <?php } ?>
                </SELECT>



                <div class="input_button2">
                    <a href="#contact" class="btn">Affectez cette Etudiant</a>
                </div>

            </form>

        </div>

    </div>

</section>


<footer class="footer">

    <section>


        <div class="credit">&copy; copyright @ 2022 by <span>PHPMASTER Group</span> | all rights reserved!</div>

    </section>

</footer>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>
