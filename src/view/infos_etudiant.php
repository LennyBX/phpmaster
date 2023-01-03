<?php
require_once '../../config/appConfig.php';
if(!(isset($_SESSION['user']))) {
    header("location: ../controller/connexion_control.php");
}

$etudiant = $repositoryEtudiant->getById($_GET['idEtudiant']);
$entreprise = $repositoryEntreprise->getById($etudiant->getIDENTETU());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSI - Infos étudiant</title>

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
            <h3>Detail Etudiant <span>FSI</span></h3>
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
            <table class="content-table4">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Specialiter </th>
                    <th>Sa classe</th>
                    <th>Entreprise</th>
                    <th>Sujet d'analyse</th>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Adresse</th>
                    <th>Editer</th>
                    <th>Bilan 1</th>
                    <th>Bilan 2</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?= $etudiant->getNOMETU(); ?></td>
                    <td><?= $etudiant->getPREETU(); ?></td>
                    <td><?= $etudiant->getSPEETU(); ?></td>
                    <td><?= $etudiant->getCLAETU(); ?></td>
                    <td><?= $entreprise != null ? $entreprise->getLIBENT() : '-----'; ?></td>
                    <td><?= $etudiant->getNOMETU(); ?></td>
                    <td><?= $etudiant->getLOGETU(); ?></td>
                    <td><?= $etudiant->getMAIETU(); ?></td>
                    <td><?= $etudiant->getTELETU(); ?></td>
                    <td><?= $etudiant->getNUMRUEETU() . '  ' . $etudiant->getRUEETU() . ',  ' . $etudiant->getCPETU() . '  ' . $etudiant->getVILETU(); ?></td>
                    <td> <a href="../controller/modif_etudiant_control.php" style="color:floralwhite;"><img src="../../public/img/1160515.png" alt="" style="width:40px"/> </a></td>
                    <td> <a href="../controller/modif_etudiant_control.php" style="color:floralwhite;"><img src="../../public/img/51646.png" alt="" style="width:40px"/> </a></td>
                    <td> <a href="../controller/modif_etudiant_control.php" style="color:floralwhite;"><img src="../../public/img/51646.png" alt="" style="width:40px"/> </a></td>

                </tr>

                </tbody>
            </table>


        </div>

    </div>

</section>
<!-- about section ends -->

<!-- courses section starts  -->



<?php require_once 'footer.php'; ?>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
