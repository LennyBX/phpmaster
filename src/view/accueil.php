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
    <title>FSI - Accueil</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>

    <link href="../../public/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e3c4ffb28a.js" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="icon" type="image/x-icon" href="../../public/img/FSI_logo.png">

</head>
<body>

<!-- header section starts  -->

<?php require_once 'navbar.php'; ?>

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>FSI <span>Tutorat</span></h3>
        </div>

        <div class="image">
            <img src="../../public/img/homg-img.svg" alt="">
        </div>

    </div>

</section>
<section class="count">

    <div class="box-container">

        <div class="box">
            <i class="fas fa-user-graduate"></i>
            <div class="content">
                <h3><?= $repositoryTuteur->getAllEtudiant($_SESSION['user']->getIDTUT()) ?></h3>
                <p>Eleves</p>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-chalkboard-user"></i>
            <div class="content">
                <h3><?= count($repositoryTuteur->getAll()) ?></h3>
                <p>Tuteurs</p>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-face-smile"></i>
            <div class="content">
                <h3><?= count($repositoryAdmin->getAll()) ?></h3>
                <p>Administrateurs</p>
            </div>
        </div>

    </div>

</section>


<section class="about" id="about">

    <div class="row">

        <div class="image">
            <img src="../../public/img/course-5.svg" alt="">
        </div>
        <?php if ($_SESSION['perm'] == "TUTEUR"): ?>
            <div class="content">
                <h3>Bienvenue <?=  $_SESSION['user']->getPRETUT(); ?> <?= $_SESSION['user']->getNOMTUT(); ?></h3>
                <p>Votre téléphone : <?= $_SESSION['user']->getTELTUT(); ?></p>
                <p>Votre Mail : <?= $_SESSION['user']->getMAITUT(); ?></p>

                <a href="../controller/liste_etudiants_control.php" class="btn">Acceder à mes étudiant</a>
            </div>
        <?php elseif ($_SESSION['perm'] == "ADMIN"): ?>
            <div class="content">
                <h3>Bienvenue <?= $_SESSION['user']->getLOGADM(); ?></h3>
            </div>
        <?php endif; ?>
    </div>

</section>




<?php require_once 'footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
