<?php
require_once '../../config/appConfig.php';
if(!(isset($_SESSION['user']))) {
    header("location: ../controller/connexion_control.php");
} else {
    $bilan1 = $repositoryNote1->getByIdEtudiant(1);
}

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


<?php require_once 'navbar.php'; ?>

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
    <?php if (!is_null($bilan1)): ?>
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
                    <td><?= $bilan1->getDATBIL1(); ?></td>
                    <td><?= $bilan1->getNOTENTNOT(); ?></td>
                    <td><?= $bilan1->getNOTDOSNOT(); ?></td>
                    <td><?= $bilan1->getNOTORANOT(); ?></td>
                    <td><?= $bilan1->getREMNOTBIL1(); ?></td>
                </tr>

                </tbody>
            </table>


        </div>
    <?php else:?>
    <div class="row">
        <div class="content">
            <h2 style="color: white;">Cet étudiant ne possède pas de bilan 1 pour le moment...</h2>
        </div>
    </div>
    <?php endif; ?>
</section>


<?php require_once 'footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>
