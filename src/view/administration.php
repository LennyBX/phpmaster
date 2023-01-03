<?php
require_once '../../config/appConfig.php';

if(!(isset($_SESSION['user']))) {
    header("location: ../controller/connexion_control.php");
} else {
    $tuteur = $repositoryTuteur->getAll();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin FSI</title>
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

<!-- header section starts  -->

<?php require_once 'navbar.php'; ?>

<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Admin Tuteur  <span>FSI</span></h3>
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
                    <th>Prenoms</th>
                    <th>TEL</th>
                    <th>Mot de passe</th>
                    <th>Login</th>
                    <th>Editer</th>
                    <th>Supprimer</th>
                    <th>Affecter</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tuteur as $value) { ?>
                    <tr>
                        <td><?php echo $value->getNOMTUT() ?></td>
                        <td><?php echo $value->getPRETUT() ?></td>
                        <td><?php echo $value->getTELTUT() ?></td>
                        <td><?php echo $value->getMDPTUT() ?></td>
                        <td><?php echo $value->getLOGTUT() ?></td>
                        <td> <a href="../controller/modif_tuteur_control.php?idTuteur=<?= $value->getIDTUT(); ?>" style="color:floralwhite;"><img src="../../public/img/1160515.png" alt="" style="width:40px"/> </a></td>
                        <td> <a href="../controller/modif_tuteur_trait_control.php?idTuteur=<?= $value->getIDTUT(); ?>&delete" style="color:floralwhite;"><img src="../../public/img/crossmark.png" alt="" style="width:40px"/> </a></td>
                        <td> <a c href="affectation_etudiants.php" style="color:floralwhite;">
                                &plus;</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>


        </div>

    </div>

</section>
<!-- about section ends -->


<section class="about" id="about">

    <div class="row">

        <div class="image">
            <img src="../../public/img/course-1.svg" alt="">
        </div>

        <div class="content">
            <h3>Pour ajouter un étudiant</h3>
            <p>Ceci est très simple, il suffit simplement de cliquer sur le bouton est de remplir les éléments nécessaires
                à l'inscription de ce denier !</p>
            <a href="../controller/ajout_etudiant_control.php" class="btn">Ajouter un étudiant</a>
        </div>

    </div>

</section>
<!-- courses section starts  -->


<section class="about" id="about">

    <div class="row">

        <div class="content">
            <h3>Pour Gerer les etudiants !</h3>
            <p>Cliquez ici et vous pourrez gere tout les étudiants !</p>
            <a href="../controller/gestion_etudiant_control.php" class="btn">Gérer les étudiants</a>
        </div>

        <div class="image">
            <img src="../../public/img/course-5.svg" alt="">
        </div>


    </div>

</section>


<?php require_once 'footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<script src="../../public/script/script.js"></script>

</body>
</html>