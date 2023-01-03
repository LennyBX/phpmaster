<?php
require_once '../../config/appConfig.php';
if(!(isset($_SESSION['user']))) {
    header("location: ../controller/connexion_control.php");
}

$mesEtudiants3OLEN = $repositoryEtudiant->getAll3OLEN();
$mesEtudiants4OLEN = $repositoryEtudiant->getAll4OLEN();
$mesEtudiants5OLEN = $repositoryEtudiant->getAll5OLEN();
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

<?php require_once 'navbar.php'; ?>

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

            <form class="container" method="post" action="../controller/affect_etud_control.php">
                <div class="title">
                    <h1 class="affec">Affectation Etudiant </h1>
                </div>

                <SELECT name="liste_etudiant" size="1" class="select1">
                    <OPTION selected disabled>Choisir un Etudiant en 3OLEN</OPTION>
                    <?php foreach ($mesEtudiants3OLEN as $etudiant) { ?>
                    <OPTION value="<?php echo $etudiant->getIDETU()?>"> <?php echo $etudiant->getPREETU() . ' ' . $etudiant->getNOMETU() ?>
                        <?php } ?>
                </SELECT>

                <SELECT name="liste_etudiant" size="1" class="select2">
                    <OPTION selected disabled>Choisir un Etudiant en 4OLEN</OPTION>
                    <?php foreach ($mesEtudiants4OLEN as $etudiant) { ?>
                    <OPTION value="<?php echo $etudiant->getIDETU()?>"> <?php echo $etudiant->getPREETU() . ' ' . $etudiant->getNOMETU() ?>
                        <?php } ?>
                </SELECT>

                <SELECT name="liste_etudiant" size="1" class="select3">
                    <OPTION selected disabled>Choisir un Etudiant en 5OLEN</OPTION>
                    <?php foreach ($mesEtudiants5OLEN as $etudiant) { ?>
                    <OPTION value="<?php echo $etudiant->getIDETU()?>"> <?php echo $etudiant->getPREETU() . ' ' . $etudiant->getNOMETU() ?>
                        <?php } ?>
                </SELECT>



                <div class="input_button2">
                    <button type="submit" class="btn" value="">Affectez cette Etudiant</button>
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
