<?php

require_once '../../config/appConfig.php';
if(!(isset($_SESSION['user']))) {
    header("location: ../controller/connexion_control.php");
}
?>
<head>
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
            <a href="../controller/administration_control.php">Paramètres</a>
            <a href="../controller/deconnexion_control.php">Déconnexion</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

</header>
