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

    <footer class="footer">

        <section>


            <div class="credit">&copy; copyright @ 2022 by <span>PHPMASTER Group</span> | all rights reserved!</div>

        </section>

    </footer>
<?php
