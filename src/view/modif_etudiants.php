<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification Etudiant</title>
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
            <a href="index.html">Accueil</a>
            <a href="Liste_etudiant.html">Liste Etudiant</a>
            <a href="Admin.html">Parametre</a>
            <a href="#teachers">Deconnexion</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

</header>

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>Modification Etudiant <span>FSI</span></h3>
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
                <h1>Modification Etudiant </h1>
            </div>

            <div class="input_field">
                <input type="text" id="nom" placeholder="Votre nom">
            </div>

            <div class="input_field">
                <input type="text" id="nom" placeholder="Votre Prénoms">
            </div>

            <div class="input_field">
                <input type="text" id="nom" placeholder="Votre Mail">
            </div>

            <div class="input_field">

                <input type="text" id="nom" placeholder="Votre Spécialité">
            </div>

            <div class="input_field">
                <input type="text" id="nom" placeholder="Votre Téléphonne">
            </div>

            <div class="input_field">
                <input type="text" id="nom" placeholder="Votre Classe">
            </div>

            <div class="input_button">
                <a href="#contact" class="btn">Modifiez un Etudiant</a>
            </div>

        </form>

        </div>

    </div>

</section>


<footer class="footer">

    <section>


        <div class="credit">&copy; copyright @ 2022 by <span>mr. PHPMASTER</span> | all rights reserved!</div>

    </section>

</footer>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>
