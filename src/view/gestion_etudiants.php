<?php
require_once '../../config/appConfig.php';

if(!(isset($_SESSION['user']))) {
    header("location: ../controller/connexion_control.php");
}elseif (isset($_SESSION['perm']) && $_SESSION['perm'] !== "ADMIN"){
    header("location: ../controller/connexion_control.php");
} else {
    $etudiants = $repositoryEtudiant->getAll();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSI - Gestion des étudiants</title>

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

<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Gestion étudiants <span>FSI</span></h3>
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
            <table class="content-table">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Mail</th>
                    <th>Spécialité</th>
                    <th>Téléphone</th>
                    <th>Classe</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach ($etudiants as $value):
                    ?>
                    <tr>
                        <td><?= $value->getNOMETU(); ?></td>
                        <td><?= $value->getPREETU(); ?></td>
                        <td><?= $value->getMAIETU(); ?></td>
                        <td><?= $value->getSPEETU(); ?></td>
                        <td><?= $value->getTELETU(); ?></td>
                        <td><?= $value->getCLAETU(); ?></td>
                        <td> <a href="../controller/infos_etudiant_control.php?idEtudiant=<?= $value->getIDETU(); ?>" style="color:floralwhite;"><img src="../../public/img/189689.png" alt="" style="width:40px"/> </a></td>
                        <td> <a href="../controller/modif_etudiant_control.php?idEtudiant=<?= $value->getIDETU(); ?>" style="color:floralwhite;"><img src="../../public/img/1160515.png" alt="" style="width:40px"/> </a></td>
                        <td> <a href="../controller/modif_etudiant_trait_control.php?idEtudiant=<?= $value->getIDETU(); ?>&delete" class="supprimer" style="color:floralwhite;"><img src="../../public/img/crossmark.png" alt="" style="width:40px"/> </a></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>


        </div>

    </div>

</section>
<!-- about section ends -->

<!-- courses section starts  -->



<footer class="footer">

    <section>


        <div class="credit">&copy; copyright @ 2022 by <span>PHPMASTER Group</span> | all rights reserved!</div>

    </section>

</footer>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../scripts/script.js">

</script>

</body>
</html>
