<?php
require_once '../../config/appConfig.php';
if(!(isset($_SESSION['user']))) {
    header("location: ../controller/connexion_control.php");
}

$note1_etu = $_SESSION['bilan1_etudiant'];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSI - Bilan 1</title>

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
            <h3>Bilan 1 Etudiant <span>FSI</span></h3>
        </div>

        <div class="image">
            <img src="../../public/img/homg-img.svg" alt="">
        </div>

    </div>

</section>



<section class="about" id="about">
    <?php if (!is_null($note1_etu)): ?>
    <div class="row">
        <div class="content">
            <table class="content-table2">
                <thead>
                <tr>
                    <th>La date de la visite en entreprise </th>
                    <th>La note fixée par l’entreprise </th>
                    <th>La note du dossier</th>
                    <th>La note d’oral</th>
                    <th>Des remarques éventuelles</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= $note1_etu->getDATBIL1(); ?></td>
                    <td><?= $note1_etu->getNOTENTNOT(); ?></td>
                    <td><?= $note1_etu->getNOTDOSNOT(); ?></td>
                    <td><?= $note1_etu->getNOTORANOT(); ?></td>
                    <td><?= $note1_etu->getREMNOTBIL1(); ?></td>
                </tr>

                </tbody>
            </table>

        </div>
    </div>
    <?php else:?>
    <div class="row">
        <div class="content">
            <h2 style="color: white;">Cet étudiant ne possède pas de bilan 1 pour le moment...</h2>
        </div>
    </div>
    <?php endif; ?>
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
