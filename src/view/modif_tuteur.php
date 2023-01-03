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
    <title>FSI - Modification Tuteur</title>

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
            <h3>Modification Tuteur <span>FSI</span></h3>
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

            <form class="container" method="post" action="../controller/modif_tuteur_trait_control.php">
                <div class="title">
                    <h1>Modification Tuteur <?=  $_SESSION['infos_tuteur']->getNOMTUT();  ?> <?= $_SESSION['infos_tuteur']->getPRETUT(); ?></h1>
                </div>

                <div class="input_field">
                    <input type="text" name="id" id="id" placeholder="Votre ID (non modifiable)" value="<?= $_SESSION['infos_tuteur']->getIDTUT(); ?>" readonly>
                </div>

                <div class="input_field">
                    <input type="text" name="nom" id="nom" placeholder="Votre nom" value="<?= $_SESSION['infos_tuteur']->getNOMTUT(); ?>">
                </div>

                <div class="input_field">
                    <input type="text" name="prenom" id="prenom" placeholder="Votre prénom" value="<?= $_SESSION['infos_tuteur']->getPRETUT(); ?>">
                </div>

                <div class="input_field">
                    <input type="text" name="mail" id="mail" placeholder="Votre mail" value="<?= $_SESSION['infos_tuteur']->getMAITUT(); ?>">
                </div>


                <div class="input_field">
                    <input type="text" name="telephone" id="telephone" placeholder="Votre téléphone" value="<?= $_SESSION['infos_tuteur']->getTELTUT(); ?>">
                </div>


                <div class="input_button">
                    <input type="submit" class="btn" value="Modifier le Tuteur">
                </div>

            </form>

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
