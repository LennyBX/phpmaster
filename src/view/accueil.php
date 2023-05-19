<?php
require_once '../../config/appConfig.php';
if(!(isset($_SESSION['user']))) {
    header("location: ../controller/connexion_control.php");
}
if ($_SESSION['perm'] === "TUTEUR"){
    $note1_non_note = $repositoryTuteur->mesEtudiantsSansNote1($_SESSION['user']->getIDTUT());
    $note2_non_note = $repositoryTuteur->mesEtudiantsSansNote2($_SESSION['user']->getIDTUT());
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

<header class="header">

    <section class="flex">

        <img src="../../public/img/FSI_logo.png" style="width: 60px">
        <nav class="navbar">
            <a href="../controller/accueil_control.php">Accueil</a>
            <a href="../controller/liste_etudiants_control.php">Liste étudiants</a>
            <?php if(isset($_SESSION['perm']) && $_SESSION['perm']=="ADMIN"){   ?>
            <a href="../controller/administration_control.php">Paramètres</a>
            <?php
            }
            else echo "";
            ?>
            <a href="../controller/deconnexion_control.php">Déconnexion</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

</header>

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
            <?php if ($_SESSION['perm'] === "TUTEUR") : ?>
            <i class="fas fa-file-contract"></i>
            <div class="content">
                <h3><?= count($repositoryTuteur->mesEtudiantsSansNote1($_SESSION['user']->getIDTUT())) -1 ?></h3>
                <p>Elèves sans note 1 <span class="plus-options-accueil" onclick="plusInfoAccueil(this)">&CenterDot;&CenterDot;&CenterDot;</span></p>
                <div class="content-plus-infos">
                    <?php if ((count($note1_non_note) - 1) > 0):
                    foreach ($note1_non_note as $e){
                        if ($e!=null){?>
                            <a href="infos_etudiant.php?idEtudiant=<?= $e->getIDETU(); ?>"><h3 class="eleve-clickable"><?= $e->getNOMETU() ?></h3></a>
                    <p class="eleve_p"><?= $e->getPREETU() ?></p>
                    <?php
                        }
                    }
                    else:
                    ?>
                    <p>aucuns élèves non notés</p>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
            <?php else : ?>
            <i class="fa-solid fa-user-graduate"></i>
            <div class="content">
                <h3><?= count($repositoryTuteur->getAll()) ?></h3>
                <p>Tuteurs</p>
            </div>
            <?php endif; ?>
        </div>


        <div class="box">
            <?php if ($_SESSION['perm'] === "TUTEUR") : ?>
            <i class="fas fa-file-contract"></i>
            <div class="content">
                <h3><?= count($repositoryTuteur->mesEtudiantsSansNote2($_SESSION['user']->getIDTUT())) -1 ?></h3>
                <p>Elèves sans note 2 <span class="plus-options-accueil" onclick="plusInfoAccueil(this)">&CenterDot;&CenterDot;&CenterDot;</span></p>
                <div class="content-plus-infos">
                    <?php if ((count($note2_non_note) - 1) > 0):
                        foreach ($note2_non_note as $e){
                            if ($e!=null){?>
                                <a href="infos_etudiant.php?idEtudiant=<?= $e->getIDETU(); ?>"><h3 class="eleve-clickable"><?= $e->getNOMETU() ?></h3></a>
                                <p class="eleve_p"><?= $e->getPREETU() ?></p>
                                <?php
                            }
                        }
                    else:
                        ?>
                        <p>aucuns élèves non notés</p>
                    <?php
                    endif;
                    ?>
                </div>
            </div>
            <?php else : ?>
                <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i>
            <div class="content">
                <h3><?= count($repositoryTuteur->getAll()) ?></h3>
                <p>Admins</p>
            </div>
            <?php endif; ?>
        </div>
        <?php if ($_SESSION['perm'] === "TUTEUR") : ?>
        <div class="box">
            <i class="fas fa-face-smile"></i>
            <div class="content">
                 <?php if ($repositoryEtudiant->getAllByTuteur($_SESSION['user']->getIDTUT()) == null) :?>
                    <h3>0</h3>
                <?php else: ?>
                    <h3><?= count($repositoryEtudiant->getAllByTuteur($_SESSION['user']->getIDTUT()))  ?></h3>
                <?php endif;?>
                <p>Etudiants</p>
            </div>
        </div>
        <?php else: ?>
        <div class="box">
            <i class="fas fa-face-smile"></i>
            <div class="content">
                <h3><?= count($repositoryEtudiant->getAll()) ?></h3>
                <p>Etudiants</p>
            </div>
        </div>
        <?php endif; ?>
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




<footer class="footer">

    <section>


        <div class="credit">&copy; copyright @ 2022 by <span>PHPMASTER Group</span> | all rights reserved!</div>

    </section>

</footer>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../scripts/script.js"></script>


</body>
</html>
