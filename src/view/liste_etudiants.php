<?php
require_once '../../config/appConfig.php';

if(isset($_SESSION['user'])) {
    if ($bdd) {
        $studentsList = $repositoryEtudiant->getAll($bdd);
    } else {
        $studentsList = null;
    }
    header("location: ../view/modif_etudiants.php");
} else {
    header("location: accueil_control.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
    <link href="../../public/css/main.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e3c4ffb28a.js" crossorigin="anonymous"></script>

</head>
<body>

<nav class="NavbarItems">
    <img  class="navbar-logo" src="../../public/img/FSI_logo.png">
    <ul class="nav-menu">
        <li>
            <a  class="nav-link" href="A.html"><i class="fa-solid fa-house-user"></i>
                Accueil
            </a>
        <li>
            <a  class="nav-link" href="L.html"><i class="fa-solid fa-list"></i>
                Liste Etudiant
            </a>
        </li>

        <li>
            <a class="nav-link" href="/"><i class="fa-solid fa-right-to-bracket"></i>
                Deconnexion
            </a>
        </li>
    </ul>
</nav>

<div class="container_etudiant">

    <table class="table align-middle mb-0 bg-white" style="margin-top: 200px;width: 75%; margin-left: 220px">
        <thead class="bg-light">
        <tr>
            <th>Nom</th>
            <th>Spécialité </th>
            <th>Num de téléphone</th>
            <th>Classe</th>
            <th>Editer</th>
            <th>Informations</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($studentsList as $value):
            ?>
            <tr>
                <!-- # 1 eleves  -->
                <td>
                    <div class="d-flex align-items-center">
                        <img src="../../public/img/etudiant-removebg.png" alt="" style="width: 45px; height: 45px" class="rounded-circle"
                        />
                        <div class="ms-3">
                            <p class="fw-bold mb-1"><? $value->getNOMETU(); ?></p>
                            <p class="text-muted mb-0"><? $value->getMAIETU(); ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1"><? $value->getSPEETU(); ?></p>
                </td>
                <td>
                    <span class="badge badge-success rounded-pill d-inline"><? $value->getTELETU(); ?></span>
                </td>
                <td><? $value->getCLAETU(); ?></td>


                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Edit
                    </button>
                </td>

                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        Pour plus d'info
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>


<footer class="Footeritems">
    <img  class="footer-logo" src="../../public/img/FSI_logo.png">
    <ul class="footer-menu">
        <li>
            <a  class="nav-link" href="A.html"><i class="fa-solid fa-house-user"></i>
                Mention légales
            </a>

    </ul>
</footer>


</body>
</html>
